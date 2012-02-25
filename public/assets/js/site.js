$(document).ready(function(){


	var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#customer" ).autocomplete({
			source: "/customer/ajax_search",
			minLength: 2
		});

	$("#job-form").submit(function(){
		var customer = $("#customer").val();
		if (! confirm("Is this the correct customer: '"+ customer + "'?"))
		{
			return false;
		}
	});

});