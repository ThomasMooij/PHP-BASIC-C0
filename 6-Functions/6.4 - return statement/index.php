<?php

function geefTienProcent(){
    $koopPrijs=75;
    $korting=10;
    $kortingTotaal=$koopPrijs/$korting;
    return $koopPrijs - $kortingTotaal;
}

echo "Het totaalbedrag is " . geefTienProcent();


?>