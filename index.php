<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">

    <title>PHP Intro | Templates</title>
  </head>

  <body>
    <?php includes "./header.php"; ?>
      <main class="section-main">
        <?php echo '<h1 class="main-title">This 
        is site is build with templates</h1>' ?>
      </main>
    <?php includes "./footer.php"; ?>
  </body>
</html>