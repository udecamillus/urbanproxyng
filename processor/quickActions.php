<?php
require_once('../app.php');
if ($_POST['action'] == 'callBack') {


    $data = sanitizeInput($_POST);

    if ($err = emptyField($data)) {
        echo $err;
        die;
    }

    extract($data, EXTR_OVERWRITE);

    if (!validatePhoneNumber($callback_number)) {
        echo $callback_number . " is not a valid mobile number";
        die;
    }


    $sql = $conn->query("SELECT * FROM callbacks WHERE callback_num = '$callback_number' AND call_prop = '$prop'");

    if ($sql->num_rows > 0) {
        echo 'you have already requested for a callback. try chatting or calling seller';
        die;
    } else {
        $date = date('D d M Y');
        $sql = $conn->query("INSERT INTO callbacks (callback_num,call_prop,prop_owner,call_date) VALUES('$callback_number','$prop','$owner','$date')");

        if ($sql === TRUE) {
            echo "success";
            die;
        } else {
            echo "something went wrong, please try again";
            die;
        }
    }
} else if ($_POST['action'] == 'mark_as_sold') {


    $data = sanitizeInput($_POST);

    if ($err = emptyField($data)) {
        echo 'Sorry! some variables was not sent, please try again.';
        die;
    }

    extract($data, EXTR_OVERWRITE);

    if ($conn->query("DELETE FROM posts WHERE prop_id = '$prop'") === TRUE) {
        $conn->query("DELETE FROM callbacks WHERE call_prop = '$prop'");
        if ($conn->query("UPDATE accounts SET sales = sales + 1  WHERE tag = '$prop_owner'") === TRUE) {
            echo "success";
            die;
        } else {
            echo "Sorry!, Something went wrong.";
            die;
        }
    }else {
        echo "Sorry!, Something went wrong.";
        die;
    }
} else {
    echo ('access blocked');
    die;
}
