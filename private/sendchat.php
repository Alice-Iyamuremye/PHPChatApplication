<?php

require_once("private/initialize.php");

  $username = $_SESSION['user_id'] ?? '';
  $message = $_POST['message'] ?? '';
  $sendingto = $_POST['message'] ?? '';
  $msg=array("sent_by"=>$username,"sent_to"=>$sendingto,"msg"=>$msg);
$errors=[];
if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
}
if(is_blank($message)) {
    $errors[] = "Password cannot be blank.";
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
        $login_failure_msg = "Error While Sending The Message.";
        $admin = find_admin_by_username($username); 
        if($admin) {
            //check if the password from form match with the encrypted password
            if(password_verify($password, $admin['hashed_password'])) {
               $result=send_message_to($msg);
                if($result) {
                    echo "true";
                    exit;}
                }
            else{
                $errors[] = $login_failure_msg;
            $result_array = array('Errors' => $errors);
             echo json_encode($result_array);
            }

        } else {
            // no username found
            $errors[] = $login_failure_msg;
            $result_array = array('Errors' => $errors);
             echo json_encode($result_array);
            }
    }
    else {
        // no username found
        $errors[] = $login_failure_msg;
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
            $login_failure_msg = "Unknown Username or Password";
            //return an associative array with the user Data
            $admin = find_admin_by_username($username); 
            if($admin) {
                //check if the password from form match with the encrypted password
                if(password_verify($password, $admin['hashed_password'])) {
                    // password matches
                    //create Sessions to Login
                    log_in_admin($admin);
                    //send to the login page
                    redirect_to('private/index.php');
                }else{
                    $errors[] = $login_failure_msg;
                }
            } else{
                // no username found
                $errors[] = $login_failure_msg;
                }
                $result_array =$errors;
                $_SESSION['authErrors'] = $result_array;
                redirect_to('private/index.php');
        }
    }

?>

*/



