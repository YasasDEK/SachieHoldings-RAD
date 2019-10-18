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

function updateValidate(){
	
	var custName=document.getElementById("custName").value;
	var phone=document.getElementById("telephone").value;

	var custAddress=document.getElementById("custAddress").value;

	var strRegEx=/^[a-zA-Z\sa-zA-Z]*$/i;

	var phoneRegEx=/^[0-9]{3,3}[\s]{0,1}[0-9]{3,3}[\s]{0,1}[0-9]{4,4}$/;

	var noRegEx_1=/^[0-9]{1,4}[/\s]{0,1}[0-9]{0,1}$/;
	var noRegEx_2=/^[0-9]{1,4}[/\s]{0,1}[A-D]{0,1}$/i;


	if(!(strRegEx.test(custName))){
		window.scrollTo(0,300);
		alert("Enter a valid name as  name !!\n For example 'Sanjali Supunnadi' ");
		document.getElementById("custName").focus();
		event.preventDefault();

	}else if(!(phoneRegEx.test(phone))){
		window.scrollTo(0,300);
		alert("Enter a phone number as 071 054 0555 or 0710540555");
		document.getElementById("telephone").focus();
		event.preventDefault();

	}else{
		return true;
	}
}