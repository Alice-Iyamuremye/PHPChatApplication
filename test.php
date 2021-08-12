<?php

require_once("private/initialize.php");
//Links To the Files In the Parent Directories

    $users=find_all_contacts();
    $admin = find_user_by_id("2051224492162685558060f7d89cbcb6f");
    $username=$admin['username'];
    $firstname=$admin['first_name'];
    $lastname=$admin['last_name'];
    $email=$admin['email'];

    
?>

<style>
   
</style>

<!-- Font Icon -->
   <link rel="stylesheet" href="<?php echo $parent ?? '';?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    
    <!-- Animate Css  -->
    <link rel="stylesheet" href="<?php echo $parent ?? '';?>assets/css/animate.min.css">
    
    <script src="<?php echo $parent ?? '';?>assets/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo $parent ?? '';?>assets/sweetalert2/dist/sweetalert2.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

<button type="button" class="btn btn-primary" data-toggle='modal' data-target='#groupmodal' data-whatever="@mdo"></button>


   <!-- Starting Of Contact List group-->
            <a class="list-group-item text-dark item" href="#">
                        <div class="media m-0">
                            <img src="assets/images/avatar/1.svg" alt="user" class="rounded-pill d-flex align-self-center" style="width: 50px;">
                            <div class=" media-body ml-1 w-75">
                                <div class="">
                                    <p class="m-0 text-truncate">Monkeyman</p>
                                    <p class="mb-0 font-italic  small text-nowrap text-truncate ">Lorem ipsum, dore sit... </p>
                                </div>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->


                    <div class="modal fade" id="groupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-0" style="z-index:-2;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New User </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body border-0 border border-primary" style="background-color: transparent !important; ">
            <div class="main" >
                <!-- Sign up form -->
                    <section class="signup">
                        <div class="container">
                            <div class="signup-content" >
                                <div class="signup-form">
                                    <form method="POST" class="register-form" enctype="multipart/form-data"  id="create_group" action="private/create_group.php">
                                        
                                        <div class="form-group">
                                        <input type="file" name="user_avatar" id="email" placeholder="Your Email" style="width:100%;"/><br>
                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="name" id="name" placeholder="Group Name.." value=""/>
                                        </div>
                                        
                                        <div style=" height:45vh; overflow:scroll;">
                                            <?php 
                                                while($data=mysqli_fetch_assoc($users)){
                                                            ?>
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" name="checklist[]" value="<?php echo $data['username'];?>" id="<?php echo $data['username'];?>">
                                                <label class="custom-control-label" for="<?php echo $data['username'];?>"><img src="assets/images/avatar/<?php echo $data['avatar'];?>" style="border-radius:100%; width:40px; height:40px;" width="40px"><?php echo $data['first_name'].$data['last_name'];?></label>
                                            </div>
                                            <?php
                                                }
                                                mysqli_free_result($users);
                                            ?>
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
        <button type="button" id="signin" class="form-submit btn btn-primary">Create Group</button>
      </div>
    </div>
  </div>
</div>
<script>

                var creategrp = document.querySelector("#signin");
                function disableSubmitButton() {
                creategrp.disabled = true;
                creategrp.style.backgroundColor = "grey";
                
                creategrp.value = 'Authenticationg...';
                }
                function enableSubmitButton() {
                    creategrp.disabled = false;
                    creategrp.style.backgroundColor = "rgb(250, 50, 50 )";
                    creategrp.value = 'Update...';
                    creategrp.classList.remove("avoidclicks");
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
                function created_successfully() {
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
                    
                }

                function creategroup() {
                disableSubmitButton();
                var form = document.querySelector("#create_group");
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
                            created_successfully()
                        }
                    }
                };
                xhr.send(form_data);
                }

                    creategrp.addEventListener("click", function(event) {
                    event.preventDefault();
                    creategroup();
                    });

</script>
    

<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
