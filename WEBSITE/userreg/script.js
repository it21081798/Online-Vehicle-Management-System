function checkPassword1(){
	var v1 =  document.getElementById("pw1").value;
	var v2 =  document.getElementById("pw2").value;

	if (v1 != v2){
		alert ("Password Mismatch !");
	}

	else{
		alert("Password Match");
	}
}
function AcceptTerms1 (){
	var chk = document.getElementById("chkTerms1");
	var sub = document.getElementById("subReg1");

	if (chk.checked){
		sub.disabled = false;
	}
	else {
		sub.disabled = true;
	}
}	
