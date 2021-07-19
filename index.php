<?php

session_start();

if(isset($_SESSION['loggedIN'])){
    header('Location: hidden.html');
    exit();
}

if(isset($_POST['login'])){
    $connection = new mysqli('sql11.freemysqlhosting.net', 'sql11425112', 'n6unKVPPUp', 'sql11425112');

    $email = $connection->real_escape_string($_POST['emailPHP']);
    $pasword = md5($connection->real_escape_string($_POST['paswordPHP']));


    $data = $connection->query("SELECT id FROM utenti WHERE email='$email' AND pasword='$pasword'");
    if($data->num_rows > 0){
        
        $_SESSION['loggedIN'] = '1';
        $_SESSION['email'] = $email;

        exit('<h2 style="color: green;">Login effettuato con successo</h2>');
    }else
        exit('<h2 style="color: red;">email o password errati</h2>');

}
?>