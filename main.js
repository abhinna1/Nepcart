function login(){
    var homepage = "Homepage.php";
    location.href=homepage;
}
function signup(){
    location.href = "signup page/registration.php";
}

function showPw() {
    var x = document.getElementById("pswent");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function connected() {
    console.log("Connection Established Successfully!");
}
function connectionFailed() {
    console.log("Failed To Establish Connection");
}
