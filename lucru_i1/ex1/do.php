<?php
    $holiday = array("31 12", "01 01", "07 01", "08 01", "14 02", "01 03", "08 03", "01 05", "02 05", "09 05", "27 08", "31 08", "25 12");


    $date = date('Y-m-d');
    $time =  date("H:i");
    echo $date, "<br>";
    echo $time;

    $wday = date('w', strtotime($date)); //ziua saptamanii
    $month = date('m'); // luna
    $day = date("d");

    $hour = date("H");
    $monthday = date("d m");


    $j = true;
    $hcheck = 0;
    //parcurgem atata timp cat j==true
    while($j){
        //daca ora <12 si ziua saptaminii e mai mica ca 6 adica (6- sambata, 7- duminica)
        if ($hour < 12 && $wday < 6){
            // parcurgem vectorul cu sarbatori
            for ($i=0;$i<count($holiday);$i++){
                //se verifica daca ziua de azi nu este sarbatoarea cu numarul i din vector
                if ($monthday !=$holiday[$i]){
                    //incrementam variabila holiday Check -hcheck
                    $hcheck++;
                }
            }
            // daca hckeck == cu nr tuturor sarbatorilor din lista inseamna ca ziua de azi nu este o srabatoare
            if ($hcheck==count($holiday)){
                //afisam rezultatul si oprim while, prin atribuirea valorii false variabilei j
                echo "<br>Comanda va fi livrata la data de : ", $monthday;
                $j=false;
            }
            //daca data de azi corespunde cu o oarecare sarbatoare atunci:
            else{
                //setam ora 8(ora la care se incep a primi comenzi), adaugam o zi la day si una la countDay,  si modificam variabila monthDay
                $hour = 8;
                $wday= ($wday+1)%8;
                $day++;
                if ($day<10) {
                    $monthday = "0". $day . " ". $month;
                }
                else{
                    $monthday = $day . " ". $month;
                }
                $hcheck=0;
            }
        }
        //identic ciclului else de mai sus
        else{
            //setam ora 8(ora la care se incep a primi comenzi), adaugam o zi la day si una la countDay,  si modificam variabila monthDay
            $hour = 8;
            $wday= ($wday+1)%8;
            $day++;
            if ($day<10) {
                $monthday = "0". $day . " ". $month;
            }
            else{
                $monthday = $day . " ". $month;
            }
            $hcheck=0;
        }
    }

?>