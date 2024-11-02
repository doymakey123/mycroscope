<?php

include "security.php";

//validate data
function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//code for login
if (isset($_POST['login'])) 
{

    $username_login = mysqli_real_escape_string($connection, check_input($_POST['username']));
    $password_login = md5(mysqli_real_escape_string($connection, check_input($_POST['pwd'])));

        if (!empty($username_login) || !empty($password_login)) 
        {
                    
                    $query = "SELECT * FROM tbl_user WHERE username = '$username_login' AND password ='$password_login'";
                    

                    $query_run = mysqli_query($connection, $query);

                    if (mysqli_num_rows($query_run) > 0) 
                    {
                        // $query_run1 = mysqli_query($connection,$query1);
                        $row = mysqli_fetch_assoc($query_run);
                        
                        $_SESSION['username'] = $row['username'];

                        header("Location:admin");
                        exit;
                       
                    }else 
                    {
                        
                        $_SESSION['status'] = "Username/Password is Invalid!";
                        header('Location: login.php');
                    }
        } else 
        {

            $_SESSION['status'] = "Username/Password not be Empty!";
            header('Location: login.php');
        }


}




// //code for checking answer
if (isset($_POST['submit'])) {
    
    // Loop to store and display values of individual checked checkbox.
    $ques = $_POST['question'];
    $selected = $_POST['c'];


    
    $qsl= "SELECT * FROM tbl_ques_choice";
    $ansresults = mysqli_query($connection,$qsl);
    $i = 1;
    $counter = 0;
    while($rows = mysqli_fetch_array($ansresults)) {
      // print_r($rows);
        $result = $rows['correct_ans'] == $selected[$i];
        
                if($result){
                    // echo "correct ans is ".$rows['ans']."<br>";				
                    $counter++;
                    // $Resultans++;
                    // echo "Well Done! your ". $counter ." answer is correct <br><br>";
                }else{
                    // $counter++;
                    // echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                }					
            $i++;		
        }


        echo "total score is $counter /10";



}





//code for feedback
if (isset($_POST['feedback'])) {

    $name = mysqli_real_escape_string($connection, check_input($_POST['name']));
    $email = mysqli_real_escape_string($connection, check_input($_POST['email']));
    $message = mysqli_real_escape_string($connection, check_input($_POST['message']));

        if (!empty($name) || !empty($email) || !empty($message)) {

            $query = "INSERT INTO tbl_feedback (name,email,message) 
                            VALUES 
                        ('$name','$email','$message')";

                $query_run = mysqli_query($connection, $query);

                if ($query_run) 
                {

                    
                    $_SESSION['success'] = "Data Added Successfully!";
                    header('Location: feedback.php');
                } 
                else 
                {
                    $_SESSION['failed'] = "Error Adding Data!";
                    header('Location: feedback.php');
                }

        } else {

            $_SESSION['failed'] = "Name, Email or Message not be Empty!";
            header('Location: feedback.php');
        }


}

