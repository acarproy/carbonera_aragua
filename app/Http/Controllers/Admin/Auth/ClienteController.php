<?php
namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;

use App\Http\Requests\ClienteRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\Clientes;
use App\Models\Admin\VenEstados;
use App\Models\Admin\VenCiudades;
use Auth;
use Hash;
use Session;
use Datatable;
use URL;
use App;
use Mail;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        $route    = URL::route('admin.clientes.index');
        return view('admin.clientes.index',compact('clientes', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $clientes         = new Clientes;
        $list_users       = ['' => 'Sin usuario asignado'] + $clientes->listUsers();
        $list_venEstados  = ['' => 'Seleccione el estado'] + VenEstados::lists('estado', 'id_estado')->toArray();
        $list_venCiudades = ['' => 'Seleccione la ciudad'] + VenCiudades::lists('ciudad', 'id_ciudad')->toArray();
        $route    = 'admin.clientes.store';
        return View('admin.clientes.create')->with(compact('clientes','route','list_users','list_venEstados','list_venCiudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ClienteRequest $request)
    {
        $input    = $request->all();
        if (!isset($input['exento'])) { $input['exento'] = 0; }
        if (!isset($input['estatus'])) { $input['estatus'] = 0; }
        $clientes = Clientes::create($input);

        Session::flash('flash_message', 'Cliente creado exitosamente');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {       

        return Datatable::collection(Clientes::all())
        ->showColumns('id', 'razon', 'rif', 'estatus')
        ->searchColumns('id', 'razon', 'rif', 'estatus')
        ->orderColumns('id', 'razon', 'rif', 'estatus')
        ->addColumn('Actions',function($model){
            return '<a href="clientes/'.$model->id.'/edit" class="btn btn-info pull-left"><span class="glyphicon glyphicon-pencil"></span> Editar</a>';
        })
        ->make();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $clientes         = Clientes::find($id);
        $list_users       = ['' => 'Sin usuario asignado'] + $clientes->listUsers();
        $list_venEstados  = ['' => 'Seleccione el estado'] + VenEstados::lists('estado', 'id_estado')->toArray();
        $list_venCiudades = ['' => 'Seleccione la ciudad'] + VenCiudades::lists('ciudad', 'id_ciudad')->toArray();
        $action   = 'admin.clientes.update';
        return View('admin.clientes.edit', compact('clientes','action','list_users','list_venEstados','list_venCiudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $input    = $request->all();
        if (!isset($input['exento'])) { $input['exento'] = 0; }
        if (!isset($input['estatus'])) { $input['estatus'] = 0; }
        $clientes = Clientes::find($id);

        $clientes->update($input);

        Session::flash('flash_message', 'Cliente actualizado exitosamente');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Clientes::find($id)->update(array('estatus' => 0));
        Session::flash('flash_message', 'Cliente desactivado exitosamente');
    }

    public function cargarCiudades($id) {
        return VenCiudades::where('id_estado','=',$id)->lists('ciudad', 'id_ciudad')->toJson();
    }
}