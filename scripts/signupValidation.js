document.getElementById("signupForm").onsubmit = validate;

function validate()
{
    var isValid = true;

    //check if fields are blank
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var zip = document.getElementById("zip").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (fname == "")
    {
        var fnameError = document.getElementById("fnameError");
        fnameError.style.visibility = "visible";
        // alert("First name is invalid. Please try again.");
        isValid = false;
    }
    if (lname == "")
    {
        var lnameError = document.getElementById("lnameError");
        lnameError.style.visibility = "visible";
        // alert("Last name is invalid. Please try again.");
        isValid = false;
    }
    if (address == "")
    {
        var addressError = document.getElementById("addressError");
        addressError.style.visibility = "visible";
        // alert("Address is invalid. Please try again.");
        isValid = false;
    }
    if (city == "")
    {
        var cityError = document.getElementById("cityError");
        cityError.style.visibility = "visible";
        // alert("City is invalid. Please try again.");
        isValid = false;
    }
    if (state == "")
    {
        var stateError = document.getElementById("stateError");
        stateError.style.visibility = "visible";
        // alert("State is invalid. Please try again.");
        isValid = false;
    }
    if (zip == "")
    {
        var zipError = document.getElementById("zipError");
        zipError.style.visibility = "visible";
        // alert("Zipcode is invalid. Please try again.");
        isValid = false;
    }
    if (phone == "")
    {
        var phoneError = document.getElementById("phoneError");
        phoneError.style.visibility = "visible";
        // alert("Phone number is invalid. Please try again.");
        isValid = false;
    }
    if (email == "")
    {
        var emailError = document.getElementById("emailError");
        emailError.style.visibility = "visible";
        // alert("Email is invalid. Please try again.");
        isValid = false;
    }
    if (password == "")
    {
        var passwordError = document.getElementById("passwordError");
        passwordError.style.visibility = "visible";
        // alert("Password is invalid. Please try again.");
        isValid = false;
    }


    return isValid;
}