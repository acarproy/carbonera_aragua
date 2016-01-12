
 @if (isset($action))
    {!! Form::model($productos, ['route' => [$action, $productos->id ], 'method'=>'PUT']) !!}
@else
    {!! Form::open(['route' => 'admin.productos.store']) !!}
@endif 
	<div class="box-body">
		<div class="form-group">
			{!! Form::label('producto_categoria_id', 'Categoria:', ['class' => 'control-label']) !!}
			{!! Form::select('producto_categoria_id', $productosCat, null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('codigo', 'Código:', ['class' => 'control-label']) !!}
			{!! Form::text('codigo', null, ['class' => 'form-control','placeholder' => 'Ingrese el código']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('referencia', 'Referencia del producto:', ['class' => 'control-label']) !!}
			{!! Form::text('referencia', null, ['class' => 'form-control','placeholder' => 'Ingrese la referencia del producto']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('precio', 'Precio:', ['class' => 'control-label']) !!}
			{!! Form::text('precio', null, ['class' => 'form-control','placeholder' => 'Ingrese el precio']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('exento', 'Exento de IVA:', ['class' => 'control-label']) !!}<br>
			{!! Form::checkbox('exento', '1', null, ['class' => 'toggle_button','data-on-text' => 'SI','data-off-text' => 'NO']) !!}
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
    <script src="{{ asset ("public/assets/admin/js/productos.js") }}"></script>
@endsection