<div class="col-md-12">
	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="true">{{ trans('admin/profile.form.tab.userInfo') }}</a></li>
			<li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">{{ trans('admin/profile.form.tab.security') }}</a></li>
		</ul>
		<div class="tab-content">
			<div id="tab1" class="tab-pane active">
				{!! Form::model($user, ['route' => [$action1, $user->id], 'method'=>'PUT', 'files'=>true]) !!}
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('name', 'Nombre:', ['class' => 'control-label']) !!}
									{!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese su nombre']) !!}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('last', 'Apellido:', ['class' => 'control-label']) !!}
									{!! Form::text('last', null, ['class' => 'form-control','placeholder' => 'Ingrese su apellido']) !!}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('ci', 'Cédula:', ['class' => 'control-label']) !!}
									{!! Form::text('ci', null, ['class' => 'form-control','placeholder' => 'Ingrese su cédula']) !!}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('email', 'Correo Electrónico:', ['class' => 'control-label']) !!}
									{!! Form::email('email', null, ['class' => 'form-control','Ingrese su correo electrónico']) !!}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('phone', 'Teléfono:', ['class' => 'control-label']) !!}
									{!! Form::text('phone', null, ['class' => 'form-control','Ingrese su teléfono']) !!}
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						{!! Form::submit(trans('admin/users.form.submit'), array('class' => 'btn btn-primary')) !!}
					</div>
				{!! Form::close() !!}
			</div>
			<div id="tab2" class="tab-pane">
				{!! Form::model($user, ['route' => [$action2], 'method'=>'PUT', 'files'=>true]) !!}
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('chg_password[current]', trans('admin/profile.form.password.current.title'), ['class' => 'control-label']) !!}
									{!! Form::Password('chg_password[current]', ['class' => 'form-control','placeholder' => trans('admin/profile.form.password.current.placeholder')]) !!}
								</div>
								<div class="form-group">
									{!! Form::label('chg_password[new]', trans('admin/profile.form.password.new.title'), ['class' => 'control-label']) !!}
									{!! Form::Password('chg_password[new]', ['class' => 'form-control','placeholder' => trans('admin/profile.form.password.new.placeholder')]) !!}
								</div>
								<div class="form-group">
									{!! Form::label('chg_password[repeat]', trans('admin/profile.form.password.repeat.title'), ['class' => 'control-label']) !!}
									{!! Form::Password('chg_password[repeat]', ['class' => 'form-control','placeholder' => trans('admin/profile.form.password.repeat.placeholder')]) !!}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group ">
									{!! Form::label('leave_user', trans('admin/profile.form.leave_user.check')) !!}
									{!! Form::checkbox('leave_user', '1') !!}
									<div id="leave_user_msg" style="display:none;">{!! trans('admin/profile.form.leave_user.msg') !!}</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						{!! Form::submit(trans('admin/users.form.submit'), array('class' => 'btn btn-primary')) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/common.js") }}"></script>
    <script src="{{ asset ("public/assets/admin/js/profile.js") }}"></script>
@endsection