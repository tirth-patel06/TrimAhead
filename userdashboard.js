document.querySelectorAll(".change button").forEach(button => {
    button.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default button action
        let inputField = this.closest(".field, .field-phone, .field.addr").querySelector("input, textarea");
        
        if (inputField && inputField.disabled) {
            inputField.disabled = false; // Enable the field
            inputField.required = true;
            this.textContent = ""; // Change button text
        }
    });
});

document.getElementById("photo-edit").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("photo-input").click(); // Open file picker
});

document.getElementById("photo-input").addEventListener("change", function(event) {
    let file = event.target.files[0];
    if (file) {
        document.getElementById("file-name").textContent = file.name; // Show file name
    } else {
        document.getElementById("file-name").textContent = ""; // Clear if no file selected
    }
});
function userdash(){
    const mobile=document.querySelector("#Phone_Number").value;
    const name=document.querySelector("#Name").value;
    const email=document.querySelector("#Email").value;
    const address=document.querySelector("#Address").value;
    location.href="userdash.php?Name="+name+"&mobile="+mobile+"&Email="+email+"&Address="+address;


}
function Submit(){
    alert("Your request has been submitted");
}
