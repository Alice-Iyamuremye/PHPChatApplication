<?php 
require_once("private/initialize.php");

require_login();

$contacts=find_all_contacts();
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
     <!-- Animate Css  -->
     <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/css/animate.min.css">
    

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Bootstrap</title>
</head>

<body>

 <!-- The Whole Displayed is Made Using A 3 COlumns Grid Alignment Each Named Section one , Section two , section 3 -->

    <section class="container-fluid" style="overflow: hidden;">
        <section class="row vh-100">

            <!-- Contact List  Section   -----SECTION ONE
            ------------------------------------------------------------------------------------------------------------- -->
            <section class=" col col-sm-4 col-md-3 p-0 d-none d-sm-inline-block bg-secondary contacts">
                <nav class="navbar navbar-dark bg-dark d-inline-block ">
                    <button class="navbar-toggler " onclick="openNav()">
                        <span class="navbar-toggler-icon "></span>
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

                <?php 
                // Display All Contacts 
                    while($data=mysqli_fetch_assoc($contacts)){ 
                        $lastmsg=array("sent_by"=>$_SESSION['user_id'],"sent_to"=>$data['unique_id']);
                        ?>
                    <!-- Starting Of Contact List group-->
                            <a class="list-group-item text-white proton"  onclick="user_description(<?php echo '\''.$data['unique_id'].'\'';?>);keepfindingtext(<?php echo '\''.$data['unique_id'].'\'';?>)" href="#">
                                <div class="media">
                                <?php
                                    if($data["online_status"]=="true"){
                                        echo "<span class='online-status'></span>";
                                    }
                                ?>
                                    <img src="assets/images/avatar/<?php echo $data["avatar"];?>" alt="user" width="60" height="60" class="rounded-pill">
                                    <div class="media-body ml-1">
                                        <div class="mb-1">
                                            <h6 class="mb-0 text-truncate text-nowrap"><?php echo $data["first_name"]." ".$data["last_name"] ; ?> </h6>
                                            <small class="small font-weight-bold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" /></svg> 
                                                    <?php echo date('H:i',strtotime($data["last_login"])) ?>
                                            </small>
                                        </div>
                                        <p class="font-italic mb-0 small text-truncate ltsmsg"><?php $latest=find_latest_messages($lastmsg);echo $latest["msg"];?></p>
                                    </div>
                                </div>
                            </a> <!-- --------------End of Contact list group-->
                <?php }
                mysqli_free_result($contacts); ?>
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
                    <ul class="clearfix list-unstyled whrmsggoes" role="tooltip">
                       
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






            <!-- Chat Description start  SECTION THREE
                  ----------------------------------------------------------------------------------->
            <section class=" col col-lg-2 text-light d-lg-inline-block bg-secondary section_contact_desc">
               
               
              
            </section><!-- Chat Description   End ---------------------------------------->

<!-- Modals Of All Images -->
<div>

        <!-- Profile Image Modal  -->
        <div class="modal fade" id="profile">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close btn" data-dismiss="modal">&times;</button>
                    </div> <!-- Modal Header-->
                    <div class="modal-body text-center">
                        <img src="assets/images/avatar/<?php echo $_SESSION["avatar"]; ?>" class="img-fluid">
                    </div><!-- Modal body-->
                </div>
                <!--Modal content-->
            </div>
            <!--Modal Dialog-->
        </div> <!-- Image Modal  End-->


        <!-- Profile Modal dd-3 Start-->
        <div class="modal fade" id="ddp-3">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close btn" data-dismiss="modal">&times;</button>
                    </div> <!-- Modal Header-->
                    <div class="modal-body text-center">
                        <img src="images/evariste.jpg" class="img-fluid">
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



        </section><!-- Row Section End Section End ---------------------------------------->
    </section><!-- Container Section  End ---------------------------------------->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

// Ajax to Keep finding users when and the latest message sent to them

setInterval(() =>{
    let xhr= new XMLHttpRequest();
    xhr.open("GET","private/find_contacts.php",true);
    xhr.onreadystatechange= function (){ //call back function
    if(xhr.readyState== 4 && xhr.status== 200){
        let result=xhr.responseText;
        let target=document.querySelector(".contacts_list");
        target.innerHTML=result;
       
    }
    }
  xhr.send();
}, 500000);




            // Ajax Request To find Contact Desctiption When a user is clicked 

            var contactlst = document.querySelectorAll(".proton");
                function user_description(l) {
                    url="private/find_contact_description.php?idt="+l;
                    let xhr= new XMLHttpRequest();
                    xhr.open("GET",url,true);
                    xhr.onreadystatechange= function (){ 
                    if(xhr.readyState== 4 && xhr.status== 200){
                        let result=xhr.responseText;
                        let target=document.querySelector(".section_contact_desc");
                        target.innerHTML=result;
                    }
                    }
                xhr.send();
                }
                
                

                
                function get_messages_again(l) {

                url = "private/find_messages.php?chat=" + l;
                let xhr = new XMLHttpRequest();
                xhr.open("GET", url, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        
                        var d = new Date();
                        var t = d.toLocaleTimeString();
                        let result = xhr.responseText;
                        let target = document.querySelector(".whrmsggoes");
                        target.innerHTML = result;
                    }
                }
                xhr.send();
            }

                    var settfunc = "";
                    function end_get_messages() {
                    clearInterval(settfunc);
                    }

                function keepfindingtext(l) {
                    end_get_messages(settfunc);
                    settfunc = setInterval(get_messages_again, 1000, l);
                    }

                                
                




    //     var button = document.querySelector("#signin");
                
    //             function disableSubmitButton() {
    //             button.disabled = true;
    //             button.style.backgroundColor = "grey";
                
    //             button.value = 'Authenticationg...';
    //             }

    //             function enableSubmitButton() {
    //                 button.disabled = false;
    //                 button.style.backgroundColor = "rgb(250, 50, 50 )";
    //                 button.value = 'Login in';
    //                 button.classList.remove("avoidclicks");
    //             }

    //             function displayErrors(errors) {
    //                 const Toast = Swal.mixin({
    //                     toast: true,
    //                     position: 'top-right',
    //                     showCloseButton: true,
    //                     showConfirmButton: false,
                        
    //                     timerProgressBar: true,
    //                     didOpen: (toast) => {
    //                         toast.addEventListener('mouseenter', Swal.stopTimer)
    //                         toast.addEventListener('mouseleave', Swal.resumeTimer)
    //                     }
    //                     })
    //                     Toast.fire({
    //                     icon: 'error',
    //                     title: 'Unknown Username Or Password'
    //                     })
    //             }
    //             function successlogin() {
    //                 const Toast = Swal.mixin({
    //                     toast: true,
    //                     position: 'top-end',
    //                     showConfirmButton: false,
    //                     timer: 1000,
    //                     timerProgressBar: true,
    //                     didOpen: (toast) => {
    //                         toast.addEventListener('mouseenter', Swal.stopTimer)
    //                         toast.addEventListener('mouseleave', Swal.resumeTimer)
    //                     }
    //                  })
    //                     Toast.fire({
    //                     icon: 'success',
    //                     title: 'Signed in successfully'
    //                     }).then(function() {
    //                         window.location = "private/index.php";
    //                     });
    //                     // Disappearing Effect 
    //                     $toremove1=document.querySelector(".signin-content .signin-image");
    //                     $toremove2=document.querySelector(".signin-content .signin-form");
    //                     $toremove3=document.querySelector(".container");
    //                     $toremove1.classList.add("animate__fadeOutLeft");
    //                     $toremove2.classList.add("animate__fadeOutRight");
    //                     $toremove3.classList.add("animate__fadeOut");
    //             }

                


    //             function findmsg() {
    //             disableSubmitButton();
    //             var form = document.querySelector("#login-form");
    //             var action = form.getAttribute("action");
    //             // gather form data
    //             var form_data = new FormData(form);
    //             var xhr = new XMLHttpRequest();
    //             xhr.open('POST', action, true);
    //             xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    //             xhr.onreadystatechange = function () {
    //                 if(xhr.readyState == 4 && xhr.status == 200) {
    //                 var result = xhr.responseText;
    //                     console.log('Result: ' + result);
    //                 var json = JSON.parse(result);
    //                 if(json.hasOwnProperty('Errors') && json.Errors.length > 0) {
    //                     displayErrors(json.Errors);
    //                  enableSubmitButton();
                        
    //                 } else{
    //                         enableSubmitButton();     
    //                         successlogin();
    //                     }
    //                 }
    //             };
    //             xhr.send(form_data);
    //             }

    //                 button.addEventListener("click", function(event) {
    //                 event.preventDefault();
    //                 findmsg();
    //                 });
                
    //             function profile_picture_model(image)
            
    
    
     </script>
</body>

</html>