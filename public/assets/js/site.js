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

	$(".search-query").keyup(function(){
		var tr = $("table tr:gt(0)");

		if ($(this).val() == "")
		{
			tr.show();
		}

		tr.hide();
		var re = new RegExp($(this).val(), "i");
		tr.each(function(){
			if ($(this).text().match(re))
			{
				$(this).show();
			}
		})
	});


});