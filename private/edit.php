<?php
require_once("initialize.php");
//Links To the Files In the Parent Directories


if(!has_presence($_GET['id']) || !is_an_integer($_GET['id'])){
    redirect_to("index.php");
}
$id=$_GET['id'];

if(is_post_request()) {
    $admin = [];
    $admin['id'] = $id;
    $admin['first_name'] = $_POST['firstname'] ?? '';
    $admin['last_name'] = $_POST['lastname'] ?? '';
    $admin['email'] = $_POST['email'] ?? '';
    $admin['username'] = $_POST['username'] ?? '';
    $admin['password'] = $_POST['password'] ?? '';
    $admin['confirm_password'] = $_POST['confirm_password'] ?? '';
    $result = update_admin($admin);
    
    if($result === true) {
        $_SESSION['message'] = "Admin {$admin['username']} updated.";
        redirect_to('index.php');
    } else {
        $errors = $result;
    }
    
}
    $admin = find_admin_by_id($id);
    $username=$admin['username'];
    $firstname=$admin['first_name'];
    $lastname=$admin['last_name'];
    $email=$admin['email'];

    echo display_errors($errors);

    echo display_session_message();
?>

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Update User</h2>
                    <form method="POST" class="register-form" id="register-form" action="<?php echo h($_SERVER["PHP_SELF"]).'?id='.$id;?>">
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
                    <figure><img src="../assets/images/signup-image.svg" alt="sing up image"></figure>
                    <a href="index.php" class="signup-image-link">Cancel</a>
                </div>
            </div>
        </div>
    </section>

</div>