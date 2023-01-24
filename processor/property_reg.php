<?php
require_once('../app.php');

if($_POST['action'] == 'add property'){
    extract($_POST, EXTR_OVERWRITE);
    if(emptyField($prop_title)){
        setAlert('Error','please add property title','red', 'ico-error');
        redirect(ROOT.'app/post-properties');
    }

    if (emptyField($_FILES['img1']['name'])) {
        setAlert('Error', 'please add property image in the first image filed', 'red', 'ico-error');
        redirect(ROOT.'app/post-properties');
    }

    do {
        $prop_id = random_int(111111, 999999);
        $sql = $conn->query("SELECT * FROM posts WHERE prop_id = '$prop_id'");
    } while ($sql->num_rows > 0);

    $target =  DR_ROOT . DS . 'uploads' . DS . 'posts' . DS;
    $images = implode(',',uploadImages($target));
    $date = date('D d M Y');

    if ($prop_type == 'land') {
        # code...
    }else{
        $sql = $conn ->query("INSERT INTO posts (post_type,prop_id, prop_state, prop_type, prop_title, bedroom, bathroom, seating_room, city, address, status, furnishing, legal, agent, price, pattern, facilities, description, user_tag, images, date) VALUES ('property','$prop_id', 'active', '$prop_type', '$prop_title', '$bedroom', '$bathroom', '$seating_room', '$city', '$address', '$status', '$furnishing', '$legal', '$agent', '$price', '$pattern', '$facilities', '$description', '$user_tag', '$images', '$date')");

        setAlert('Success','property registered successfully','green','ico-success');
        redirect(ROOT."app/store");
    }
}