@extends('admin.layouts.master')
@section('title', 'Categorias de productos')
@section('content')
	<div class="box-body" data-ajxtable="productosCat">		
		<table id="productosCat_table" class="table table-striped table-bordered dt-responsive nowrap">
			<thead>
				<tr>
					<th>Id</th>
					<th>Descripción</th>
					<th>Estatus</th>
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
