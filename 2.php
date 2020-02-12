<?php

if (isset($_POST['user_name'])&&!empty($_POST['user_name'])){
    $user_name =$_POST['user_name'];
    $user_name_lc =strtolower($user_name);

    if($user_name_lc=='alex'){
        echo 'You are the best, '.$user_name;
    }

}
?>
<form action="2.php" method="POST">
    Name:<input type="text" name="user_name"><br><br>
    <input type="submit" value="submit">
</form>

