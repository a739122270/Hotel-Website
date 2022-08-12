
function Registerstaff(){
var Username = document.getElementById("Username")
var Password = document.getElementById("Password")
var ID = document.getElementById("ID")
var PhoneNumber = document.getElementById("PhoneNumber")
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

if (ID.value.length != 6) {
    Errormsg.innerHTML = "Please enter 6-bit ID number";
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
if (PhoneNumber.value.length != 11) {
   Errormsg.innerHTML = "Please enter 11-bit Phone number";
   isError = false;
   return false;
}
else for(var i=0;i<Username.value.charCodeAt(i);i++){
   if((PhoneNumber.value.charCodeAt(i)<48)||(PhoneNumber.value.charCodeAt(i)>57)){
       Errormsg.innerHTML = "Please enter numbers or letters";
       isError = false;
    return false;
   }
}

if(isError == true){
   Errormsg.innerHTML = " "
   return true;
}
}
