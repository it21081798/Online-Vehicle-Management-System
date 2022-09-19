
function checkPassword(){
	var v1 =  document.getElementById("pwd1").value;
	var v2 =  document.getElementById("pwd2").value;

	if (v1 != v2){
		alert ("Password Mismatch !");
	}

	else{
		alert("Password Match");
	}
}
function AcceptTerms (){
	var chk = document.getElementById("chkTerms");
	var sub = document.getElementById("subReg");

	if (chk.checked){
		sub.disabled = false;
	}
	else {
		sub.disabled = true;
	}
}	
