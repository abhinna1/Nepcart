<?php
    require_once('../signup page/FormDesign.php');
    class LoginInput extends FormDesign{
        public function formInput(){
            return <<<HTML
                <form method="POST">
                    <h4>E-mail</h4> <input type="email" name= "email" class="form-control">
                    <h4>Password</h4> <input type="password" name="password"class="form-control">
                    <button class = "btn btn-success" style="margin-top:10px;">Login</button>
                    <a href="../signup page/registration.php" class = "btn btn-success" style="margin-top:10px; margin-left:10px;"> Create new account</a>
                </form>
            HTML;
        
    }
    
    public function inputPage(){
        require_once '../signup page/FormDesign.php';
        $FormDesign = new LoginInput();
        $body = $this->formInput();
        return $FormDesign->formCard($body);
    }
}
?>