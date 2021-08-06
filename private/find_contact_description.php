<?php
require_once("initialize.php");
require_login();
$id= $_GET["idt"] ?? $_SESSION['user_id'];
$contact=find_contact_by_id($id);
if(empty($contact)){
    $contact=find_contact_by_id($_SESSION['user_id']);
}
        $result='';
    // Display All Contacts  
        
        $result.="<div class='contactdtls animate__animated animate__fadeInRight'>
                  <img src='assets/images/avatar/".$contact["avatar"]."'>
                  <div class='calicn text-light text-center row justify-content-around'>
                        <div class='col'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='16' fill='currentColor'
                                class='bi bi-telephone-fill' viewBox='0 0 16 16'>
                                <path fill-rule='evenodd'
                                    d='M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z' />
                            </svg>
                        </div>
                        <div class='col'>
                            <i class='zmdi zmdi-email'></i>
                        </div>
                    </div>
                    <hr>
                    <ul class=''>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                            class='bi bi-exclamation-circle-fill' viewBox='0 0 16 16'>
                            <path
                                d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z' />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                       
                        <li><span>Username</span>
                            <p>@".$contact["username"]."</p>
                        </li>
                        <li><span>Email</span>
                            <p class='text-truncate'>".$contact["email"]."</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                class='bi bi-bell-slash-fill' viewBox='0 0 16 16'>
                                <path
                                    d='M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z' />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns='http://www.w3.org/2000/svg' width='23'
                                    height='23' fill='currentColor' class='bi bi-volume-mute-fill' viewBox='0 0 16 16'>
                                    <path
                                        d='M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z' />
                                </svg></p>

                        </li>
                        <li>

                            <p style='color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);'> <svg
                                    xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                    class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                                    <path
                                        d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z' />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>
               ";
            
            
       
       
 
            echo $result;
?>