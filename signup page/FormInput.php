<?php
    
    class Input extends FormDesign{
        public function formInput(){
            return <<<HTML
            <form method="POST">
                <h4>First Name</h4> <input type="text" name="fName" class="form-control">
                <h4>Last Name</h4> <input type="text" name = "lName" class="form-control">
                <h4>E-mail</h4> <input type="email" name= "email" class="form-control">
                <h4>Password</h4> <input type="password" name="password"class="form-control">
                <h4>Confirm-Password</h4> <input type="password" name='cfm_password' class="form-control">

                <h4>Phone Number</h4>
                
                    <select class="form-select" name="phone_code" aria-label="Default select example" name="phone_code" style="display:inline;">
                        <option selected> Nepal (+977)</option>
                        <option India> (+91)</option>
                    </select>
                    <input type="Phone" name="phone" class="form-control" style="width:60%; height:10%; display:inline;">
                
                <h4>Address</h4> <input type="address" name="address"class="form-control">
                <h4>Gender</h4>
                    <div class='form-check'>
                        <input class='form-check-input' type="radio" name="gender" value="Male" id="Male">
                        <label class="form-check-label" for="exampleRadios1" style='while-space:normal; margin-left: 15px;text-indent: 0px;'>
                            Male
                        </label>
                    
                        <input class='form-check-input' type="radio" name="gender" value="Female" id="Female" style="margin-left:20px;">
                        <label class="form-check-label" for="exampleRadios1" style='while-space:normal; margin-left: 35px;text-indent: 0px;'>
                            Female
                        </label>
                    </div>
                    <input class = "btn btn-success"type="submit"style="margin-top:20px; height:">
            </form>
            
            HTML;
        
    }
    
    public function inputPage(){
        require_once 'FormDesign.php';
        $FormDesign = new Input();
        $body = $this->formInput();
        $FormDesign->formCard($body);
        
    }
}
?>