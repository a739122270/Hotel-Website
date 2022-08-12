               function LoginCheck(){
                var Username = document.getElementById("User")
                var Password = document.getElementById("Pass")
                var Errormsg = document.getElementById("errorsub")
                Errormsg.style.cssText="width:500px; color:#c81e27; position:relative; bottom:20px;font-size:18px;font-family: 'Segoe print','Comic Sans MS';"
                               
                var isError = true;
                if (Username.value.length == 0) {
                  Errormsg.innerHTML = "Please enter your username"
                isError = false;
                return false;
               }
               if (Password.value.length == 0) {
                  Errormsg.innerHTML = "Please enter your password"
                isError = false;
                return false;
               }
               if(isError == true){
                  Errormsg.innerHTML = " "
                  return true;
               }
               }

