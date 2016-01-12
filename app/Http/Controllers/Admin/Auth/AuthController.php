<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Laravel\Socialite\Contracts\Factory as Socialite;
use App\Models\Admin\Role;
use App\Models\Admin\SocialData;
use App\Models\Admin\Customers;
use Input;
use Session;
use Mail;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use Lang;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/admin';
    protected $loginPath = '/login';
    private $maxLoginAttempts = 5;
    private $lockoutTime = 300; //5 minutes

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Socialite $socialite)
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->socialite = $socialite;
    }

    public function getLogin() {
        return view('admin.auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        //validate if is an active '0' user
        if (Auth::validate([$this->loginUsername() => $request->email, 'password' => $request->password, 'active' => 0])) {
            return redirect($this->loginPath())
                ->withInput($request->only($this->loginUsername(), 'remember'))
                ->withErrors(trans('auth.inactive'));
        }

        //Validate whether the input is email, if yes Auth::attempt using email, else attempt using username
        $field = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$field => $request->input('email')]);

        if (Auth::attempt($request->only($field, 'password'), $request->has('remember'))) {
            //validate if is an active '2' user
            $user= Auth::user();
            if($user->active==2){
                $user->update(['active' => 1]);
                Session(['back' => 'back']);
            }else{
                if(Session::has('back')){
                    Session::forget('back');
                }
            }

            //response
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    /**
    * Show the application registration form.
    *
    * @return \Illuminate\Http\Response
    */
    public function getRegister() {
        $lang      = Lang::locale();
        return view('admin.auth.register',compact('lang'));
    }

    /**
    * Handle a registration request for the application.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function postRegister(RegistrationRequest $request) 
    {
        $User = $this->create($request->all());
        if (!$User->active) {
            $activation_code = array( 'activation_code' => $User->activation_code);
            //Sending email confirmation
            Mail::send('emails.register', $activation_code, function($message) {
                $message->to(Input::get('email'), Input::get('username'))
                    ->subject(trans('register.email-registration-subject'));
            });
            return redirect()->back()->with('email-registration-sent-success', trans('register.email-registration-sent-success'));
        } else {
            //Auto-login
            Auth::login($User);
            return redirect($this->redirectPath());
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $DataUser = [
            'username'        => $data['username'],
            'password'        => bcrypt($data['password']),
            'name'            => $data['name'],
            'last'            => $data['last'],
            'ci'              => $data['ci'],
            'email'           => $data['email'],
            'phone'           => $data['phone'],
            'activation_code' => str_random(30),
        ];

        //User create
        $User = User::create($DataUser);

        //Client role by default
        $User->assignRole(1);

        return $User;
    }

    public function confirmRegistration($activation_code)
    {
        if(!$activation_code) {
            return redirect('login')->withErrors(['credentials'=>trans('register.activation_code_required')]);
        }

        $user = User::whereActivationCode($activation_code)->first();

        if (!$user) {
            return redirect('login')->withErrors(['credentials'=>trans('register.invalid_registration_code')]);
        }

        $user->active          = 1;
        $user->activation_code = null;
        $user->save();

        return redirect('login')->with('registration-success', trans('register.registration-success'));
    }
}
