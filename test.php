<?php
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>

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
                                    <form>
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
        <button type="button" class="btn btn-primary" onclick="successlogin()">Send message</button>
      </div>
    </div>
  </div>
</div>
<script>
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
                            title: 'Message Sent Successfully'
                            })
                    }
</script>
<script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
