<?php

require_once __DIR__ . "/functions.php";

$password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : 5;

$form_sent = !empty($_GET);

if ($form_sent) {
  // inizializzo la sessione
  session_start();

  // genero una password della lunghezza specificata e la salvo in sessione
  $_SESSION['generated-password'] = generate_password($password_length);

  // porto l'utente alla pagina del risultato
  header('Location: ./result.php');
}