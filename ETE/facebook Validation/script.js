function validateForm(){
    var username = document.getElementById("username").value;
    var fullNameError = document.getElementById("fullNameError");

    fullNameError.textContent = "";
    var isValid  = true;
    if(username.trim() === "" || username.length <= 3){
        isValid = false;
        fullNameError.textContent = "Please Enter username";
    }
    return isValid;
}