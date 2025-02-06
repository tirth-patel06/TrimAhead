document.addEventListener('DOMContentLoaded', () => {
    const mainlogo = document.querySelector('.navbar-logo');
    const loginBox = document.querySelector('.login');
    const enterPin = document.querySelector('.input-box');
  
    mainlogo.addEventListener('click', () => {
      location.href = "./index.html"
    });
  
    loginBox.addEventListener('click', () => {
      location.href = "./login.html"
    });
  
    enterPin.addEventListener("keydown", function (e) {
      if (e.code === "Enter" || e.code === "NumpadEnter" ) { 
        const pincode = enterPin.value
        if(pincode.length == 6){
          console.log(pincode)
          location.href = "./userPage.html?id="+pincode
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
  
    mainlogo.addEventListener('click', () => {
      location.href = "./alogin-index.html"
    });
    
    enterPin.addEventListener("keydown", function (e) {
      if (e.code === "Enter" || e.code === "NumpadEnter" ) { 
        const pincode = enterPin.value
        if(pincode.length == 6){
  
          console.log(pincode)
          location.href = "./alogin_userPage.html?id="+pincode
        }
        else{
          alert("Enter valid 6 digit Pincode")
        }
      }
    });
  });
  
  document.getElementById("userProfile").addEventListener("click", function() {
    window.location.href = "./userdashboard.html";
    // pass link of userDashboard here
  });
  
  document.getElementById("oldBooking").addEventListener("click", function() {
    window.location.href = "./pBook.html";
  });
  
  document.getElementById("signOut").addEventListener("click", function() {
    window.location.href = "./index.html";
  });
  
  // Vandour Dashboard
  
  document.addEventListener('DOMContentLoaded', () => {
    const mainlogo = document.querySelector('.vlogin-navbar-logo');
  
    mainlogo.addEventListener('click', () => {
      location.href = "./vDashbord.html"
    });
  });
