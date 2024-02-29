<?php

// # Descrizione
// Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro 
// generatore di password (abbastanza) sicure.
// L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

// # Milestone 1
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà 
// questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri
// e simboli) da restituire all'utente. Scriviamo tutto (logica e layout) in un unico file index.php

// # Milestone 2
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file 
// functions.php che includeremo poi nella pagina principale

// # Milestone 3 (BONUS)
// Invece di visualizzare la password nella index, effettuare un redirect ad una pagina 
// dedicata che tramite $_SESSION recupererà la password da mostrare all'utente. (modificato) 

require_once __DIR__ . "/partials/functions.php";
require_once __DIR__ . "/partials/init.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <h1>Strong Password Generator</h1>

    <div class="card mt-5">
      <div class="card-body">

        <form class="row">
          <div class="col-10">
            <label for="password-length" class="form-label">
              Lunghezza password
            </label>
            <input type="number" class="form-control" name="password-length" id="password-length"
              value="<?= $password_length ?>">
          </div>
          <div class="col-2 d-flex align-items-end">
            <button class="btn btn-success w-100">
              Genera password
            </button>
          </div>
        </form>

      </div>
    </div>

  </div>
</body>

</html>