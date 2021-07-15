<?php

$host ="localhost";
$user="root";
$passwordb="";
$database="CDS";
$table="dati_debiti";
$connection = mysqli_connect($host, $user, $passworddb, $database); // create datbase connection
$nome_utente=$_POST['nome_utente'];
$password_pwrd=$_POST['password_pwrd'];


//Insert query

$sql = mysqli_query($connection,"SELECT nome_utente FROM `utenti` WHERE nome_utente='$nome_utente'");
$sql = mysqli_fetch_assoc($sql);
$Checker = $sql['nome_utente'];
$sql2 = mysqli_query($connection,"SELECT password_pwrd FROM `utenti` WHERE password_pwrd='$password_pwrd'");
$sql2 = mysqli_fetch_assoc($sql2);
$Checker2 = $sql2['password_pwrd'];

/////////////////////////////////////////////////////////////////////////////////////

if  ($Checker != null) {//controllo se l'IP è presente nel db
    $query = mysqli_query($connection, "insert into $table(nome_debitore, somma_debito, data_debito) values ('$nome_debitore', '$somma_debito', '$data_debito')");
    mysqli_close($connection); // Connection Closed

}
?>
