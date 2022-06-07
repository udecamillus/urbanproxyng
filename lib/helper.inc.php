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
function setAlert($message, $color)
{
    $_SESSION['alert'] = "M.toast({html: '$message',classes: '$color',displayLength:3000})";
}

// delivers the already set alert 
function showAlert()
{
    if (isset($_SESSION['alert'])) {
        echo ($_SESSION['alert']);
        unset($_SESSION['alert']);
    }
}

// creates any sesstion and assign a value to it as $data
function setSession($session_name, $data)
{
    $_SESSION[$session_name] = $data;
}

//  checks if a perticuler session name is set,
// returns the session data is set and false if not
function checkSession($session_name)
{
    if (isset($_SESSION[$session_name])) {
        return $_SESSION[$session_name];
    } else {
        return FALSE;
    }
}


//unset a perticuler session with the session name
function unsetSession($session_name)
{
    unset($_SESSION[$session_name]);
}

// check if a form field is empty
// can take arrys or variable, returns and error message 
// if empty and false is not empty
function emptyField($data)
{
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $key = preg_replace('/_/i', ' ', $key);
                return $key . " field is empty";
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
    }else{
        return filter_var($data, FILTER_SANITIZE_STRING);
    }
}

// validates any email 
function validateEmail($email){
    if (filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE) {
        return FALSE;
    }else {
        return TRUE;
    }
}

// redirect page to another location
function redirect($page){
    header("location: $page");
}

// secure all user dashboard page
function secureUser()
{
    if (!isset($_SESSION['user'])) {
        redirect('signin');
    }
}