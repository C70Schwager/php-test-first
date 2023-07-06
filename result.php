<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- HEADER -->
<?php 
    include "./includes/tools.php";
    include "./includes/header.php"; 
?>
<!-- END:HEADER -->

<div class="container my-4 text-start">
  <p class="mt-5">

      <?php 
        /*
          P03: Gib die ge-posteten Key-Value-Paare als Liste aus.
        */
        prettyPrint($_POST);
      ?>

      Willkommen <?php echo $_POST["name"]; ?>!<br>
      Deine Email-Adresse lautet <?php echo $_POST["email"]; ?>.<br>
      Geht es dir heute gut: <?php echo $_POST["radio-mood"]; ?>.<br>

      Du hast folgende Farben gewählt: 
      <?php 
      /*
        P04: Die ausgewählten Farbwerte herausfiltern und als einfache Liste 
        ausgeben. Es werden nur die Werte mit 'color-' im Schlüssel (Key) 
        erkannt. Die Liste wird durch Kommas getrennt.

        In der foreach-Schleife werden jeweils auch Farbwerte geprüft und
        die Variablen 'redSelected', 'whiteSelected', 'otherSelected' und
        'hasSelection' entsprechend auf true gesetzt. Ist die Auswahl falsch,
        dann wird ein kurzes Feedback ausgegeben.

        Für foreach siehe auch https://www.w3schools.com/php/php_looping_foreach.asp
        Wir verwenden die erweiterte Form von foreach ($_POST as $value) {},
        nämlich foreach ($_POST as $key => $value) {}.

        Für str_contains() siehe auch https://www.php.net/manual/en/function.str-contains.php
      */

      foreach ($_POST as $key => $value) {
        if (str_contains($key, 'color-')) {
            if ($colorCount > 0) echo ", ";
            echo "$value";
            $colorCount++;

            if ($value == "rot") $redSelected = true;
            elseif ($value == "weiss") $whiteSelected = true;
            else $otherSelected = true;
        }
      }
      
      echo "<br><br>";

    if ($redSelected == false || $whiteSelected == false || $otherSelected == true) {
        echo "<span style='color:red;'>Geh wieder nach Hause!</span>";
    }
      /*
        P05: Zum gewählten Tier 'mammal' wird ein Feedback ausgegeben. Dazu verwenden wir
        switch() Verzweigungen.
      */
      $mammal = $ POST[""];
      switch($mammal) { case "Rind"}
      

      echo "<br><br>";

      /*
        P06: Im "comment"-Feld prüfen wir, ob gewisse Schimpfwörter wie
        "fuck" oder "arschloch" verwendet wurden und überschreiben
        jedes dieser Schimpfwörter mit "#%$@".

        Verwendete PHP Hilfsfunktionen: strlen(), strtolower(), str_replace()
      */

      echo = $_POST["comment"];
      $blacklist = array("Fuck", "Arsch", "Wixer", "Idiot", "Bitch", "Slut");

      foreach ($blacklist as $swearWord) {
        $comment = str_ireplace($swearWord, "!%#!@&", $comment);
      }

      echo "<br><br>Dein Kommentar lautet: $comment";

      // case-insensitive
      
      ?><br>
      

  </p>
</div>

<!-- FOOTER -->
<?php include "./includes/footer.php"; ?>
<!-- END:FOOTER -->

</body>

</html>