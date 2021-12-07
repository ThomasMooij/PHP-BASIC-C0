<?php

$var1=1;
$var2=2;

if($var1 && $var2 > 5){
    echo" dit gaat niet echoen";
} else{
    echo "dit echot gewoon";
}
if($var1 > 3 || $var2 > 3){
    echo" dit gaat niet echoen";
} else{
    echo "dit echot gewoon";
}
if($var1 && $var2 > 5){
    echo" dit gaat niet echoen";
} else{
    echo "dit echot gewoon";
}
if($var1 xor $var2 > 1){
    echo" deze echot wel";
} else{
    echo "dit echot gewoon";
}
if($var1 ! 5){
    echo" deze echot wel";
} else{
    echo "dit echot gewoon";
}


?>