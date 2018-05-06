<!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NETTUTS > Sign up</title>
    <link href="stylever.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div -->
    <div id="header">
        <h3> Sign up</h3>
    </div>
    <!-- end header div -->  
     
    <!-- start wrap div -->  
    <div id="wrap">
         
        <!-- start php code -->
        <?php
            // Establish database connection
            mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to database server(localhost) with username and password.
            mysql_select_db("verification") or die(mysql_error()); // Select registrations database.
        
 
            if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email'])){
            // Form Submited
            }

            if(){ // If statement is true run code between brackets
 
                }
    
                    isset($_POST['name']) // Is the name field being posted; it does not matter whether it's empty or filled.
                    && // This is the same as the AND in our statement; it allows you to check multiple statements.
                    !empty($_POST['name']) // Verify if the field name is not empty
 
                    isset($_POST['email']) // Is the email field being posted; it does not matter if it's empty or filled.
                    && // This is the same as the AND in our statement; it allows you to check multiple statements.
                    !empty($_POST['email']) // Verify if the field email is not empty
                    
                    if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email'])){
                    $name = mysql_escape_string($_POST['name']); // Turn our post into a local variable
                    $email = mysql_escape_string($_POST['email']); // Turn our post into a local variable
                    }

                    $name = mysql_escape_string($_POST['name']);
                    $email = mysql_escape_string($_POST['email']);
             
             
                    if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
                    // Return Error - Invalid Email
                    }else{
                    // Return Success - Valid Email
                    }

                    if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
                   // Return Error - Invalid Email
                    $msg = 'The email you have entered is invalid, please try again.';
                    }else{
                    // Return Success - Valid Email
                    $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
                    }

                    $hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
                    $password = rand(1000,5000); // Generate random number between 1000 and 5000 and assign it to a local variable.

                    mysql_query("INSERT INTO users (username, password, email, hash) VALUES(
                    '". mysql_escape_string($name) ."', 
                    '". mysql_escape_string(md5($password)) ."', 
                    '". mysql_escape_string($email) ."', 
                    '". mysql_escape_string($hash) ."') ") or die(mysql_error());
        


        ?>

         
        <!-- stop php code -->
     
        <!-- title and description -->   
        <h3>Signup Form</h3>
        <p>Please enter your name and email addres to create your account</p>

        <?php 
            if(isset($msg)){  // Check if $msg is not empty
            echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
            } 
        ?>

         
        <!-- start sign up form -->  
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="" />
            <label for="email">Email:</label>
            <input type="text" name="email" value="" />
             
            <input type="submit" class="submit_button" value="Sign up" />
        </form>
        <!-- end sign up form -->
         
    </div>
    <!-- end wrap div -->
</body>
</html>