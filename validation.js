$(function(){
	$('#gpsurg, #add1, #add2, #add3').change(function() {
			text = $(this).val();
			//Alpha and Num
			if( /[^a-zA-Z0-9]$/.test(text) ) {
					//errors.push(test);
					$(this).parent().parent().addClass("error").removeClass("success");
					
				}
			else {
					$(this).parent().parent().addClass("success").removeClass("error");
				}
	});

	$('#suburb').change(function() {
			text = $(this).val();
			//Alpha
			if( /^[a-zA-Z]+$/.test(text)) {
					$(this).parent().parent().addClass("success").removeClass("error");
				}
			else {
					$(this).parent().parent().removeClass("success").addClass("error");
				}
	});
	
	$('#state').change(function() {
			text = $(this).val();
			//Alpha
			if( text != "Please Enter a State...") {
					$(this).parent().parent().addClass("success").removeClass("error");
				}
			else {
					$(this).parent().parent().removeClass("success").addClass("error");
				}
	});

	$('#postcode, #area, #phone').change(function() {
			text = $(this).val();
			//Num
			if( /^\s*\d+\s*$/.test(text) ) {
					$(this).parent().parent().addClass("success").removeClass("error");
					
				}
			else {
					$(this).parent().parent().addClass("error").removeClass("success");
				}
	});
});

function validate() {

	var errors = new Array();
	
	//Alphanumeric Validation
	function alphaNum(test){
		var text = document.getElementById(test).value;
		if( /[^a-zA-Z0-9]$/.test(text) ) {
				errors.push(test);
			}
		return true
	}
	
	//Numeric Validation
	function Num(test){
		var text = document.getElementById(test).value;
		if( /^\s*\d+\s*$/.test(text) ) {
				errors.push(test);
			}
		return true
	}
	
	//Alpha Validation
	function Alpha(test){
		var text = document.getElementById(test).value;
		if( /^[a-zA-Z]+$/.test(text) ) {
				errors.push(test);
			}
		return true
	}
	
	
	if (alphaNum('gpsurg') && alphaNum('add1') && Alpha('suburb') && Num('postcode') && Num('state') && Num('area') && Num('phone') && errors.length == 0)
	{
		alert("works");
	}
	else {
		legend = "<legend> Please Correct the following errors </legend><ul>";
		list = new Array();
		document.getElementById("errors").innerHTML = legend;
		for (i=0; i<errors.length;i++){
		 list.push("<li>"+errors[i]+"</li>")
		 
		 console.log(errors[i]);
		}
	return false;
	}
}

	

