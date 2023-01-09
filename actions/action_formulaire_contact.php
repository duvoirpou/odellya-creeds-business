<?php
//session_start();
include('connexionBdd.php');

var_dump($_POST); die();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    if (isset($_POST['enregistrer'])) {
        $noms = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $request = $db->prepare("INSERT INTO `contact`(`name`, `email`, `subject`, `message`)
    VALUES (:noms,:email,:sujet,:msg)");

        $reponse = $request->execute(
            array(
                ':noms' => $noms,
                ':email' => $email,
                ':sujet' => $subject,
                ':msg' => $message
            )
        );
    }
};
header('location:contact.php');
?>