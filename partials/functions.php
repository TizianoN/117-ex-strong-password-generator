<?php

/**
 * Funzione che genera una password data la sua lunghezza
 * 
 * @param int La lunghezza della password
 * @return string La password generata
 */
function generate_password($length)
{
  // inizializzo la password vuota
  $generated_password = "";

  for ($i = 0; $i < $length; $i++) {
    // dichiaro i caratteri disponibili
    $available_chars = generate_available_chars();

    // recupero una posizione casuale all'interno della stringa dei caratteri disponibili
    $rand_char_index = rand(0, strlen($available_chars) - 1);

    // uso la posizione per recuperare il carattere effettivo
    $rand_char = $available_chars[$rand_char_index];

    // aggiungo il carattere alla password
    $generated_password .= $rand_char;
  }

  return $generated_password;
}

function generate_available_chars()
{
  $lc_chars = implode('', range('a', 'z'));
  $up_chars = strtoupper($lc_chars);
  $numbers = implode('', range('0', '9'));
  $specials = "\|!\"%&/()=?'";
  return $lc_chars . $up_chars . $numbers . $specials;
}