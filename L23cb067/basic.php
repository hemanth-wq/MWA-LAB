<?php
function reversDigits($num) {
$rev_num = 0; while($num > 1) {
$rev_num = $rev_num * 10 + $num % 10;
$num = (int)$num / 10;
}
return $rev_num;
}
$num = 2345;
echo "Original number is :".$num.'<br>'; echo "Reverse of no. is: ", reversDigits($num);
?>
