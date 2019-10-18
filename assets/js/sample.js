else if(!(dobStr.split('/')[2]==nic.slice(0,4) || dobStr.split('/')[2].slice(2,2)==nic.slice(0,2))){
		indow.scrollTo(0,300);
		alert("Enter a valid NIC !! \n mismatch with DOB");
		document.getElementById("nic").focus();
		event.preventDefault();

	}