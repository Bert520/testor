<?php

$match = "pass123";

if(isset($_POST['password'])){
    $password = $_POST['password'];

    if(!empty($password)){
        if($password==$match){
            echo "That's correct";
        }else{
            echo "That's incorrect";
        }
    }else{
         echo "Please fill all the blank";
    }
    
}
?>

<form action="4.php" method="POST">
    PASSWORD<br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="submit"><br><br>
</form>