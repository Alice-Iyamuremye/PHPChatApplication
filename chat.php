<?php 
require_once("private/initialize.php");

require_login();


echo display_errors($errors);
echo display_session_message();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    
      <!-- Font Icon -->
      <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Bootstrap</title>
</head>

<body>
 <!-- The Whole Displayed is Made Using A 3 COlumns Grid Alignment Each Named Section one , Section two , section 3 -->

    <section class="container-fluid">
        <section class="row vh-100">

            <!-- Contact List  Section   -----SECTION ONE
            ------------------------------------------------------------------------------------------------------------- -->
            <section class=" col col-sm-4 col-md-3 p-0 d-none d-sm-inline-block bg-secondary contacts">
                <nav class="navbar navbar-dark bg-dark d-inline-block ">
                    <button class="navbar-toggler" onclick="openNav()">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <!-- Side Menue  -->
                <div id="mySidepanel" class="sidepanel">
                    <div class="closeside">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
                    </div>
                  
                            <div class="tophead">
                            <div> 
                                <a data-toggle="modal" href="#profile">
                                 <img src="assets/images/avatar/<?php echo $_SESSION["avatar"];?>">
                                </a>
                            </div>
                          
                            <div class="myselfinfo">
                                <h3><?php echo $_SESSION["username"]; ?></h3>
                                <h5><?php echo $_SESSION["email"];?></h5>
                            </div>
                            </div>

                    <ul class="list-group list-group-flush  mb-4">
                        <li class="list-group-item list-group-item-light " href="#">
                            <i class="mr-4 zmdi zmdi-accounts-add zmdi-hc-2x"></i>New Group
                        </li>
                        <li class="list-group-item list-group-item-light " href="#">
                            <i class="mr-4 zmdi zmdi-phone zmdi-hc-2x"></i> Calls
                        </li>
                        <li class="list-group-item list-group-item-light " href="#">
                            <i class="mr-4 zmdi zmdi-settings zmdi-hc-2x"></i>Settings
                        </li>
                        <li class="list-group-item list-group-item-light " href="#">
                            <i class="mr-4 zmdi zmdi-lamp zmdi-hc-2x"></i>NightMode
                            <div class="custom-control custom-switch mx-3 d-inline-block">
                                <input class="custom-control-input" id="wkns" type="checkbox" checked> 
                                <label class="custom-control-label" for="wkns"></label>
                            </div>
                        </li>
                        <a href="private/logout.php"><li class="list-group-item list-group-item-light " href="#">
                            <i class="mr-4 zmdi zmdi-close-circle zmdi-hc-2x"></i>Logout
                        </li></a>
                    </ul>
                    
                    

                </div><!-- Side Menue -->
              <script>
                    function openNav() {
                        document.getElementById("mySidepanel").style.width = "350px";
                    }

                    function closeNav() {
                        document.getElementById("mySidepanel").style.width = "0px";
                    }
                </script>

                <!-- Search Form above the contact -->
                <div class="form-outline d-inline-block">
                    <input type="search" id="form1" class="form-control my-2 mx-auto" placeholder="Search "
                        aria-label="Search" />
                </div>

                <!-- Contact List Groups  -->
                <div class="list-group contacts contacts_list" style="height: 80vh; overflow: scroll;">
                    
                </div>


                <div class="d-flex justify-content-around  align-items-stretch settings">
                    <div><a href="#"><i class="fas fa-users mr-1"></i>Groups</a></div>
                    <div><a href="#"><i class="zmdi zmdi-settings zmdi-hc-2x"></i>Settings</a></div>
                    <div><a href="#"><i class="fas fa-plus mr-1"></i>Contact</a></div>
                </div>
                
           
            </section> <!-- Contact Section End ---------------------------------------->
            <!-- Chat Content Section  ----- Section TWO 
            ------------------------------------------------------------------------------------------- -->
            <section class="col p-0 col-sm-8 col-md-9 col-lg-7 d-none d-inline-block bg-dark  message_section">

                <!-- Text To be Displayed When A used First Lend On the Site ANd Havent Selected Any Contact -->
                <div class="container-fluid text-center message d-none dd-0" style="padding:240px 0px;">
                    <h2 class=" text-light align-content-center">please Select a contact</h2>
                </div>

              

                
                <!-- ---------------------------  -->
                <div class="container-fluid message dd-4">
                    <ul class="clearfix list-unstyled" role="tooltip">

                        <li class="me">
                            <div>How Was it in the 19s When it comes to shopping ?.</div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>13:34</span>
                        </li><br>
                        

                    </ul>
                </div>
                <!-- ---------------------------  -->
                <div class="container text-light">
                    <div class="row reply align-items-center">
                        <div class="col-1 col-sm-1 col-xs-1 reply-emojis">
                        <i class="zmdi zmdi-mood zmdi-hc-2x"></i>
                        </div>
                        <div class="col-7 col-sm-9 col-xs-9 reply-main">
                            <textarea class="form-control" rows="1" id="comment"></textarea>
                        </div>
                        <div class="col-1 col-sm-1 col-xs-1 reply-recording">
                            <i class="zmdi zmdi-mic zmdi-hc-2x"></i>
                        </div>
                        <div class="col-1 col-sm-1   col-xs-1 reply-send">
                            <i class="zmdi zmdi-mail-send zmdi-hc-2x"></i>
                        </div>
                    </div>

                </div>


            </section><!-- Chat Section End ---------------------------------------->






            <!-- Chat Description start  Section Three
                  ----------------------------------------------------------------------------------->
            <section class=" col col-lg-2 d-none text-light d-lg-inline-block bg-secondary ">
                <div class="contactdtls d-none dd-0">
                    <img src="images/evariste.jpg">
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>
                <div class="contactdtls  dd-1">
                    <a data-toggle="modal" href="#ddp-1"><img src="images/thumbnail-1.jpg"></a>
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <div class="contactdtls d-none dd-2">
                    <a data-toggle="modal" href="#ddp-2"><img src="images/chess.jpeg"></a>
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <div class="contactdtls d-none dd-3">

                    <a data-toggle="modal" href="#ddp-3"><img src="images/evariste.jpg"></a>

                    <div class="calicn text-light text-center row justify-content-around">
                        <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg></div>
                        <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                            </svg></div>
                    </div>

                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user
                            </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <div class="contactdtls d-none dd-4">
                    <a data-toggle="modal" href="#ddp-4"><img src="images/ange.jpg"></a>
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <!-- Modals Of All Images -->
                <div>

                    <!-- Loggen in User Profile image Modal -->
                    <div class="modal fade" id="profile">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body text-center">
                                <img class="img-fluid" src="assets/images/avatar/<?php echo $_SESSION["avatar"];?>">
                                </div><!-- Modal body-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->

                    <!-- Image Modal dd-3 Start-->
                    <div class="modal fade text-dark" id="dd-3">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">@evariste32</h4>
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body">
                                    <img src="images/evapic.png" class="img-fluid">
                                </div><!-- Modal body-->
                                <div class="modal-footer">
                                    <span class="">Date: june-22-21 12:32</span>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        Close</button>
                                </div> <!-- Modal Header-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->
                </div>
                <!-- Image Modal End-->

            </section><!-- Chat Description   End ---------------------------------------->




        </section><!-- Row Section End Section End ---------------------------------------->
    </section><!-- Container Section  End ---------------------------------------->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
    
setInterval(() =>{
    let xhr= new XMLHttpRequest();
    xhr.open("GET","text.txt",true);
    xhr.onreadystatechange= function (){ //call back function
    if(xhr.readyState== 4 && xhr.status== 200){
        let result=xhr.responseText;
        var target=document.querySelector(".contacts_list");
        target.innerHTML=result;
    }
    }
  xhr.send();
}, 500);
    
       /* var button = document.querySelector("#signin");
                function disableSubmitButton() {
                button.disabled = true;
                button.style.backgroundColor = "grey";
                button.value = 'Authenticationg...';
                }
                function enableSubmitButton() {
                    button.disabled = false;
                    button.style.backgroundColor = "rgb(250, 50, 50 )";
                    button.value = 'Login in';
                    button.classList.remove("avoidclicks");
                }
                function displayErrors(errors) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-right',
                        showCloseButton: true,
                        showConfirmButton: false,
                        
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        })
                        Toast.fire({
                        icon: 'error',
                        title: 'Unknown Username Or Password'
                        })
                }
                function successlogin() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                     })
                        Toast.fire({
                        icon: 'success',
                        title: 'Signed in successfully'
                        }).then(function() {
                            window.location = "private/index.php";
                        });
                        // Disappearing Effect 
                        $toremove1=document.querySelector(".signin-content .signin-image");
                        $toremove2=document.querySelector(".signin-content .signin-form");
                        $toremove3=document.querySelector(".container");
                        $toremove1.classList.add("animate__fadeOutLeft");
                        $toremove2.classList.add("animate__fadeOutRight");
                        $toremove3.classList.add("animate__fadeOut");
                }
                function findmsg() {
                disableSubmitButton();
                var form = document.querySelector("#login-form");
                var action = form.getAttribute("action");
                // gather form data
                var form_data = new FormData(form);
                var xhr = new XMLHttpRequest();
                xhr.open('POST', action, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function () {
                    if(xhr.readyState == 4 && xhr.status == 200) {
                    var result = xhr.responseText;
                        console.log('Result: ' + result);
                    var json = JSON.parse(result);
                    if(json.hasOwnProperty('Errors') && json.Errors.length > 0) {
                        displayErrors(json.Errors);
                     enableSubmitButton();
                        
                    } else{
                            enableSubmitButton();     
                            successlogin();
                        }
                    }
                };
                xhr.send(form_data);
                }
                    button.addEventListener("click", function(event) {
                    event.preventDefault();
                    findmsg();
                });
                
            */
    </script>
</body>

</html>