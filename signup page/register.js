function signup(){
    var homepage = "Home.html";
    location.href=homepage;
}
function showPw() {
    var x = document.getElementById("pswent");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}