function ValidateEmail()
{
	alert("reached");
var inputText= getElementById('inputEmail').value;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.match(mailformat))
{
document.login-form.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.login-form.email.focus();
return false;
}
}
