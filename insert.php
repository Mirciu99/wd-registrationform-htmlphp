<?php

include_once("config.php");

if(isset($_POST['Submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];

    if(empty($name)||empty($age)||empty($email))
    {
        if(empty($name))
        {
            echo "<font color='red'>Campul este gol.</font>";
        }
        if(empty($age))
        {
            echo "<font color='red'>Campul este gol.</font>";
        }
        if(empty($email))
        {
            echo "<font color='red'>Campul este gol.</font>";
        }

        echo "<br><a href='javascript:self.history.back();'>GO BACK</a>";

    }
    else
    {
        $result=mysqli_query($mysqli,"INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");

        echo "<Font color='green'> DATA ADDED SUCCESFULLY.";
        echo "<br><a href='index.php'> View Result</a>";
    }

}

?>