@extends('admin.layouts.access')

@section('title', trans('register.signin_title'))

@section('content')

<div class="register-box">
	<div class="register-logo">
		{!! link_to('/', $title = 'Sistema Interno') !!}
	</div>
	<div class="register-box-body">
		<p class="login-box-msg">{!! trans('register.signin_title') !!}</p>
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			{!! trans('register.msg_errors') !!}
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }} </li>
				@endforeach
			</ul>
		</div>
		@endif
		@if (Session::get('email-registration-sent-success'))
		 <div class="alert alert-success">
		   {{ Session::get('email-registration-sent-success') }}
		</div>
		@endif
		{!! Form::open(['url' => 'register', 'id' => 'register_form']) !!}
			{!! csrf_field() !!}
			<div class="form-group has-feedback">
				{!! Form::text('username', isset($username) ? $username : old('username'), ['id'=>'username', 'required', old('username'), 'class'=>'form-control', 'placeholder'=>trans('register.username')]) !!}
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				{!! Form::password('password', ['id'=>'password', 'required', 'class'=>'form-control', 'placeholder'=>trans('register.password')]) !!}
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				{!! Form::password('password_confirmation', ['id'=>'password_confirmation', 'required', 'class'=>'form-control', 'placeholder'=>trans('register.confirm_password')]) !!}
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				{!! Form::text('name', isset($name) ? $name : old('name'), ['id'=>'name', 'required', 'class'=>'form-control', 'placeholder'=>'Nombre']) !!}
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				{!! Form::text('last', isset($last) ? $last : old('last'), ['id'=>'last', 'required', 'class'=>'form-control', 'placeholder'=>'Apellido']) !!}
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				{!! Form::text('ci', isset($ci) ? $ci : old('ci'), ['id'=>'ci', 'required', 'class'=>'form-control', 'placeholder'=>'Cédula']) !!}
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				{!! Form::text('email', isset($email) ? $email : old('email'), ['id'=>'email', 'required', 'class'=>'form-control', 'placeholder'=>'Correo Electrónico']) !!}
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				{!! Form::text('phone', isset($phone) ? $phone : old('phone'), ['id'=>'phone', 'required', 'class'=>'form-control', 'placeholder'=>'Telefono']) !!}
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							{!! Form::checkbox('agree', 'check', false) !!}
							{!! link_to('#', $title = trans('register.agree_terms')) !!}
						</label>
					</div>
				</div>
				<div class="col-xs-4">
					{!! Form::submit(trans('register.register_button'),['class'=>'btn btn-primary btn-block btn-flat']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection
@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/register.js") }}"></script>
@endsection