<?php 
require_once("private/initialize.php");

require_login();

$contacts=find_all_contacts();
$groups=find_all_groups($_SESSION['username']);
echo display_errors($errors);
echo display_session_message();

// Find All User Data
    $admin = find_user_by_id("2051224492162685558060f7d89cbcb6f");
        $username=$admin['username'];
        $firstname=$admin['first_name'];
        $lastname=$admin['last_name'];
        $email=$admin['email'];
        $avatar=$admin['avatar'];
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
    
    <!-- SweetAlert2 -->
     <script src="<? echo $parent ?? '';?>assets/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/sweetalert2/dist/sweetalert2.min.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/css/bootstrap.min.css" />

    <!-- Main Css -->
    <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/css/styles.css" />


    <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/css/owlcarousel/owl.theme.default.min.css">
    <script language="JavaScript" type="text/javascript" src="assets/js/jquery.min.js"></script>
    
    <title>Bootstrap</title>
</head>

<body>

 <!-- The Whole Displayed is Made Using A 3 COlumns Grid Alignment Each Named Section one , Section two , section 3 -->

    <section class="container-fluid" style="overflow: hidden;">
        <section class="row vh-100 p-0">

            <!-- Contact List  Section   -----SECTION ONE
            ------------------------------------------------------------------------------------------------------------- -->
            <section class=" col col-sm-4 col-md-3 p-0 d-none d-sm-inline-block bg-secondary contacts">
                <nav class="navbar navbar-dark bg-dark d-inline-block rounded-right " style="padding:0px 0px 0px 0px;">
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
                                    <img src="assets/images/avatar/<?php echo $avatar;?>">
                                </a>
                            </div>
                         
                            <div class="myselfinfo">
                                <h3><?php echo $username; ?></h3>
                                <h5><?php echo $email;?></h5>
                            </div>
                        </div>

                    <ul class="list-group list-group-flush  mb-4">
                        <li class="list-group-item list-group-item-light " href="#">
                            <i class="mr-4 zmdi zmdi-accounts-add zmdi-hc-2x"></i>New Group
                        </li>
                        <li class="list-group-item list-group-item-light " href="#">
                            <i class="mr-4 zmdi zmdi-phone zmdi-hc-2x"></i> Calls
                        </li>

                        <li class="list-group-item list-group-item-light " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#">
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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-0" style="z-index:-2;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body border-0 border border-primary" style="background-color: transparent !important; ">
            <div class="main" style="text-align:center;">
                <!-- Sign up form -->
                    <section class="signup">
                        <div class="container">
                            <div class="signup-content" >
                                <div class="signup-form">
                                    <form method="POST" class="register-form" id="update_form" action="private/update_admin.php">
                                        <div class="form-group">
                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="firstname" id="name" placeholder="First Name" value="<?php echo $firstname;?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="lastname" id="name" placeholder="Last Name" value="<?php echo $lastname;?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="username" id="name" placeholder="User Name" value="<?php echo $username;?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                            <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo $email;?>"/>
                                        </div>
                                        <center><div class="form-group d-flex" style=" width:50%;">
                                            <label for="email"><i class="zmdi zmdi-file-add"></i></label>&nbsp;&nbsp;
                                            <input type="file" name="user_avatar" id="email" placeholder="Your Email" style="width:100%;"/>
                                        </div></center>
                                       
                                        <div class="form-group">
                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="password" id="pass" placeholder="Password"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                            <input type="password" name="confirm_password" id="re_pass" placeholder="Repeat your password"/>
                                        </div>
                                    </form>
                                </div>
                                <div class="signup-image d-none  d-md-inline-block" style="position:absolute; top:0px; left:-55%; z-index:-1;">
                                    <figure><img src="assets/images/login-image.svg" width=500 alt="sing up image"></figure>
                                </div>
                            </div>
                        </div>
                    </section>

            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="signin" class="form-submit btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
              <script>
                    function openNav() {
                        document.getElementById("mySidepanel").style.width = "350px";
                    }

                    function closeNav() {
                        document.getElementById("mySidepanel").style.width = "0px";
                    }
                </script>

                <!-- Search Form above the contact -->
                <div class="form-outline d-inline-block seachform">
                    <input type="text" id="form1" name="search" class="form-control my-2 mx-auto" placeholder="Search "
                        aria-label="Search" />
                </div>
                <script>

                    searchBar = document.querySelector(".seachform #form1")
                    searchBar.onkeyup = ()=>{
                        searchTerm=searchBar.value
                        if(searchTerm != ""){
                            searchBar.classList.add("active");
                        }else{
                            searchBar.classList.remove("active");
                        }
                        if(searchBar.value!=""){
                            url = "private/search_contact.php?searchTerm="+searchBar.value;
                        let xhr = new XMLHttpRequest();
                        xhr.open("GET", url, true);
                        xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        let result=xhr.responseText;
                        let target=document.querySelector(".contacts_list");
                        target.innerHTML=result;
                    
                    }
                    }
                xhr.send(); 
                        }
                }
                
                </script>
                <!-- Contact List Groups  -->
                <div class="list-group contacts contacts_list" style="height: 80vh; overflow: scroll;">
                    <!-- <p class="text-light p-0  " style="position:absolute; top:44px; z-index:10; text-shadow:0px 0px 10px black;">Groups</p> -->
                    <div class="owl-carousel bg-dark owl-theme border-bottom border-dark">
                     <?php  
                     while($data=mysqli_fetch_assoc($groups)){?>
                     <a class="list-group-item bg-secondary text-white item" onclick="keepfindinggroupmsg(<?php echo '\''.$data['groupid'].'\'';?>)" href="#">
                        <div class="media m-0">
                            <img src="assets/images/avatar/<?php echo $data['avatar'];?>" alt="user" class="rounded-pill d-flex align-self-center" style="width: 50px;">
                            <div class="media-body mr2 w-75s">
                                <div class="">
                                    <p class="m-0 text-truncate"><?php echo $data['group_name'];?></p>
                                    <p class="m-0 font-italic w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit... </p>
                                </div>
                            </div>
                        </div>
                    </a> 
                <?php }
                mysqli_free_result($groups);
                ?>
                       
                </div>
               
    <script>
    $(document).ready(function () {

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 4,
            dots: false,
            responsive:{
                0:{
                    items:1.125,
                },
                1000:{
                    items:1.325
                }}       

        });
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });


    });

</script>
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
                    <h2 class=" text-light align-content-center ">please Select a contact</h2>
                </div>

              

                
                <!-- ---------------------------  -->
                <div class="container-fluid message dd-4">
                    <ul class="clearfix list-unstyled whrmsggoes" role="tooltip">
                       
                    </ul>
                </div>
                <!-- ---------------------------  -->
                <div class="container text-light sendmsgsection">
                        <form method="POST" class="register-form" id="sendMessageForm" action="private/sendchat.php">
                            
                            <div class="row reply align-items-center">
                                <div class="col-1 col-sm-1 col-xs-1 reply-emojis">
                                <i class="zmdi zmdi-mood zmdi-hc-2x"></i>
                            </div>
                                <div class="col-7 col-sm-9 col-xs-9 reply-main">
                                    
                                    <input type="text" class="textmessageid" name="sent_to" hidden>   
                                    <textarea class="form-control textmessage" name="textmessage" rows="1" id="comment"></textarea>
                                </div>
                                <div class="col-1 col-sm-1 col-xs-1 reply-recording">
                                    <i class="zmdi zmdi-mic zmdi-hc-2x"></i>
                                </div>
                                <div class="col-1 col-sm-1   col-xs-1 reply-send">
                                    <span class="send_message"><i class="zmdi zmdi-mail-send zmdi-hc-2x"></i></span>
                                </div>
                        </form>
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
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close btn" data-dismiss="modal">&times;</button>
                    </div> <!-- Modal Header-->
                    <div class="modal-body text-center">
                        <img src="assets/images/avatar/<?php echo $avatar; ?>" class="img-fluid">
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
                        <img src="assets/images/avatar/1.svg" class="img-fluid">
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
                        <img src="assets/images/avatar/1.svg" class="img-fluid">
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
    
    <!-- Ajaxt to keep track of users -->
    <script src="assets/js/load_users.js"></script>

    <!-- Ajax to find user Descrition -->
    <script src="assets/js/user_description.js"></script>

    <!-- Ajax to Find Chat Messages -->
    <script src="assets/js/find_messages.js"></script>
    <script>





        
                
                




                                
                




            var button = document.querySelector(".send_message");
                    // SweetAlert Error To be Displayed When Chat is not found
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
                            title: 'Unknown Chat Id'
                            })
                    }

                    function sendmessage() {
                    var form = document.querySelector("#sendMessageForm");
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
                        } else{ 
                            // Clean The Text Message 
                            document.querySelector(".textmessage").value="";
                            scrollToBottom();
                            }
                        }
                    };
                    xhr.send(form_data);
                    }

                    button.addEventListener("click", function(event) {
                    event.preventDefault();
                    sendmessage();
                    });
                    
                        
                        
                        </script>
                        <!-- Ajax Script to Update a User -->
                        <script src="assets/js/update_users.js"></script>
</body>

</html>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</html>