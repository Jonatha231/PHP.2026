<?php
    $a = 10;
    $b = 6;

    $soma = $a + $b;

    echo "A soma é $soma";

    echo"<hr>";

    if($a>$b) {

    echo "B é maior q a";
    }else{

        echo "b nn é maior ";
echo"<hr>";


        $nl = 4;
        $n2 = 5;
        $m3 = 6;


        $media = ($nl +  $n2 + $m3)/3;

        echo "sua media é $media ";

        if(media> 5) {
            echo "aprovado";
        }else{
            if($media < 4 ){
                echo "reprovado";
            }else{
                echo "Recuperação";
            }
        }
        echo "<hr>";

        $dia = 2;

        switch ($dia) {
            case 1:
              echo "Domingo";
                break;

            case 2:
              echo "Segunda";
                break;
            case 3:
              echo "Terça";
                break;
      
            case 4:
              echo "Quarta";
                break;
            
            default:
               echo "Numero invalido";
                break;
        }
    };

echo"<hr>";

            for ($i=1; $i <=10 ; $i++) { 
                echo "$i  ";
            }
            echo"<hr>";


            $a = 1;
            while ($a <= 10) {
                echo"$a ";
                $a++;

            }
            echo"<hr>";

            $x=1;
            do {
                echo"$x ";
                $x++;
            } while ($x <= 10);
echo"<hr>";

       $nomes = ['dou','be','silva','douglas'];
       ///for ($=0; $n <=$qntd  ; $$++) { 
       foreach ($nomes as $nome) {
        echo "$nome <br>";
       }



?>