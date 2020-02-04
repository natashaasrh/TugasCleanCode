<?php
$text = 'Pegadaian';
$letterMap = array('C', 'F', 'H', 'K', 'M', 'P', 'R', 'N', 'S', 'O', 'Q', '4', '1', '0', 'U', '3', 'B', 'Z', 'Y', 'L', 'X', '7', '8', '2', '5', '6');
function letterMap (string $text, array $letterMap) {
    $alphabetArray = range('A', 'Z');
    $index = 0;
    $result = '';
    $text = strtoupper($text);

    while($index < strlen($text)){
        $indexChar = array_search($text[$index], $alphabetArray);
        $result .= $letterMap[$indexChar];
        $index++;
    }
    return $result;
}
echo letterMap($text, $letterMap);
?>