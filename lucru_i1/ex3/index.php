<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ex3</title>
  </head>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
  <body>
    <form class="birthday" method="post">
      <h2>SALUTARE</h2>
      <p>
        De elaborate un script ce va afișa un mesaj de salutare în dependență de ora curentă. Dacă
        ora este între 7.00 – 11.00 se va afișa mesajul ”Buna dimineața”, între 11.00 – 18.00 - ”Buna
        ziua”, între 18.00 – 22.00 - ”Buna seara”, după ora 22.00 - ”Noapte buna”, după miezul nopții -
        ”De ce nu dormi, mâine ai Programarea Web”. </p>


      <h2>Tastati butonul pentru a verifica perioada zilei</h2>
        <input type="submit" name="button1" value="Verifica"/>
    </form>
    <?php
    $time = date('H');
        if (array_key_exists('button1', $_POST)) {
            if ($time>=7 && $time<=10) {
                echo "Buna Dimneata";
            }
            else if($time>=11 && $time<=18){
                echo "Buna Ziua";
            }
            else if ($time>=19 && $time<=22){
                echo "Buna Seara";
            }
            else if ($time>=22 && $time<=23){
                echo "Noapte buna";
            }
            else if ($time>=0 && $time<=6){
                echo "De ce nu dormi, mâine ai Programarea Web";
            }
        }

    ?>
  </body>
</html>
