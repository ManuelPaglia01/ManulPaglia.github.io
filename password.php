<?php
    $connection = new mysqli('sql11.freemysqlhosting.net', 'sql11425112', 'n6unKVPPUp', 'sql11425112');
  

    $password = md5($connection->real_escape_string($_POST['passwordPHP']));
    $table = 'utenti';

    $max = mysqli_query($connection, "SELECT (MAX(id)+1) FROM utenti");

    $query1 = mysqli_query($connection, "UPDATE utenti SET pasword = '$password' WHERE id = '0'");

    $query2 = mysqli_query($connection, "UPDATE utenti
	SET id = (
        SELECT * FROM (
            SELECT (MAX(id)+1) 
            FROM utenti
            ) as x
        )
	WHERE pasword = '$password'");

    $_SESSION['loggedIN'] = '1';
    exit('<h2 style="color: green;">Password registrata</h2>');
    mysqli_close($connection);

    //UPDATE utenti SET id = id + (SELECT MAX(id) FROM utenti) WHERE pasword = '$password'
        
?>







