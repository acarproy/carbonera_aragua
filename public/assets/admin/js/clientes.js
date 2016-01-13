$(document).ready(function(e) {
	$('#estado_id').on('change', function() {
		var est = $(this).val();
		$.ajax({
			url: window.url_var + "/admin/cargar_ciudades/" + est,
            success: function(data){
            	data = JSON.parse(data);
            	x    = '<option value="">Seleccione la ciudad</option>';
		        $.each(data, function(i, value){
					x += '<option value="'+i+'">'+value+'</option>';
		        });
            	$('#ciudad_id').html(x);
            }
        });
	});
});