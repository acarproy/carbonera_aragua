
 @if (isset($action))
    {!! Form::model($clientes, ['route' => [$action, $clientes->id ], 'method'=>'PUT']) !!}
@else
    {!! Form::open(['route' => 'admin.clientes.store']) !!}
@endif 
	<div class="box-body">
		<div class="form-group">
			{!! Form::label('razon', 'Razón Social:', ['class' => 'control-label']) !!}
			{!! Form::text('razon', null, ['class' => 'form-control','placeholder' => 'Ingrese la razón social']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('rif', 'RIF:', ['class' => 'control-label']) !!}
			{!! Form::text('rif', null, ['class' => 'form-control','placeholder' => 'Ingrese el RIF']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('telefono', 'Teléfono 1:', ['class' => 'control-label']) !!}
			{!! Form::text('telefono', null, ['class' => 'form-control','placeholder' => 'Ingrese teléfono 1']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('telefono2', 'Teléfono 2:', ['class' => 'control-label']) !!}
			{!! Form::text('telefono2', null, ['class' => 'form-control','placeholder' => 'Ingrese teléfono 2']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('correo', 'Correo Electrónico:', ['class' => 'control-label']) !!}
			{!! Form::text('correo', null, ['class' => 'form-control','placeholder' => 'Ingrese correo electrónico']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado_id', 'Estado:', ['class' => 'control-label']) !!}<br>
			{!! Form::select('estado_id', $list_venEstados, null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('ciudad_id', 'Ciudad:', ['class' => 'control-label']) !!}<br>
			{!! Form::select('ciudad_id', $list_venCiudades, null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('direccion', 'Dirección:', ['class' => 'control-label']) !!}
			{!! Form::text('direccion', null, ['class' => 'form-control','placeholder' => 'Ingrese dirección']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('exento', 'Exento de IVA:', ['class' => 'control-label']) !!}<br>
			{!! Form::checkbox('exento', '1', null, ['class' => 'toggle_button','data-on-text' => 'SI','data-off-text' => 'NO']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estatus', 'Estatus:', ['class' => 'control-label']) !!}<br>
			{!! Form::checkbox('estatus', '1', null, ['class' => 'toggle_button','data-on-text' => 'Activado','data-off-text' => 'Desactivado']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('user_id', 'Asignar usuario:', ['class' => 'control-label']) !!}<br>
			{!! Form::select('user_id', $list_users, null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="box-footer">
		{!! Form::submit('Enviar', array('class' => 'btn btn-primary')) !!}
	</div>
{!! Form::close() !!}
@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/common.js") }}"></script>
    <script src="{{ asset ("public/assets/admin/js/clientes.js") }}"></script>
    <script> window.url_var = '<?=url('/');?>' </script>
@endsection
