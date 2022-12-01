<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>

  <link rel="stylesheet" href="Styles/style.css">
  <title>LOGIN</title>
</head>

<body>

  <form action="PHP/login.php" method="post">
    <!-- En este div se devuelve el error !-->
    <div>
      <?php
      if (isset($_GET["error"])) {
        echo $_GET["error"];
      }
      ?>
    </div>
    <div>
      <label for="nombre">Nombre: </label>
      <input type="text" name="nombre">
    </div>
    <div>
      <label for="password">Contraseña: </label>
      <input type="password" name="password">
    </div>
    <div>
      <button type="submit">SUBMIT</button>
    </div>
  </form>
</body>

</html>