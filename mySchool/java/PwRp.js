function myFunctionX() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function myFunctionS() {
    var x = document.getElementById("repassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}