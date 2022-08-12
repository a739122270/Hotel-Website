
function Register(){
var Username = document.getElementById("Username")
var Password = document.getElementById("Password")
var FirstName = document.getElementById("FirstName")
var LastName = document.getElementById("LastName")
var Email = document.getElementById("Email")
var PhoneNumber = document.getElementById("PhoneNumber")
var PassportNumber = document.getElementById("PassportNumber")
var Errormsg = document.getElementById("errorsubmit")
Errormsg.style.cssText="width:500px; color:#c81e27; position:relative; bottom:20px;font-size:18px;"


var isError = true;
if (Username.value.length > 20 || Username.value.length < 6) {
   Errormsg.innerHTML = "Please enter 6-20 characters for username";
 isError = false;
 return false;
}else for(var i=0;i<Username.value.charCodeAt(i);i++){
if((Username.value.charCodeAt(i)<48)||(Username.value.charCodeAt(i)>57) && (Username.value.charCodeAt(i)<97)||(Username.value.charCodeAt(i)>122)){
   Errormsg.innerHTML = "Please enter numbers or letters";
   isError = false;
  return false;
 }
}
if (Password.value.length > 20 || Password.value.length < 6) {
   Errormsg.innerHTML = "Please enter 6-20 characters for password"
 isError = false;
 return false;
}
if (FirstName.value.length == 0) {
   Errormsg.innerHTML = "Please enter your first name"
 isError = false;
 return false;
}
if (LastName.value.length == 0) {
   Errormsg.innerHTML = "Please enter your last name"
 isError = false;
 return false;
}
if (Email.value.length == 0) {
   Errormsg.innerHTML = "Please enter your Email"
 isError = false;
 return false;
}
if (PhoneNumber.value.length != 11) {
   Errormsg.innerHTML = "Please enter 11-bit Phone number";
   isError = false;
   return false;
}
else for(var i=0;i<Username.value.charCodeAt(i);i++){
   if((PhoneNumber.value.charCodeAt(i)<48)||(PhoneNumber.value.charCodeAt(i)>57)){
       Errormsg.innerHTML = "Please enter numbers";
       isError = false;
    return false;
   }
}
if (PassportNumber.value.length == 0) {
   Errormsg.innerHTML = "Please enter your Passport Number"
 isError = false;
 return false;
}
if(isError == true){
   return true;
}
}
