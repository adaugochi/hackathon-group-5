
function validateForm() {

	var fname = document.forms.regForm.fname;
	var numericExp = /[0-9]/;
	if (fname.value == "" || fname.value.match(numericExp) ){
		//alert("please enter a valid first name");
		document.getElementById('fnameErr').innerHTML = "please enter a valid first name";
		fname.focus();
		return false;
	}

	var email = document.forms.regForm.email;
	var atpos = email.value.indexOf('@');
	var dotpos = email.value.lastIndexOf('.');
	var pos = dotpos - atpos;
	if (email.value == "" || pos < 5){
		//alert('please enter a valid email address');
		document.getElementById('emailErr').innerHTML = "please enter a valid email address";
		email.focus();
		return false;
	}	

	var companyname = document.forms.regForm.companyname;
	var numericExp = /[0-9]/;
	if (companyname.value == "" || companyname.value.match(numericExp) ){
		//alert("please enter a valid last name");
		document.getElementById('compnameErr').innerHTML = "please enter a valid last name";
		fname.focus();
		return false;
	}

	var address = document.forms.regForm.address;
	var numericExp = /[0-9]/;
	if (address.value == "" || address.value.match(numericExp) ){
		//alert("please enter a valid last name");
		document.getElementById('addressErr').innerHTML = "please enter a valid last name";
		fname.focus();
		return false;
	}

	var password = document.forms.regForm.pwd;
	if (password.value == "" || password.value.length < 6 || password.value.length > 9) {
		//alert("please your password should be 6-8 characters");
		document.getElementById('passwordErr').innerHTML = "please your password should be 6-8 characters";
		password.focus();
		return false;
	}

	var phonenumber = document.forms.regForm.pnum;
	var alphaExp = /[a-zA-Z]/;
	if (phonenumber.value == "" || phonenumber.value.match(alphaExp) || phonenumber.value.length < 8 || phonenumber.value.length > 15){
		//alert("please enter a valid phone number");
		document.getElementById('pnumErr').innerHTML = "please enter a valid phone number";
		phonenumber.focus();
		return false;
	}
}
