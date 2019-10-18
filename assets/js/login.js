function signInValidate(){

	
	var nic=document.getElementById("nic").value;
	var password=document.getElementById("pwd").value;


	var nicRegEx_1=/^[0-9]{9,9}[vV]{1,1}$/;
	var nicRegEx_2=/^[0-9]{12,12}$/;


	if(!(nicRegEx_1.test(nic)||nicRegEx_2.test(nic))){
		alert("Enter a valid NIC !! \n For example '975630879V or 199506716789'");
		document.getElementById("nic").focus();
		event.preventDefault();

	}else if(password.value==""){
		alert("password cannot be empty");
		document.getElementById("pwd").focus();
		event.preventDefault();

	}else{
		return true;
	}
}