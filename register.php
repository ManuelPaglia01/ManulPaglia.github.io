<?php
    $connection = new mysqli('sql11.freemysqlhosting.net', 'sql11425112', 'n6unKVPPUp', 'sql11425112');


    $email = $connection->real_escape_string($_POST['emailPHP']);

    $nome_utente = ($connection->real_escape_string($_POST['nome_utentePHP']));

    $table = 'utenti';


    $data = $connection->query("SELECT * FROM utenti WHERE email='$email'");

    $data2 = $connection->query("SELECT * FROM utenti WHERE nome_utente='$nome_utente'");

    if($data->num_rows > 0 || $data2->num_rows > 0){
     
       // $_SESSION['email'] = $email;
        exit('<h2 style="color: red;">Errore di registrazione</h2>');
        mysqli_close($connection);
     
    }else
        $_SESSION['loggedIN'] = '1';
        $query = mysqli_query($connection, "insert into $table(nome_utente, email, pasword, id) values ('$nome_utente', '$email', 'passworddefault', '0')");
        exit('<h2 style="color: green;">Email e nome utente registrati</h2>');
        
        mysqli_close($connection);



?>







