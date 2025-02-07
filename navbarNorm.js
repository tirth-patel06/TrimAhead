
  document.addEventListener('DOMContentLoaded', () => {
  const mainlogo = document.querySelector('.navbar-logo');
  const loginBox = document.querySelector('.login');
  const enterPin = document.querySelector('.input-box');

  mainlogo.addEventListener('click', () => {
    location.href = "./index.php"
  });

  loginBox.addEventListener('click', () => {
    location.href = "./login.php"
  });

  enterPin.addEventListener("keydown", function (e) {
    if (e.code === "Enter" || e.code === "NumpadEnter" ) { 
      const pincode = enterPin.value
      if(pincode.length == 6){
        console.log(pincode)
        location.href = "./userPage.php?id="+pincode
      }
      else{
        alert("Enter valid 6 digit Pincode")
      }
    }
  });
});

// after login


document.addEventListener('DOMContentLoaded', () => {
  const mainlogo = document.querySelector('.alogin-navbar-logo');
  const enterPin = document.querySelector('.alogin-input-box');
  const id = document.querySelector("#id").value;
  mainlogo.addEventListener('click', () => {
    location.href = "./alogin-index.php?mobile="+id;
  });
  
  enterPin.addEventListener("keydown", function (e) {
    if (e.code === "Enter" || e.code === "NumpadEnter" ) { 
      const pincode = enterPin.value
   
      if(pincode.length == 6){

        console.log(pincode)
        location.href = "./alogin_userPage.php?id="+pincode+"&mobile="+id

      }
      else{
        alert("Enter valid 6 digit Pincode")
      }
    }
  });
});

document.getElementById("userProfile").addEventListener("click", function() {
  const id = document.querySelector("#id").value;

  window.location.href = "./userdashboard.php?mobile="+id;
  // pass link of userDashboard here
});

document.getElementById("oldBooking").addEventListener("click", function() {
  const id = document.querySelector("#id").value;
  window.location.href = "./pBook.php?mobile="+id;
});

document.getElementById("signOut").addEventListener("click", function() {
  window.location.href = "./index.php";
});

// Vandour Dashboard

document.addEventListener('DOMContentLoaded', () => {
  const vid=document.querySelector("#vendorid").value;
  const mainlogo = document.querySelector('.vlogin-navbar-logo');

  mainlogo.addEventListener('click', () => {
    location.href = "./vDashbord.php?id="+vid;
  });
});
