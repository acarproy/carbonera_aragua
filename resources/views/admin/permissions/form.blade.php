
 @if (isset($action))
    {!! Form::model($permission, ['route' => [$action, $permission->id ], 'method'=>'PUT']) !!}
@else
    {!! Form::open(['route' => 'admin.permissions.store']) !!}
@endif 
	<div class="box-body">
		<div class="form-group">
			{!! Form::label('permission_title', trans('admin/permissions.form.permission.title'), ['class' => 'control-label']) !!}
			{!! Form::text('permission_title', null, ['class' => 'form-control','placeholder' => trans('admin/permissions.form.permission.placeholder')]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('permission_slug', trans('admin/permissions.form.slug.title'), ['class' => 'control-label']) !!}
			{!! Form::text('permission_slug', null, ['class' => 'form-control','placeholder' => trans('admin/permissions.form.slug.placeholder')]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('permission_description', trans('admin/permissions.form.description.title'), ['class' => 'control-label']) !!}
			{!! Form::text('permission_description', null, ['class' => 'form-control','placeholder' => trans('admin/permissions.form.description.placeholder')]) !!}
		</div>
	</div>

	<div class="row">
		<div class="text-center">
			<h2 class="page-header">
				Mostrar en menú
				{!! Form::checkbox('menu_show', '1', null, ['class' => 'toggle_button','data-on-text' => 'SI','data-off-text' => 'NO']) !!}
			</h2>
		</div>
		<div class="col-md-12" id="menu_ops">
			<div class="form-group">
				{!! Form::label('menu_module', 'Nombre del modulo', ['class' => 'control-label']) !!}
				{!! Form::text('menu_module', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre del modulo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('menu_module_icon', 'Icono del modulo', ['class' => 'control-label']) !!}
				{!! Form::text('menu_module_icon', null, ['class' => 'form-control','placeholder' => 'Ingrese el icono del modulo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('menu_item', 'Nombre del item', ['class' => 'control-label']) !!}
				{!! Form::text('menu_item', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre del item']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('menu_item_route', 'Ruta del item', ['class' => 'control-label']) !!}
				{!! Form::text('menu_item_route', null, ['class' => 'form-control','placeholder' => 'Ingrese la ruta del item']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="text-center"><h2 class="page-header">{{trans('admin/permissions.form.assign_roles_section')}}</h2></div>
    	<div class="col-xs-5">
    		{!! Form::select('roles_list[]', $list_roles, null, ['id' => 'search', 'class' => 'form-control', 'size' => '8', 'multiple' => 'multiple']) !!}
    	</div>
    	
    	<div class="col-xs-2">
    		<button type="button" id="search_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
    		<button type="button" id="search_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
    		<button type="button" id="search_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
    		<button type="button" id="search_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
    	</div>
    	
    	<div class="col-xs-5">
    		{!! Form::select('roles_assg[]', $assg_roles, null, ['id' => 'search_to', 'class' => 'form-control', 'size' => '8', 'multiple' => 'multiple']) !!}
    	</div>
	</div>

	<div class="box-footer">
		{!! Form::submit(trans('admin/permissions.form.submit'), array('class' => 'btn btn-primary')) !!}
	</div>
{!! Form::close() !!}
@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/common.js") }}"></script>
    <script src="{{ asset ("public/assets/admin/js/multiselect.min.js") }}"></script>
    <script src="{{ asset ("public/assets/admin/js/permissions.js") }}"></script>
@endsection