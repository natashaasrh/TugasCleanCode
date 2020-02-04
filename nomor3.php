<?php
function transposeEncryption($data, $key)
{
   $arrayOfChar = str_split($data);
   $twoDimensionArray = array_chunk($arrayOfChar, $key);
   $transposedArray = [];

   foreach ($twoDimensionArray as $key => $item) {
       foreach ($item as $subkey => $subitem) {
            $transposedArray[$subkey][$key] = $subitem;
       }
   }

   return implode_all($transposedArray);
}
function implode_all($arr){          
   for ($i=0; $i<count($arr); $i++) {
       if (is_array($arr[$i]))
           $arr[$i] = implode_all ($arr[$i]);
   }          
   return implode("",$arr);
}
echo transposeEncryption("PEGADAIAN",4);
?>