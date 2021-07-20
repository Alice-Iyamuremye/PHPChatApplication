<?php

// Functions for encoding the url either using url encode or rawurlencode
function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}


// Function h is for htmlspecialchars to encode html codes
function h($string="") {
  return htmlspecialchars($string);
}

// Function to redirect a user to any page
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}
// Function to check if a request if a post request
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

// Function Check If a request is a get request
function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

//Custom Sweetalert For Displaying Authenticarion erros 
function sweetalerterr($msg,$text){
    $val="<script>
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        showCloseButton: true,
        timer: 4000,";
        $val.="title: '{$text}',";
        $val.='
        html:"<ul class=\"text-danger\">';
        foreach($msg as $error){$val .= "<li>" . h($error) . "</li>";};
        $val.='</ul>"';
            $val.="})</script>";
        return $val;
}
function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
        $output=sweetalerterr($errors,"Please Fix The Following");
  }
  return $output;
}



function display_session_message() {
  // Check if there is a session message and if there is a message in it
  // If there is , then what it will do , it's remove the session and put the message
  if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
      $msg = $_SESSION['message'];
      unset($_SESSION['message']);
      if(!is_blank($msg)) {
          $val="<script>
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
        icon: 'success',
        title: '".h($msg)."'
        })
          </script>";
          return $val;
      }
  }
}

function display_session_authErrors() {
    // Check if there is a session message and if there is a message in it
    // If there is , then what it will do , it's remove the session and put the message
    if(isset($_SESSION['authErrors']) && $_SESSION['authErrors'] != '') {
        $msg = $_SESSION['authErrors'];
        unset($_SESSION['authErrors']);
        if($msg) {
            $val=sweetalerterr($msg,"Error Trying To login");
            return  $val;
        }

    }
  }



// Check is a request was made with Ajax
function is_ajax_request() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

?>
