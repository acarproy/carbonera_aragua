
 @if (isset($action))
    {!! Form::model($user, ['route' => [$action, $user->id ], 'method'=>'PUT', 'files'=>true]) !!}
@else
    {!! Form::open(['route' => 'admin.users.store', 'files'=>true, 'autocomplete' => 'false']) !!}
@endif 
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('username', trans('admin/users.form.username.title'), ['class' => 'control-label']) !!}
					{!! Form::text('username', null, ['class' => 'form-control','placeholder' => trans('admin/users.form.username.placeholder'), isset($user->username)?'readonly':'']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password', trans('admin/users.form.password.title'), ['class' => 'control-label']) !!}
					{!! Form::password('password', ['class' => 'form-control','placeholder' => trans('admin/users.form.password.placeholder')]) !!}
				</div>
				<div class="form-group">
					{!! Form::label('avatar', trans('admin/users.form.avatar'), ['class' => 'control-label']) !!}
					{!! Form::file('avatar', ['class' => 'form-control', 'style' => '', 'id' => 'avatar_input']) !!}
					<br />
					<div class="text-center">
						@if ($user->avatar)
						<img src="{{$user->avatar}}" class="img-circle avatar_input">
						{!! Form::label('avatar_remove', trans('admin/users.form.remove_avatar')) !!}
						{!!Form::checkbox('avatar_remove', '1')!!}
						@else 
						<img src="{{asset(config('assets.images.paths.input')."/noavatar.jpg")}}" class="img-circle avatar_input">
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('name', 'Nombre:', ['class' => 'control-label']) !!}
					{!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese un nombre']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('last', 'Apellido:', ['class' => 'control-label']) !!}
					{!! Form::text('last', null, ['class' => 'form-control','placeholder' => 'Ingrese un apellido']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('ci', 'Cédula:', ['class' => 'control-label']) !!}
					{!! Form::text('ci', null, ['class' => 'form-control','placeholder' => 'Ingrese un cédula']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('email', trans('admin/users.form.email.title'), ['class' => 'control-label']) !!}
					{!! Form::email('email', null, ['class' => 'form-control','placeholder' => trans('admin/users.form.email.placeholder')]) !!}
				</div>
				<div class="form-group">
					{!! Form::label('phone', trans('admin/users.form.phone.title'), ['class' => 'control-label']) !!}
					{!! Form::text('phone', null, ['class' => 'form-control','placeholder' => trans('admin/users.form.phone.placeholder')]) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('active', trans('admin/users.form.status'), ['class' => 'control-label']) !!}<br />
					{!! Form::checkbox('active', '1', null, ['class' => 'toggle_button']) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="text-center"><h2 class="page-header">{{trans('admin/users.form.assign_roles_section')}}</h2></div>
			@foreach ($roles as $role)
			<div class="col-md-{{$col_md}} text-center">
				<div class ="small-box bg-aqua">
					<div class ="inner">
						<h3>{{ $role['role_title'] }}</h3>
						{!! Form::checkbox('roles[]', $role['id'], in_array($role['id'], $role_user), ['class' => 'toggle_button']) !!}
					</div>                
				</div>				
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::submit(trans('admin/users.form.submit'), array('class' => 'btn btn-primary')) !!}
				</div>
			</div>
		</div>
	</div>
{!! Form::close() !!}
@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/table.grid.js") }}"></script>
    <script src="{{ asset ("public/assets/admin/js/users.js") }}"></script>
@endsection