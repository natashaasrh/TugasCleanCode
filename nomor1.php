<?php
$text = 'Pegadaian';
$key = 3;
function caesarCipher(string $text, int $key) {
    $alphabetArray = range('A', 'Z');
    $index = 0;
    $result= '';
    $text = strtoupper($text);
        
    while($index < strlen($text)){
        $indexChar = array_search($text[$index], $alphabetArray);
        $indexEncrypt = $indexChar + $key;
        if ($indexEncrypt > 26) {
            $indexEncrypt-25;
        }
        $result .= $alphabetArray[$indexEncrypt];
        $index++;
    }
    return $result;
}
echo caesarCipher($text, $key);
?>