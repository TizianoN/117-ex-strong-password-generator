<?php

session_start();

if (!isset($_SESSION['generated-password']) || empty($_SESSION['generated-password'])) {
  header('Location: ./index.php');
}

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
    <h1>Password generata con successo!</h1>

    <div class="card mt-5">
      <div class="card-body">

        <code class="fs-1">
          <?= $_SESSION['generated-password'] ?>
        </code>

      </div>
    </div>

  </div>
</body>

</html>