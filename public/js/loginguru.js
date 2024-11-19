function login(){  
    gotData1();
  }

function errData(err){      
  console.log("ERROR!")
  console.log(err)  
}

function gotData1(){
  console.log("gabisa");
  let notFoundUser = false;
      
  let username = "guru"      
  let password = "12345678"

  let usernameGuru = document.getElementById("usernameGuru").value
  let passwordGuru = document.getElementById("passwordGuru").value
      

  if(username == usernameGuru && password == passwordGuru){        
      window.location.href = '/nilaisiswa';
      alert("Login Berhasil")
      return false
      console.log("error");
  return      }

  if (notFoundUser == true){
    alert("Username atau Password salah!")
   } 

  else {
        notFoundUser = true;        
 }

 if (notFoundUser == true){
  alert("Username atau Password salah!")
 } 

}





const form1 = document.querySelector(".sign-in-form");

  form1.addEventListener("onsubmit", (e) => {
    e.preventDefault();
    login();
  })