@extends('admin.layouts.master')
@section('title', 'Productos')
@section('content')
	<div class="box-body" data-ajxtable="productos">		
		<table id="productos_table" class="table table-striped table-bordered dt-responsive nowrap">
			<thead>
				<tr>
					<th>Id</th>
					<th>Código</th>
					<th>Referencia</th>
					<th>Precio</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
	@include('admin.partials.master.deletemodal')
@endsection
@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/table.grid.js") }}"></script>
@endsection
