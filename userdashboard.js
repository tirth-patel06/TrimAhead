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