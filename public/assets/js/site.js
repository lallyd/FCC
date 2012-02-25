$(document).ready(function(){

	$( "#customer" ).autocomplete({
		source: "/customer/ajax_search",
		minLength: 2
	});

	$("#job-form").submit(function(){
		if (!$("#customer").length){ return true; }
		var customer = $("#customer").val();
		if (! confirm("Is this the correct customer: '"+ customer + "'?"))
		{
			return false;
		}
	});

});