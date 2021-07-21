<?php

$host ="sql11.freemysqlhosting.net";
$user="sql11425112";
$password="n6unKVPPUp";
$database="sql11425112";
$table="dati_debiti";
$connection = mysqli_connect($host, $user, $password, $database); // create datbase connection
$nome_debitore=$_POST['nome_debitore'];
$somma_debito=$_POST['somma_debito'];
$data_debito=$_POST['data_debito'];

//Insert query

$sql = mysqli_query($connection,"SELECT * FROM `utenti` WHERE nome_utente='$nome_debitore'");
$sql = mysqli_fetch_assoc($sql);
$Checker = $sql['nome_utente'];

/////////////////////////////////////////////////////////////////////////////////////

if  ($Checker != null) {//controllo se l'IP è presente nel db
    $query = mysqli_query($connection, "insert into $table(nome_debitore, somma_debito, data_debito) values ('$nome_debitore', '$somma_debito', '$data_debito')");
    mysqli_close($connection); // Connection Closed

}
?>
