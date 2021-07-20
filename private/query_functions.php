<?php

  // Subjects

  function find_all_subjects($options=[]) {
    global $db;

    $visible = $options['visible'] ?? false;

    $sql = "SELECT * FROM subjects ";
    if($visible) {
      $sql .= "WHERE visible = true ";
    }
    $sql .= "ORDER BY position ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_subject_by_id($id, $options=[]) {
    global $db;

    $visible = $options['visible'] ?? false;

    $sql = "SELECT * FROM subjects ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    if($visible) {
      $sql .= "AND visible = true";
    }
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc. array
  }

  function validate_subject($subject) {
    $errors = [];

    // menu_name
    if(is_blank($subject['menu_name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($subject['menu_name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }

    // position
    // Make sure we are working with an integer
    $postion_int = (int) $subject['position'];
    if($postion_int <= 0) {
      $errors[] = "Position must be greater than zero.";
    }
    if($postion_int > 999) {
      $errors[] = "Position must be less than 999.";
    }

    // visible
    // Make sure we are working with a string
    $visible_str = (string) $subject['visible'];
    if(!has_inclusion_of($visible_str, ["0","1"])) {
      $errors[] = "Visible must be true or false.";
    }

    return $errors;
  }

  function insert_subject($subject) {
    global $db;

    $errors = validate_subject($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "INSERT INTO subjects ";
    $sql .= "(menu_name, position, visible) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $subject['menu_name']) . "',";
    $sql .= "'" . db_escape($db, $subject['position']) . "',";
    $sql .= "'" . db_escape($db, $subject['visible']) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function update_subject($subject) {
    global $db;

    $errors = validate_subject($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "UPDATE subjects SET ";
    $sql .= "menu_name='" . db_escape($db, $subject['menu_name']) . "', ";
    $sql .= "position='" . db_escape($db, $subject['position']) . "', ";
    $sql .= "visible='" . db_escape($db, $subject['visible']) . "' ";
    $sql .= "WHERE id='" . db_escape($db, $subject['id']) . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }

  function delete_subject($id) {
    global $db;

    $sql = "DELETE FROM subjects ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  // Pages

  function find_all_pages() {
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_page_by_id($id, $options=[]) {
    global $db;

    $visible = $options['visible'] ?? false;

    $sql = "SELECT * FROM pages ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    if($visible) {
      $sql .= "AND visible = true";
    }
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $page = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $page; // returns an assoc. array
  }

//   function validate_page($page) {
//     $errors = [];

//     // subject_id
//     if(is_blank($page['subject_id'])) {
//       $errors[] = "Subject cannot be blank.";
//     }

//     // menu_name
//     if(is_blank($page['menu_name'])) {
//       $errors[] = "Name cannot be blank.";
//     } elseif(!has_length($page['menu_name'], ['min' => 2, 'max' => 255])) {
//       $errors[] = "Name must be between 2 and 255 characters.";
//     }
//     $current_id = $page['id'] ?? '0';
//     if(!has_unique_page_menu_name($page['menu_name'], $current_id)) {
//       $errors[] = "Menu name must be unique.";
//     }


//     // position
//     // Make sure we are working with an integer
//     $postion_int = (int) $page['position'];
//     if($postion_int <= 0) {
//       $errors[] = "Position must be greater than zero.";
//     }
//     if($postion_int > 999) {
//       $errors[] = "Position must be less than 999.";
//     }

//     // visible
//     // Make sure we are working with a string
//     $visible_str = (string) $page['visible'];
//     if(!has_inclusion_of($visible_str, ["0","1"])) {
//       $errors[] = "Visible must be true or false.";
//     }

//     // content
//     if(is_blank($page['content'])) {
//       $errors[] = "Content cannot be blank.";
//     }

//     return $errors;
//   }

//   function insert_page($page) {
//     global $db;

//     $errors = validate_page($page);
//     if(!empty($errors)) {
//       return $errors;
//     }

//     $sql = "INSERT INTO pages ";
//     $sql .= "(subject_id, menu_name, position, visible, content) ";
//     $sql .= "VALUES (";
//     $sql .= "'" . db_escape($db, $page['subject_id']) . "',";
//     $sql .= "'" . db_escape($db, $page['menu_name']) . "',";
//     $sql .= "'" . db_escape($db, $page['position']) . "',";
//     $sql .= "'" . db_escape($db, $page['visible']) . "',";
//     $sql .= "'" . db_escape($db, $page['content']) . "'";
//     $sql .= ")";
//     $result = mysqli_query($db, $sql);
//     // For INSERT statements, $result is true/false
//     if($result) {
//       return true;
//     } else {
//       // INSERT failed
//       echo mysqli_error($db);
//       db_disconnect($db);
//       exit;
//     }
//   }

//   function update_page($page) {
//     global $db;

//     $errors = validate_page($page);
//     if(!empty($errors)) {
//       return $errors;
//     }

//     $sql = "UPDATE pages SET ";
//     $sql .= "subject_id='" . db_escape($db, $page['subject_id']) . "', ";
//     $sql .= "menu_name='" . db_escape($db, $page['menu_name']) . "', ";
//     $sql .= "position='" . db_escape($db, $page['position']) . "', ";
//     $sql .= "visible='" . db_escape($db, $page['visible']) . "', ";
//     $sql .= "content='" . db_escape($db, $page['content']) . "' ";
//     $sql .= "WHERE id='" . db_escape($db, $page['id']) . "' ";
//     $sql .= "LIMIT 1";

//     $result = mysqli_query($db, $sql);
//     // For UPDATE statements, $result is true/false
//     if($result) {
//       return true;
//     } else {
//       // UPDATE failed
//       echo mysqli_error($db);
//       db_disconnect($db);
//       exit;
//     }

//   }

  function delete_page($id) {
    global $db;

    $sql = "DELETE FROM pages ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function find_pages_by_subject_id($subject_id, $options=[]) {
    global $db;

    $visible = $options['visible'] ?? false;

    $sql = "SELECT * FROM pages ";
    $sql .= "WHERE subject_id='" . db_escape($db, $subject_id) . "' ";
    if($visible) {
      $sql .= "AND visible = true ";
    }
    $sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }







  // QUERIES TO WORK WITH THE ADMIN TABLE

  // Find all admins, ordered last_name, first_name
  function find_all_admins() {
    global $db;

    $sql = "SELECT * FROM admins ";
    $sql .= "ORDER BY last_name ASC, first_name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }




  function find_admin_by_id($id) {
    global $db;
    $sql = "SELECT * FROM admins ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);//CHECK if the query worked
    $admin = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $admin; // returns an assoc. array
  }

  function find_admin_by_username($username) {
    global $db;
    $sql = "SELECT * FROM admins ";
    $sql .= "WHERE username='" . db_escape($db, $username) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $admin; // returns an assoc. array
  }


  // pass the username password email ... to this function as an array
// It makes all the possible tests and return Errors in an array
// If error is empty then everything is alright
  function validate_admin($admin,$option=[]) {
    // We added added a parameter to change the behavior of our validation
    // if the password was sent with option of false then , then password is not require
    $password_required=$option['password_required'] ?? true;
    $errors= [];
    //Validate Form Name
    if(is_blank($admin['first_name'])) {// Check if it's empty first
      $errors[] = "First name cannot be blank.";
    } elseif (!has_length($admin['first_name'], array('min' => 2, 'max' => 255))) {
      $errors[] = "First name must be between 2 and 255 characters.";
    }

    // Validata Form Last Name
    if(is_blank($admin['last_name'])) {// Check if it's empty first
      $errors[] = "Last name cannot be blank.";
    } elseif (!has_length($admin['last_name'], array('min' => 2, 'max' => 255))) {
      $errors[] = "Last name must be between 2 and 255 characters.";
    }

    //Validate if an email is valid
    if(is_blank($admin['email'])) {// Check if it's empty first
      $errors[] = "Email cannot be blank.";
    } elseif (!has_length($admin['email'], array('max' => 255))) {
      $errors[] = "Email name must be less than 255 characters.";
    } elseif (!has_valid_email_format($admin['email'])) {
      $errors[] = "Email must be a valid format.";
    }

    //validate username
    if(is_blank($admin['username'])) { // Check if it's empty first
      $errors[] = "Username cannot be blank.";
    } elseif (!has_length($admin['username'], array('min' => 5, 'max' => 255))) {
      $errors[] = "Username must be between 5 and 255 characters.";
    } elseif (!has_unique_username($admin['username'], $admin['id'] ?? 0)) {
      $errors[] = "Username not allowed. Try another.";
    }


    // validate passwords
    if($password_required){
    if(is_blank($admin['password'])) {// Check if it's empty first
      $errors[] = "Password cannot be blank.";
    } elseif (!has_length($admin['password'], array('min' => 8))) {
      $errors[] = "Password must contain 8 or more characters";
    } elseif (!preg_match('/[A-Z]/', $admin['password'])) {
      $errors[] = "Password must contain at least 1 uppercase letter";
    } elseif (!preg_match('/[a-z]/', $admin['password'])) {
      $errors[] = "Password must contain at least 1 lowercase letter";
    } elseif (!preg_match('/[0-9]/', $admin['password'])) {
      $errors[] = "Password must contain at least 1 number";
    } elseif (!preg_match('/[^A-Za-z0-9\s]/', $admin['password'])) {
      $errors[] = "Password must contain at least 1 symbol";
    }

    if(is_blank($admin['confirm_password'])) {
      $errors[] = "Confirm password cannot be blank.";
    } elseif ($admin['password'] !== $admin['confirm_password']) {
      $errors[] = "Password and confirm password must match.";
    }}

    return $errors;
  }



// Inserting data in the admin table
// Check if the validation function is all alright
// if everything is okay ant there is no error then
// It hases the password with the BCRYPT algo then insert the data
  function insert_admin($admin) {
    global $db;

    $errors = validate_admin($admin);
    if (!empty($errors)) {
      return $errors;
      // if all forms has no error then data can proceeed
    }

    // Encrypting the password for the user so that nobody can see shit
    $hashed_password = password_hash($admin['password'], PASSWORD_BCRYPT);

    // db_escape simply uses mysl_real_escapre_string on all outside data
    $sql = "INSERT INTO admins ";
    $sql .= "(first_name, last_name, email, username, hashed_password) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $admin['first_name']) . "',";
    $sql .= "'" . db_escape($db, $admin['last_name']) . "',";
    $sql .= "'" . db_escape($db, $admin['email']) . "',";
    $sql .= "'" . db_escape($db, $admin['username']) . "',";
    $sql .= "'" . db_escape($db, $hashed_password) . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
      // If Data was inserted correctly in the database
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }


  // Update a User From the Admin Table , pass in all the data in an array
  function update_admin($admin) {
    global $db;

    /*
      We Don't always need to update the password , let's wok on the field
      We wan to do it in a way that if the password was sent then it's okay
      we update it , otherwise , we don't
    */

    // if the password field is not blank then we know thta it was sent
    $password_sent=!is_blank($admin['password']);

    // Make Checks on all data And make sure they are all good to go
    $errors = validate_admin($admin,['password_required'=>$password_sent]);
    if (!empty($errors)) {
      return $errors;
    }

    // Grabs the password , Encrypt it and set it ready for our database
    $hashed_password = password_hash($admin['password'], PASSWORD_BCRYPT);
    $sql = "UPDATE admins SET ";
    $sql .= "first_name='" . db_escape($db, $admin['first_name']) . "', ";
    $sql .= "last_name='" . db_escape($db, $admin['last_name']) . "', ";
    $sql .= "email='" . db_escape($db, $admin['email']) . "', ";
    if($password_sent){
      $sql .= "hashed_password='" . db_escape($db, $hashed_password) . "',";
    }
    $sql .= "username='" . db_escape($db, $admin['username']) . "' ";
    $sql .= "WHERE id='" . db_escape($db, $admin['id']) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function delete_admin($admin) {
    global $db;

    $sql = "DELETE FROM admins ";
    $sql .= "WHERE id='" . db_escape($db, $admin['id']) . "' ";
    $sql .= "LIMIT 1;";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

?>