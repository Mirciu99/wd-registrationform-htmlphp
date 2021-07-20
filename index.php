<?php
include_once("config.php");

$result=mysqli_query($mysqli,"SELECT *FROM users ORDER BY id DESC");

?>

<html>
    <head>
        <title>HOME PAGE</title>
    </head>

    <body>
        <a href="add.html">Add New Data</a><br><br>

        <table width='80%' border=10>
            <tr bgcolor='CCCCCC'>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
            </tr>

            <?php
                while($res=mysqli_fetch_array($result))
                {
                    echo"<tr>";
                    echo"<td>".$res['name']."</td>";
                    echo"<td>".$res['age']."</td>";
                    echo"<td>".$res['email']."</td>";
                }
            ?>

        </table>
    </body>
</html>
