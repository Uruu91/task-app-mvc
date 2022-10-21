<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista Main</title>
  <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/default.css">
  <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> -->
</head>

<body>
  <header>
    <?php include "views/header.php"; ?>
  </header>
  
  <main>
    <h1 class="w-fit mx-auto text-4xl font-semibold py-2">Esta es la vista de main</h1>
  </main>
  
  <footer>
    <?php include "views/footer.php"; ?>
  </footer>
</body>

</html>