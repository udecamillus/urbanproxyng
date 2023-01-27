<?php

// doump any variable and end process
function dnd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

// set am alert to be deliverd to user  *can come with any color
function setAlert($my_title, $msg, $msg_color, $my_icon)
{
    $build = "iziToast.show({title: '$my_title',message: '$msg',color: '$msg_color',icon: 'iziToast-icon $my_icon',position: 'bottomCenter'});";
    return setSession('alert', $build);
}

// delivers the already set alert 
function showAlert()
{
    if (isset($_SESSION['alert'])) {
        echo ($_SESSION['alert']);
        unset($_SESSION['alert']);
    }
}

// creates any session and assign a value to it as $data
function setSession($session_name, $data)
{
    $_SESSION["$session_name"] = $data;
}

//  checks if a particular session name is set,
// returns the session data is set and false if not
function checkSession($session_name)
{
    if (isset($_SESSION[$session_name])) {
        return $_SESSION[$session_name];
    } else {
        return FALSE;
    }
}


//unset a particular session with the session name
function unsetSession($session_name)
{
    unset($_SESSION[$session_name]);
}

// check if a form field is empty
// can take arrays or variable, returns and error message 
// if empty and false is not empty
function emptyField($data)
{
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            if (empty($value) || strlen($value) < 3) {
                $key = preg_replace('/_/i', ' ', $key);
                return $key . " field is empty or invalid";
            }
        }
    } elseif (empty($data)) {
        return "Field is empty";
    }
    return FALSE;
}

// sanitize any input,accepts variables or array
function sanitizeInput($data)
{
    $clean_data = [];
    if (is_array($data)) {
        foreach ($data as $name => $value) {
            $clean_input = filter_var($value, FILTER_SANITIZE_STRING);
            $clean_data = array_merge($clean_data, [$name => $clean_input]);
        }
        return $clean_data;
    } else {
        return filter_var($data, FILTER_SANITIZE_STRING);
    }
}

// validates any email 
function validateEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        return FALSE;
    } else {
        return TRUE;
    }
}

// validate any nigerian number
function validatePhoneNumber($phone_number)
{
    $num = str_replace([' ', '+', '-'], ['', '', ''], $phone_number);

    if (strlen($num) == 11 || strlen($num) == 13) {
        return TRUE;
    } else {
        return FALSE;
    }
}

// redirect page to another location
function redirect($page)
{
    header("location: $page");
    die;
}

// secure a page by checking if a particular session is set
function securePage($checkData, $gotoPage)
{
    if (!isset($_SESSION[$checkData])) {
        redirect(ROOT . $gotoPage);
    }
}

// secure a password by hashing and salting
function securePassword($password, $confirm_password)
{
    if (strlen($password) < 6) {
        $err = ['err' => "Password must be upto six(6) or more characters"];
        return $err;
    } elseif ($password !== $confirm_password) {
        $err = ['err' => "Password and confirm password do not match"];
        return $err;
    } else {
        $pass = password_hash($password, PASSWORD_DEFAULT);
        return $pass;
    }
}

// check if a user email and phone if it's already registered
function registered($email, $phone)
{
    global $conn;
    $sql = $conn->query("SELECT * FROM accounts WHERE email = '$email' OR phone = '$phone'");
    if ($sql->num_rows > 0) {
        $data = $sql->fetch_assoc();
        return $data;
    } else {
        return 'user do not exist';
    }
}

// generate random string numbers 
function randomString($length = 10)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for (
        $i = 0;
        $i < $length;
        $i++
    ) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// check user tag 
function checkTag()
{
    global $conn;
    do {
        $tag = randomString();
        $sql = $conn->query("SELECT * FROM accounts WHERE tag = '$tag'");
    } while ($sql->num_rows > 0);
    return $tag;
}

// close open connection 
function closeConn()
{
    global $conn;
    $conn->close();
}

// run a select query
function dbGetData($what, $table, $where)
{
    global $conn;
    $rows = [];
    $sql = $conn->query("SELECT $what FROM $table  $where");
    if ($sql->num_rows > 0) {
        while ($data = $sql->fetch_assoc()) {
            array_push($rows, $data);
        }
        return $rows;
    } else {
        return FALSE;
    }
}

// get the user data with login session
function getUserData()
{
    global $conn;
    extract($_SESSION['activeUser']);

    $sql = $conn->query("SELECT * FROM accounts  WHERE tag = '$tag'");
    if ($sql->num_rows > 0) {
        $data = $sql->fetch_assoc();
        return $data;
    } else {
        return FALSE;
    }
}

//Get only user first name from full name
function firstName($full_name)
{
    $name = explode(' ', $full_name);
    return ($name[1]);
}

// get profile picture or avatar
function userPic($acct_photo)
{
    if (empty($acct_photo)) {
        $pic = ROOT . 'assets/images/profile_av.png';
        return $pic;
    } else {
        $pic = ROOT . "uploads/profile/$acct_photo";
        return $pic;
    }
}

// upload post images and return image name
function uploadImages($move_to_location)
{

    $images = [];
    foreach ($_FILES as $key => $value) {
        $img = $_FILES[$key];
        $f_name = $img['name'];
        $f_type = $img['type'];
        $f_tmp = $img['tmp_name'];
        $f_error = $img['error'];
        $f_size = $img['size'];

        if (!empty($f_name)) {
            $target_f = $move_to_location;
            $new_fname = uniqid('', true);

            $file_extension = explode('.', $f_name);
            $file_extension = strtolower(end($file_extension));

            $white_list = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
            $fname = $new_fname . '.' . $file_extension;
            $locate =  $target_f . $fname;

            // dnd($locate);

            if (in_array($file_extension, $white_list)) {
               
                if (!$f_error) {
                    $move_f = move_uploaded_file($f_tmp, $locate);

                    if ($move_f) {
                        array_push($images, $fname);
                    } else {
                        $err = "We encountered a problem, please try again";
                        setAlert('error', $err, 'red', 'ico-error');
                        redirect(ROOT . 'app/post-properties');
                    }
                } else {
                    $err = "We couldn't upload your images, please try again";
                    setAlert('error', $err, 'red', 'ico-error');
                    redirect(ROOT . 'app/post-properties');
                }
            } else {
                $err = "some of your images, are not image files.";
                setAlert('error', $err, 'red', 'ico-error');
                redirect(ROOT . 'app/post-properties');
            }
        }

    }

    return $images;
}

// get cover image for each post 
function coverImage($image){
  $images = explode(',',$image);
    return $images[0];
}

// get number of images uploaded in post
function imgCount($img){
    $imgs = explode(',',$img);
    return count($imgs);
}