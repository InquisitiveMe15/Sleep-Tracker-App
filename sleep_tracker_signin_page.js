function Validation() {
    let Email = document.Signin.youremail;
    let Password = document.Signin.yourpassword;
    if (email_validation(Email)) {
        if (password_validation(Password)) {
            if (confirm("Check the details filled again and press ok to complete the registration if sure otherwise cancel.")){
                return true;
            }
        }
    }
    return false;
}

function email_validation(Email) {
    let valid_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (Email.value.match(valid_email) && Email.value.length != 0) {
        return true;
    }
    else {
        alert("Enter a valid email address.");
        Email.focus();
        return false;
    }
}

function password_validation(Password) {
    let password_length = Password.value.length;
    if (password_length < 8) {
        alert("Minimum length of Password should be 8 and it can't be empty.");
        Password.focus();
        return false;
    }
    return true;
}
