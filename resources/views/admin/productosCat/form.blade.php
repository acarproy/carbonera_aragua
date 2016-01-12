
 @if (isset($action))
    {!! Form::model($productosCat, ['route' => [$action, $productosCat->id ], 'method'=>'PUT']) !!}
@else
    {!! Form::open(['route' => 'admin.productosCat.store']) !!}
@endif 
	<div class="box-body">
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripción:', ['class' => 'control-label']) !!}
			{!! Form::text('descripcion', null, ['class' => 'form-control','placeholder' => 'Ingrese la descripción']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estatus', 'Estatus:', ['class' => 'control-label']) !!}<br>
			{!! Form::checkbox('estatus', '1', null, ['class' => 'toggle_button','data-on-text' => 'Activado','data-off-text' => 'Desactivado']) !!}
		</div>
	</div>

	<div class="box-footer">
		{!! Form::submit('Enviar', array('class' => 'btn btn-primary')) !!}
	</div>
{!! Form::close() !!}
@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/common.js") }}"></script>
    <script src="{{ asset ("public/assets/admin/js/productosCat.js") }}"></script>
@endsection