<head></head>
<body>
<h1>1</h1>
<?php
#Рассчитать значение y, определив и использовав необходимую функцию:
function sinus($firstNumber, $secondNumber, $type = 1){
    if($type==1){
        return ($firstNumber + sin($firstNumber)) / 3;
    }
    if($type==2){
        return ($firstNumber + sin($firstNumber)) / (sin($secondNumber) + $secondNumber);
    }
    if($type==3){
        return ($firstNumber + sin($secondNumber)) / ($secondNumber + sin($firstNumber));
    }
    if($type==4){
        return (sin($firstNumber) + $secondNumber) / (sin($firstNumber) + $secondNumber);
    }
}

echo sinus(1, 3, 1) + sinus(5, 3, 1) + sinus(3, 3, 1);
echo "<h1></h1>";
echo sinus(2, 5, 2) + sinus(6, 3, 2) + sinus(1, 4, 2);
echo "<h1></h1>";
echo sinus(1, 4, 3) + sinus(7, 5, 3) + sinus(3, 2, 3);
echo "<h1></h1>";
echo sinus(2, 3, 3) + sinus(1, 5, 2) + sinus(7, 4, 4);
?>

<h1>2</h1>
<?php
#Определить значение, где максимальное, а где минимальное.
function maximum($a, $b){
    if($a > $b){
        echo "Number A is higher than B.";
    }else{
        echo "Number B is higher than A." ;
    }
}
function minimum($a, $b){
     if($a < $b){
         echo "Number A is lower than B.";
     }else{
         echo "Number B is lower than A." ;
     }
}
$firstRandNum = rand(1, 10);
$secondRandNum = rand(1, 10);
echo "<h3>1.</h3>";
echo maximum($firstRandNum, $secondRandNum);

$firstRandNum = rand(1, 10);
$secondRandNum = rand(1, 10);
echo "<h3>2.</h3>";
echo minimum($firstRandNum, $secondRandNum);

?>

<h1>3</h1>
<?php
# Определить значение, Позитивное, или негативное.
function value($a, $b){
    $result = $a + $b;
    if($result > 0){
        echo "This value"," ($result) "," is positive.";
    }elseif($result == 0){
        echo "This value"," ($result) "," is equal to null.";
    }else{
        echo "This value"," ($result) ","is negative.";
    }
}

$firstRandNum = rand(-10, 10);
$secondRandNum = rand(-10, 10);
echo Value($firstRandNum, $secondRandNum);
?>

<h1>4</h1>
<?php
#Даны основания и высоты двух равнобедренных трапеций. Найти сумму их
#периметров. (Определить функцию для расчета периметра равнобедренной
#трапеции по ее основаниям и высоте.)

function trapeze($sideA, $sideB, $sideC, $sideD){
    $result = $sideA + $sideB + $sideC + $sideD;
    return $result;
}

$firstTrapeze = [rand(1,10), rand(1,10), rand(1,10), rand(1,10)];
echo "Result: ", trapeze($firstTrapeze[0],$firstTrapeze[1],$firstTrapeze[2],$firstTrapeze[3]);

?>

<h1>5</h1>
<?php

function squareExe($firstNum, $secondNum, $thirdNum){
    $temp = ($secondNum*$secondNum) - (4 * $firstNum * $thirdNum);
    if($temp < 0){
        echo "This square exercise doesn't have any roots";
    }elseif($temp == 0){
        echo "This square exercise have only one root";
    }else{
        $negativeNum = $secondNum * -1;
        $tempOne = ($negativeNum + sqrt($temp)) / (2 * $firstNum);
        $tempSecond = ($negativeNum - sqrt($temp)) / (2 * $firstNum);
        echo "First X = ", "$tempOne .", " Second X = ", "$tempSecond .";
    }
}

$firstRandNum = rand(1, 10);
$secondRandNum = rand(1, 10);
$thirdRandNum = rand(1, 10);

echo "Result: ", squareExe($firstRandNum, $secondRandNum, $thirdRandNum);

?>

<h1>6</h1>
<?php

function square($firstNum){
    return $firstNum * $firstNum;
}

function distanceBetweenPoints($firstPoint, $secondPoint){
    $firstTemp = $secondPoint[0] - $firstPoint[0];
    $firstTemp = square($firstTemp);
    $secondTemp = $secondPoint[1] - $firstPoint[1];
    $secondTemp = square($secondTemp);
    $result = sqrt($firstTemp + $secondTemp);
    return round($result);
}

$firstPoint = [rand(1, 10), rand(1, 10)];
$secondPoint = [rand(1, 10), rand(1, 10)];
$thirdPoint = [rand(1, 10), rand(1, 10)]; 

echo 'Points : ', "A = $firstPoint[0], $firstPoint[1]; ",
                  "B = $secondPoint[0], $secondPoint[1]; ",
                  "C = $thirdPoint[0], $thirdPoint[1];", "<h1></h1>";

echo 'Distance between first and second point: ', distanceBetweenPoints($firstPoint, $secondPoint), "<h1></h1>";
echo 'Distance between second and third Point: ', distanceBetweenPoints($secondPoint, $thirdPoint), "<h1></h1>";
echo 'Distance between third and first point: ', distanceBetweenPoints($thirdPoint, $firstPoint), "<h1></h1>";
?>


</body>










