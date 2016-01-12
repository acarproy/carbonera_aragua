$(document).ready(function($){
	// menu
	$('input[name="menu_show"]')
		.on('switchChange.bootstrapSwitch', function(event, state) {
			if (state) {
				$('#menu_ops').slideDown();
			} else {
				$('#menu_ops').slideUp();
			}
		});
	if (!$('input[name="menu_show"]').attr("checked")) {
		$('#menu_ops').css('display','none');
	}
	//bootstrap multiselect
	$('#search').multiselect({
		search: {
			left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
			right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
		}
	});
});