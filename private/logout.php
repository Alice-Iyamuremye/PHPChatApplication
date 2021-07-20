<pre>
<?php
require_once("initialize.php");
unset($_SESSION['username']);

session_destroy(); //remove All sessions
// or you could use
// $_SESSION['username'] = NULL;

//Send Back to login after logout
redirect_to('../index.php');
?></pre>
