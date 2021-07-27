<?php

require_once("initialize.php");

  $username = $_SESSION['user_id'] ?? '';
  $message = $_POST['textmessage'] ?? '';
  $sendingto = $_POST['sent_to'] ?? '';
$errors=[];
if(is_blank($username)) {
    $errors[] = "Unknown User.";
}
if(is_blank($message)) {
    $errors[] = "You can not Send en amplty text";
}
if(is_blank($sendingto)) {
    $errors[] = "Unknown Chatid";
}
if(is_ajax_request()) {
  
    if(!empty($errors)) {
        $result_array = array('Errors' => $errors);
        echo json_encode($result_array);
        exit;
    }
    if(empty($errors)){
        $msg=array("sent_by"=>$username,"sent_to"=>$sendingto,"msg"=>$message);
    
        $msg_failure_error = "Error While Sending The Message.";
        $admin = find_user_by_id($sendingto); 
        if($admin) {
            //check if the password from form match with the encrypted password
            if($sendingto==$admin['unique_id']) {
               $result=send_message_to($msg);
                if($result) {
                    echo "true";
                    exit;}
                }
            else{
                $errors[] = $msg_failure_error;
            $result_array = array('Errors' => $errors);
             echo json_encode($result_array);
            }

        } else {
            // no username found
            $errors[] = $msg_failure_error;
            $result_array = array('Errors' => $errors);
             echo json_encode($result_array);
            }
    }
    else {
        // no username found
        $errors[] = $msg_failure_error;
        $result_array = array('Errors' => $errors);
         echo json_encode($result_array);
    }
}
/*
else{

    if(!empty($errors)) {
                $_SESSION['authErrors'] = $errors;
                redirect_to('private/index.php');
                return;
    }

        // if there were no errors, try to login
        if(empty($errors)) {
            // Using one variable ensures that msg is the same
            $msg_failure_error = "Unknown Username or Password";
            //return an associative array with the user Data
            $admin = find_user_by_username($username); 
            if($admin) {
                //check if the password from form match with the encrypted password
                if(password_verify($password, $admin['hashed_password'])) {
                    // password matches
                    //create Sessions to Login
                    log_in_admin($admin);
                    //send to the login page
                    redirect_to('private/index.php');
                }else{
                    $errors[] = $msg_failure_error;
                }
            } else{
                // no username found
                $errors[] = $msg_failure_error;
                }
                $result_array =$errors;
                $_SESSION['authErrors'] = $result_array;
                redirect_to('private/index.php');
        }
    }

?>

*/



