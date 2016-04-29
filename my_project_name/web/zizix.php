<?php

    function tabeleves(){
        $prenom = ["Emmanuel", "Thierry", "Pascal", "Eric", "Nicolas"];
        $age = [42, 51, 45, 48, 19];

    for ($i=0; $i < count($age); $i++){
        $tab = [$prenom[$i], $age[$i] ];
        $rep = $rep.implode(',', $tab)."<br />";
        $moyenne = $moyenne + $age[$i];
    }
        return "Eleves:<br /><br />".$rep."<br />Moyenne d'age:"." ".$moyenne/count($age);

    }

    echo tabeleves();

?>