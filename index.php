

<?php
class Car{
    public function color(){
       echo 'Red';
    }

    public function engine(){
        echo '4000cc';
    }

    public function model(){
        echo 'B1235';
    }
}

$objectCar = new car();

$objectCar -> color();
echo '</br>';
$objectCar -> engine();
echo '</br>';
$objectCar -> model();




class Calculator{
    public function sum($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x+$y;
        echo $result;
    }

    public function sub($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x-$y;
        echo $result;
    }

    public function mul($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x*$y;
        echo $result;
    }

    public function div($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x/$y;
        echo $result;
    }
}

$objectCalculator = new Calculator();
echo '<br>';
$objectCalculator -> sum(20, 30);
echo '<br>';
$objectCalculator -> sub(20, 30);
echo '<br>';
$objectCalculator -> mul(20, 30);
echo '<br>';
$objectCalculator -> div(20, 2);


?>