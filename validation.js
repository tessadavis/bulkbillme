var errors = new Array();
$(function(){
	$('#gpsurg, #add1, #add2, #add3').change(function() {
			text = $(this).val();
			//Alpha and Num
			if( /[^a-zA-Z0-9]$/.test(text)) {
					//errors.push(test);
					$(this).parent().parent().addClass("error").removeClass("success");
					
				}
			else {
					$(this).parent().parent().addClass("success").removeClass("error");
				}
	});
	
	$('#gpsurg, #add1, #add2, #add3, #suburb, #postcode, #area, #phone').focus(function() {
			text = $(this).val();
			name = $(this).attr("name");
			//If Empty
			if(text == ""  || text == null) {
					$(this).parent().parent().addClass("error").removeClass("success");
					errors.push(name)
					return false
				}
	});
	
		$('#gpsurg, #add1, #add2, #add3, #suburb, #postcode, #area, #phone').blur(function() {
			text = $(this).val();
			name = $(this).attr("name");
			//If not Empty
			if(text != "" ) {
					errors.splice(name)
					return false
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
	
	//State Validation
	function State(test){
		var text = document.getElementById(test).value;
		if( text == "Please Enter a State..." ) {
				errors.push(test);
			}
		return true
	}
	
	function getName(name){
		switch(name){
			case "gpsurg":
				return "GP Surgery Name";
			break;
			
			case "state":
				return "State";
			break;
			
			case "add1":
				return "Surgery Address";
			break;
			
			case "suburb":
				return "Suburb";
			break;
			
			case "postcode":
				return "Postcode";
			break;
			
			case "area":
				return "Area Code";
			break;
			
			case "phone":
				return "Phone Number";
			break;
		}
	}
	
	
	if (alphaNum('gpsurg') && alphaNum('add1') && Alpha('suburb') && Num('postcode') && State('state') && Num('area') && Num('phone') && errors.length == 0)
	{
		alert("works");
	}
	else {
		legend = "<legend> Please Correct the following errors </legend><ul>";
		
		for (i=0; i<errors.length;i++){
		 legend +="<li class='error'>"+getName(errors[i])+"</li>"
		 
		 console.log(errors[i]);
		}
	legend += "</ul>";
	document.getElementById("errors").innerHTML = legend;
	return false;
	}
}

	

