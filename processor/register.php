<?php
require_once('../app.php');
if (isset($_POST['register_user'])) {

    $pass1 = $_POST['password'];
    $pass2 = $_POST['confirm_password'];

    $data = sanitizeInput($_POST);

    if ($err = emptyField($data)) {
        echo $err;
        die;
    }
    extract($data, EXTR_OVERWRITE);

    if (!validateEmail($email_address)) {
        echo $email_address . " is not a valid email address";
        die;
    }

    if (!validatePhoneNumber($phone_number)) {
        echo $phone_number . " is not a valid mobile number";
        die;
    }
    
    $hash_pass = securePassword($pass1, $pass2);
    if(is_array($hash_pass)){
        echo $hash_pass['err'];
        die;
    }

    if (is_array(registered($email_address,$phone_number))) {
        echo "Your <strong>email</strong> or <strong>phone</strong> is already registered";
        die;
    }else {
        $tag = checkTag();
        $sql = $conn->query("INSERT INTO accounts (tag,name,email,phone,state,password) VALUES('$tag','$full_name','$email_address','$phone_number','$state','$hash_pass')");

        if($sql === TRUE){
            echo "success";
            die;
        }else {
            echo "something went wrong, please try again";
            die;
        }
    }
   
    
} else {
    echo ('access blocked');
    die;
}