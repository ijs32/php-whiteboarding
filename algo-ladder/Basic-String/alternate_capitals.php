Given a string, write a function that returns a copy of the original string that has every other character capitalized. (Capitalization should begin with the second character.)

Input: “hello, how are your porcupines today?”
Output: “hElLo, HoW ArE YoUr pOrCuPiNeS ToDaY?”

<?php
$string = 'hello, how are your porcupines today?';
$i = 0;
while ($i < strlen($string)) {
    if ($i % 2 == 0) {
        $string[$i] = strtoupper($string[$i]);
    }
    $i++;
}
echo $string;
?>

I am a php expert wow