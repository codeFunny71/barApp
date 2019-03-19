document.getElementById("loginForm").onsubmit = validate;

function validate()
{
    var isValid = true;

    //check if fields are blank
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email == "" || password == "")
    {
        var loginError = document.getElementById("loginError");
        loginError.style.visibility = "visible";
        // alert("Email or password is incorrect. Please try again.");
        isValid = false;
    }

    return isValid;
}