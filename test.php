<?php

require_once("private/initialize.php");
//Links To the Files In the Parent Directories



    $admin = find_user_by_id("2051224492162685558060f7d89cbcb6f");
    $username=$admin['username'];
    $firstname=$admin['first_name'];
    $lastname=$admin['last_name'];
    $email=$admin['email'];
?>

<style>
   
</style>

<!-- Font Icon -->
   <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    
    <!-- Animate Css  -->
    <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/css/animate.min.css">
    
    <script src="<? echo $parent ?? '';?>assets/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<? echo $parent ?? '';?>assets/sweetalert2/dist/sweetalert2.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"></button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-0" style="z-index:-2;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New User </h5>
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
                                            <input type="text" name="lastname" id="name" placeholder="Group Name.." value=""/>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div>




                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div> <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="assets/images/avatar/1.svg" width="40px">Ilunga Gisa Daniel</label>
                                        </div>




                                    </form>
                                </div>
                                <div class="signup-image d-none  d-md-inline-block" style="position:absolute; bottom:-10px; left:250px; z-index:-1;">
                                    <figure><img src="assets/images/group.svg" width=500 alt="sing up image"></figure>
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

                var update = document.querySelector("#signin");
                function disableSubmitButton() {
                update.disabled = true;
                update.style.backgroundColor = "grey";
                
                update.value = 'Authenticationg...';
                }
                function enableSubmitButton() {
                    update.disabled = false;
                    update.style.backgroundColor = "rgb(250, 50, 50 )";
                    update.value = 'Update..';
                    update.classList.remove("avoidclicks");
                }

                function displayErrors(errors) {
                    const ul = document.createElement('ul');
                   
                    for (var i = 0; i < errors.length; i++) {
                        let li = document.createElement("li");
                        li.append(errors[i]);
                        ul.appendChild(li);
                    }
                  
                    const Toast = Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Error Updating Profile',
                    html: ul,
                    showConfirmButton: false,
                    timerProgressBar:true,
                    timer: 2500
                    
                    })
                }
                function successupdate() {
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
                        title: 'User Updated Successfully'
                        }).then(function() {
                            window.location = "chat.php";
                        });
                        // Disappearing Effect 
                        // $toremove1=document.querySelector(".signin-content .signin-image");
                        // $toremove2=document.querySelector(".signin-content .signin-form");
                        // $toremove3=document.querySelector(".container");
                        // $toremove1.classList.add("animate__fadeOutLeft");
                        // $toremove2.classList.add("animate__fadeOutRight");
                        // $toremove3.classList.add("animate__fadeOut");
                }

                


                function update_admin() {
                disableSubmitButton();
                var form = document.querySelector("#update_form");
                var action = form.getAttribute("action");
                // gather form data
                var form_data = new FormData(form);
                var xhr = new XMLHttpRequest();
                xhr.open('POST', action, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function () {
                    if(xhr.readyState == 4 && xhr.status == 200) {
                    var result = xhr.responseText;
                        console.log("Here Are The result Down");
                        console.log('Result: ' + result);
                    var json = JSON.parse(result);
                    if(json.hasOwnProperty('Errors') && json.Errors.length > 0) {
                        displayErrors(json.Errors);
                        enableSubmitButton();
                        
                    } else{
                            enableSubmitButton();     
                            successupdate();
                        }
                    }
                };
                xhr.send(form_data);
                }

                    update.addEventListener("click", function(event) {
                    event.preventDefault();
                    update_admin();
                    });
                
</script>


<script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
