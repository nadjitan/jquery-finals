<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="#" />
  <title>CS Elective Finals - Nadji</title>

  <link rel="stylesheet" href="./public/css/app.css">
  <link rel="stylesheet" href="./public/css/home.css">
</head>

<body>
  <div id="root">
    <!-- Includes all of the pages based on page name -->
    <?php require_once('./src/Routes/web.php');?>
  </div>

  <script type="text/javascript" src="./public/js/jquery.min.js"></script>
  <script type="module" src="./public/js/app.js"></script>
</body>

</html>