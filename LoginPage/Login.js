class Login{
    constructor(loginDir, signupDir, pwId){
        this.loginDir = loginDir;
        this.signupDir = signupDir;
        this.pwId = pwId

        this.logging =function(){
            var dir = loginDir;
            location.href=dir;
        }

        this.signup = function(){
            location.href = "signupDir";
        }

        this . showPw = function() {
            var x = document.getElementById("pswent");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    }
login = new Login('../signup page/registratioin.php', '../signup page/registratioin.php', 'pswent');
};