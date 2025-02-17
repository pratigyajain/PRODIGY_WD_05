<?php
        $user_name=$_GET['name'];
        $user_email=$_GET['email'];
        $user_age=$_GET['age'];
        $user_role=$_GET['role'];
        echo '<center>';
        echo 'Successful Submitted.';
        echo "<table border='2px'> <tr><th>Name</th><th>E mail</th><th>Age</th><th>Role</th></tr>";
        echo "<tr> <td padding='50x'>$user_name</td> <td style= margin:20x>$user_email</td><td>$user_age</td><td>$user_role</td></table>";
        echo "</center>";
?>