<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>ex2 </title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="birthday" method="post">
    <h2>LA MULTI ANI</h2>
    <p>
        De elaborat un script ce va afișa numărul de zile rămase până la ziua Ta de naștere. <br> În ziua
        de naștere va fi afișat un mesaj de felicitare ”La Mulți Ani” și numărul de ani împliniți.
    </p>
    <h2>Introdu data nasterii</h2>
    <input type="date" id="birthdate" name="birthdate">
    <input type="submit" name="button1" value="Calculeaza"/>
</form>
    <?php
    if (array_key_exists('button1', $_POST)) {
        echo "Data nasterii : " . $_POST['birthdate'];
        $date = strtotime($_POST['birthdate']);
        $year = date('y', $date);
        $month = date('m', $date);
        $day = date('d', $date);

        $cday =  date('d');
        $cmonth = date('m');
        $cyear = date('y');

        function swapdays($days, $variant){
            $fyear = ($days / 365.16);
            $fmonth = ($days % 365.16) / 30.43;
            $fday = (($days % 365.16) % 30.43);
             if ($variant == 1)
                 echo "<br>Următoarea zi de naștere va fi peste : <br>" , "Zile: ", floor($fday) , " Luni: " , floor($fmonth);
           }

        $bday = (($cyear * 12 * 30.43) + ($month * 30.43) + $day * 1);
        $nowadays = (($cyear * 12 * 30.43) + ($cmonth * 30.43) + $cday);
           if ($bday > $nowadays) {
               $diff = $bday - $nowadays;
             swapdays($diff, 1);
           } else if ($bday < $nowadays) {
               $bday = $bday + 365;
               $diff = $bday - $nowadays;
             swapdays($diff, 1);
           } else if ($bday == $nowadays) {
               $fdays = ((($cyear * 12 * 30.43) + ($cmonth * 30.43) + $cday) - (($year * 12 * 30.43) + ($month * 30.43) + ($day * 1)));
             echo "<br>La multi Ani!";
             swapdays($fdays, 0);
           }
        }
    ?>
</body>
</html>
