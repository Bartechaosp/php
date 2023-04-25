<!-- zad 1 -->
 <?php 
 //zad 1
    // for ($i = 0; $i < 100 ;$i++) {
    //     if ($i % 3 == 0) echo($i);
    // }

//Zad 2
        // $tablica = [1,2,3];
        // $suma = 0;
        // for($i = 0; $i < count($tablica) ;$i++) {
        //     $suma += $tablica[$i];
        // }
        // echo $suma;

        //zad 3
        // $number = $_POST['input'];
        // if ($number % 2 == 0) {
        //     echo("Liczba jest parzysta");
        // } else {
        //     echo("Liczba nie jest parzysta");
        // }

        //zad 4
        $text = $_POST['input'];
        if($text == strrev($text)) {
            echo "to słowo jest tym czymś";
        } else {
            echo "Nie jest tym czymś";
        }

        //zad 15
?> 