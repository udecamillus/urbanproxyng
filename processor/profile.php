<?php
require_once('../app.php');
if ($_POST['action'] == 'profile_picture') {
    extract($_POST);

    $img = $_FILES['file_profile'];
    $f_name = $img['name'];
    $f_type = $img['type'];
    $f_tmp = $img['tmp_name'];
    $f_error = $img['error'];
    $f_size = $img['size'];

    if (empty($f_name)) {
        $err = "No image added for profile";
        setAlert('error', $err, 'red', 'ico-error');
        redirect(ROOT . 'app/profile');
    }

    $target_f = DR_ROOT . DS . 'uploads' . DS . 'profile' . DS;
    $new_fname = uniqid('', true);

    $file_extension = explode('.', $f_name);
    $file_extension = strtolower(end($file_extension));

    $white_list = ['jpg', 'jpeg', 'png'];
    $fname = $new_fname . '.' . $file_extension;
    $locate =  $target_f . $fname;
    if (in_array($file_extension, $white_list)) {
        if (!$f_error) {
            $move_f = move_uploaded_file($f_tmp, $locate);

            if ($move_f) {
                if ($conn->query("UPDATE accounts SET acct_photo='$fname' WHERE tag = '$user_tag'") === TRUE) {
                    closeConn();
                    $err = "Profile updated";
                    setAlert('successful', $err, 'green', 'ico-success');
                    redirect(ROOT . 'app/profile');
                } else {
                    closeConn();
                    $err = "We encountered a problem, please try again";
                    setAlert('error', $err, 'red', 'ico-error');
                    redirect(ROOT . 'app/profile');
                }
            } else {
                $err = "We encountered a problem, please try again";
                setAlert('error', $err, 'red', 'ico-error');
                redirect(ROOT . 'app/profile');
            }
        } else {
            $err = "We couldn't upload this image";
            setAlert('error', $err, 'red', 'ico-error');
            redirect(ROOT . 'app/profile');
        }
    } else {
        $err = "Only image files are allowed";
        setAlert('error', $err, 'red', 'ico-error');
        redirect(ROOT . 'app/profile');
    }
}elseif ($_POST['action'] == 'personal_info') {
    $data = sanitizeInput($_POST);
    extract($data, EXTR_OVERWRITE);

    if(!empty($phone_2)){
        if (!validatePhoneNumber($phone_2)) {
            echo $phone_2 . " is not a valid mobile number";
            die;
        }
    }

    if ($conn->query("UPDATE accounts SET business_name='$business_name', phone_2='$phone_2', address='$address', comment='$comment' WHERE tag = '$user_tag'") === TRUE) {
        closeConn();
       echo "success";
        die;
    } else {
        closeConn();
       echo "We encountered a problem, please try again";
        die;
    }

} elseif ($_POST['action'] == 'social') {
    $data = sanitizeInput($_POST);
    extract($data, EXTR_OVERWRITE);

    if ($conn->query("UPDATE accounts SET twitter='$twitter', facebook='$facebook', instagram='$instagram' WHERE tag = '$user_tag'") === TRUE) {
        closeConn();
        echo "success";
        die;
    } else {
        closeConn();
        echo "We encountered a problem, please try again";
        die;
    }

} elseif ($_POST['action'] == 'password') {

    if ($err = emptyField($_POST)) {
        echo $err;
        die;
    }

    extract($_POST);

    $hash_pass = securePassword($new_password, $confirm_new_password);
    if (is_array($hash_pass)) {
        echo $hash_pass['err'];
        die;
    }

    if($pass = dbGetData('password','accounts',"WHERE tag='$user_tag'")){
        extract($pass[0], EXTR_OVERWRITE);
    }else{
        echo "connection to database lost";
        die;
    }

    if (password_verify($current_password, $password)) {
        if ($conn->query("UPDATE accounts SET password='$hash_pass' WHERE tag = '$user_tag'") === TRUE) {
            closeConn();
            echo "success";
            die;
        } else {
            closeConn();
            echo "We encountered a problem, please try again";
            die;
        }
    } else {
        echo "current password is incorrect";
        die;
    }

}  else {
    $err = "Action denied";
    setAlert('error', $err, 'red', 'ico-error');
    redirect(ROOT . 'app/profile');
}
