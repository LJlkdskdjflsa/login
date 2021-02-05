<?php
require_once("./core/init.php");

//var_dump(Token::check(Input::get('token')));

if(Input::exists()){

    // echo "44";
    // echo (Input::get('token'));
    //echo (Token::check(Input::get('token'))) ;
        if(Token::check(Input::get('token'))){
        echo "Submitted";
        //echo Input::get('username');
        $validate = new Validate();
        $validation = $validate->check($_POST,array(
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 60,
            ),
            'email' => array(
                'required' => true,
                'min' => 6,
            ),
            'password' => array(
                'required' => true,
                'min' => 2,
            ),
            'passwordConfirm' => array(
                'required' => true,
                'min' => 2,
                'maches' => 'password',
            )
        ));

        if($validation->passed()){
            // register users
            echo "Passed";
            Session::flash('success','You registered successfully');
            header('Location: index.php' );
        }else{
            // output error
            //foreach($validation->errors() as $error);
            //echo $error . '<br>';
            foreach($validation->errors() as $error){
                echo $error . '<br>' ;
            } 
        }

    }else{
        echo "Error no token";
    }
}

?>
<!-- form input -->
<form method="POST" action="">
    <div  class="form-group">
    <label for="username">Username: </label>
    <input  class="form-control"name="username" id="username" type="text" value="" autocomplete="off">
    <label for='password'>name: </label>
    <input  class="form-control"name="name" id="name" >
    <label for='password'>Email: </label>
    <input  class="form-control"name="email" id="email" >
    <label for='password'>Password: </label>
    <input  class="form-control"name="password" id="password" type="password">
    <label>Confirm Password:  </label>
    <input  class="form-control"name="passwordConfirm" id="passwordConfirm" type="password" >

    </div>
    <div class="modal-footer">
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </div>
</form>