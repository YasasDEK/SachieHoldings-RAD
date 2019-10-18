function ConfirmPassword(){
	var pwd=document.getElementById("pwd").value;
	var confirm_pwd=document.getElementById("pwdConfirm").value;

	if(pwd!=confirm_pwd){
		alert("Password mismatch");
		document.getElementById("pwdConfirm").focus();
		event.preventDefault();

	}else{
		return true;
		//confirm_pwd.setCustomValidity('');
	}
}

function signUpValidate(){
	
	var fname=document.getElementById("fName").value;
	var lname=document.getElementById("lName").value;
	var nic=document.getElementById("nic").value;
	var dob=document.getElementById("dob").value;
	var licence=document.getElementById("licence").value;
	var dobStr=dob.toString();
	var phone=document.getElementById("telephone").value;

	var no=document.getElementById("no").value;
	var strt=document.getElementById("street").value;
	var city=document.getElementById("city").value;

	var password=document.getElementById("pwd").value;
	var password_Confirm=document.getElementById("pwdConfirm").value;

	var textRegEx=/^[a-zA-Z]*$/i;
	var strtRegEx=/^[a-zA-Z\sa-zA-Z]*$/i;

	var nicRegEx_1=/^[0-9]{9,9}[vV]{1,1}$/;
	var nicRegEx_2=/^[0-9]{12,12}$/;

	var licenceRegEx=/^[0-9]{8,9}$/;

	var phoneRegEx=/^[0-9]{3,3}[\s]{0,1}[0-9]{3,3}[\s]{0,1}[0-9]{4,4}$/;

	var noRegEx_1=/^[0-9]{1,4}[/\s]{0,1}[0-9]{0,1}$/;
	var noRegEx_2=/^[0-9]{1,4}[/\s]{0,1}[A-D]{0,1}$/i;


	if(!(textRegEx.test(fname))){
		window.scrollTo(0,300);
		alert("Enter a valid name as First name !!\n For example 'Sanjali' ");
		document.getElementById("fName").focus();
		event.preventDefault();

	}else if(!(textRegEx.test(lname))){
		window.scrollTo(0,300);
		alert("Enter a valid name as last name!! \n For example 'Nanayakkara' ");
		document.getElementById("lName").focus();
		event.preventDefault();

	}else if(!(nicRegEx_1.test(nic)||nicRegEx_2.test(nic))){
		window.scrollTo(0,300);
		alert("Enter a valid NIC !! \n For example '975630879V or 199506716789'");
		document.getElementById("nic").focus();
		event.preventDefault();

	}else if(!(licenceRegEx.test(licence) || licence=='')){
		window.scrollTo(0,300);
		alert("Enter a valid Licence no !! \n For example '99123456 or 234567890'\n (8 or 9 digit no)");
		document.getElementById("licence").focus();
		event.preventDefault();

	}else if(!(phoneRegEx.test(phone))){
		window.scrollTo(0,300);
		alert("Enter a phone number as 071 054 0555 or 0710540555");
		document.getElementById("telephone").focus();
		event.preventDefault();

	}else if(!(noRegEx_1.test(no) || noRegEx_2.test(no))){
		alert("Enter no as '122/1' or '122/A' !!");
		document.getElementById("no").focus();
		event.preventDefault();

	}else if(!(strtRegEx.test(strt))){
		alert("Enter a street as 'Temple Road'");
		document.getElementById("street").focus();
		event.preventDefault();

	}else if(!(textRegEx.test(city))){
		alert("Enter a city as 'Maharagama'");
		document.getElementById("city").focus();
		event.preventDefault();

	}else{
		ConfirmPassword();
	}
}