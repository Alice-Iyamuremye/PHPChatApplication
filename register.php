<?php
require_once("private/initialize.php");
require_once("header.php");


if(is_post_request()) {
$admin['first_name'] = $_POST['firstname'] ?? '';
$admin['last_name'] = $_POST['lastname'] ?? '';
$admin['email'] = $_POST['email'] ?? '';
$admin['username'] = $_POST['username'] ?? '';
$admin['password'] = $_POST['password'] ?? '';
$admin['confirm_password'] = $_POST['confirm_password'] ?? '';
$result = insert_admin($admin);//return all the errors if it does not work
if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = $admin['username'].' Your Account Successfully Created';
    redirect_to('index.php');
} else {
    $errors = $result;
}}

echo display_errors($errors);

echo display_session_message();

?>

<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data" action="<?php echo h($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="firstname" id="name" placeholder="First Name" value="<?php echo $_POST['firstname'] ?? "";?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="lastname" id="name" placeholder="Last Name" value="<?php echo $_POST['lastname'] ?? "";?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="name" placeholder="User Name" value="<?php echo $_POST['username'] ?? "";?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="avatar"><i class="zmdi zmdi-file-plus"></i></label>
                            <input type="file" name="email" id="avatar" placeholder="Your Email" value="<?php echo $_POST['email'] ?? "";?>" required/>
                            
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="confirm_password" id="re_pass" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="assets/images/signup-image.svg" alt="sing up image"></figure>
                    <a href="index.php" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

</div>