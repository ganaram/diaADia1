<?php

function calcularDevolucion($importe,$pagado){
    return $pagado-$importe;
}


function calcularCambio($cambio){
    global $cambio;
    $txt = '';
    
    $billetes500 = calcula500Leros($cambio);
    $billetes200 = calcula200Leros($cambio);
    $billetes100 = calcula100Leros($cambio);
    $billetes50 = calcula50Leros($cambio);
    $billetes20 = calcula20Leros($cambio);
    $billetes10 = calcula10Leros($cambio);
    $billetes5 = calcula5Leros($cambio);
    $monedas2 = calcula2Leros($cambio);
    $monedas1 = calcula1Leros($cambio);
    $monedas05 = calcula50cents($cambio);
    $monedas02 = calcula20cents($cambio);
    $monedas01 = calcula10cents($cambio);
    $monedas005 = calcula5cents($cambio);
    $monedas002 = calcula2cents($cambio);
    $monedas001 = calcula1cents($cambio);
        if($billetes500>0){
            if($billetes500==1){
                $txt+='1 Billete de 500€ <br>';
            }else{
                $txt+= $billetes500 . " Billetes de 500€ <br>";
            }
        }if($billetes200>0){
            if($billetes200==1){
                $txt+='1 Billete de 200€ <br>';
            }else{
                $txt+='2 Billetes de 200€ <br>';
            }
        }if($billetes100==1){
                $txt+='1 Billete de 100€ <br>';
        }if($billetes50==1){
                $txt+='1 Billete de 50€ <br>';
        }if($billetes20>0){
            if($billetes20==1){
                $txt+='1 Billete de 20€ <br>';
            }else{
                $txt+='2 Billetes de 20€ <br>';
            }
        }if($billetes10==1){
                $txt+='1 Billete de 10€ <br>';
        }if($billetes5==1){
            $txt+='1 Billete de 5€ <br>';
        }if($monedas2>0){
            if($monedas2==1){
                $txt+='1 Moneda de 2€ <br>';
            }else{
                $txt+='2 Monedas de 2€ <br>';
            }
        }if($monedas1==1){
            $txt+='1 Moneda de 1€ <br>';
        }if($monedas05==1){
            $txt+='1 Moneda de 50 céntimos <br>';
        }if($monedas02>0){
            if($monedas02==1){
                $txt+='1 Moneda de 20 céntimos <br>';
            }else{
                $txt+='2 Monedas de 20 céntimos <br>';
            }
        }if($monedas01==1){
            $txt+='1 Moneda de 10 céntimos <br>';
        }if($monedas005==1){
            $txt+='1 Moneda de 5 céntimos <br>';
        }if($monedas002>0){
            if($monedas002==1){
                $txt+='1 Moneda de 2 céntimos <br>';
            }else{
                $txt+='2 Monedas de 2 céntimos <br>';
            }
        }if($monedas001==1){
            $txt+='1 Moneda de 1 céntimo <br>';
        }
        return $txt;
    }
    

function calcula500Leros($cambio){
    global $cambio;
    $count = 0;
    while($cambio>500){
        $cambio-500;
        $count++;
    }
    return count;
}

function calcula200Leros($cambio){
    global $cambio;
    $count = 0;
    while($cambio>200){
        $cambio-200;
        $count++;
    }
    return count;
}

function calcula100Leros($cambio){
    global $cambio;
    $count = 0;
    while($cambio>100){
        $cambio-100;
        $count++;
    }
    return count;
}

function calcula50Leros($cambio){
    global $cambio;
    if($cambio>50){
        $cambio-50;
        return 1;
    }return 0;
}

function calcula20Leros($cambio){
    global $cambio;
    $count = 0;
    while($cambio>20){
        $cambio-20;
        $count++;
    }
    return count;
}

function calcula10Leros($cambio){
    global $cambio;
    if($cambio>10){
        $cambio-10;
        return 1;
    }return 0;
}

function calcula5Leros($cambio){
    global $cambio;
    $count = 0;
    while($cambio>5){
        $cambio-5;
        $count++;
    }
    return count;
}

function calcula2Leros($cambio){
    global $cambio;
    $count = 0;
    while($cambio>2){
        $cambio-2;
        $count++;
    }
    return count;
}

function calcula1Lero($cambio){
    global $cambio;
    if($cambio>1){
        $cambio-1;
        return 1;
    }return 0;
}


function calcula50cents($cambio){
    global $cambio;
    if($cambio>0.5){
        $cambio-0.5;
        return 1;
    }return 0;
}

function calcula20cents($cambio){
    global $cambio;
    $count = 0;
    while($cambio>0.2){
        $cambio-0.2;
        $count++;
    }
    return count;
}

function calcula10cents($cambio){
    global $cambio;
    if($cambio>0.1){
        $cambio-0.1;
        return 1;
    }return 0;
}

function calcula5cents($cambio){
    global $cambio;
    if($cambio>0.05){
        $cambio-0.05;
        return 1;
    }return 0;
}

function calcula2cents($cambio){
    global $cambio;
    $count = 0;
    while($cambio>0.02){
        $cambio-0.02;
        $count++;
    }
    return count;
}

function calcula1cent($cambio){
    global $cambio;
    if($cambio>0.01){
        $cambio-0.01;
        return 1;
    }return 0;
}
?>