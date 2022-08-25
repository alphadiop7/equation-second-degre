<?php
    error_reporting (0);
    if (isset($_POST['a_valeur']) || isset($_POST['b_valeur']) || isset($_POST['c_valeur'])) {
        $a_valeur = htmlspecialchars($_POST['a_valeur']);
        $b_valeur = htmlspecialchars($_POST['b_valeur']);
        $c_valeur = htmlspecialchars($_POST['c_valeur']);
        $delta = ($b_valeur * $b_valeur) -4 * $a_valeur * $c_valeur;

        if ($delta < 0) {
            $alert_incre = "Δ = b²-4ac => Δ =". $delta;
            $alert_msg = "Pas de solutions reelles";
        } elseif ($delta == 0) {
            $alert_incre = "Δ = b²-4ac => Δ =". $delta;
            $alert_msg = "Il y a une solution unique";
            $alert_regle = "x = -b / (2a);";
            echo $b_valeur . $delta .'2*'. $a_valeur;
            echo 'x ='. $sol_unique = (-$b_valeur-sqrt($delta))/(2*$a_valeur);
            echo $sol_unique;
        } elseif ($delta > 0) {
            $alert_incre = "Δ = b²-4ac => Δ =". $delta;
            $alert_msg = "Il y a deux solutions qui sont: x1 et x2";
            $alert_regle = "x1 = (-b-√Δ)/(2a) et x2 = (-b+√Δ)/(2a);";
  
            $alert_x1 = "x1 = " ."(". -$b_valeur ."-√". $delta .")" ." / (". 2 * $a_valeur .")";
            $sol_1 = (-$b_valeur-sqrt($delta)) / (2 * $a_valeur);
            $alert_resultat_1 = "x1 = ". $sol_1;
            
            $alert_x2 = "x2 = " ."(". -$b_valeur ."+√". $delta .")" ." / (". 2 * $a_valeur .")";
            $sol_2 = (-$b_valeur+sqrt($delta)) / (2 * $a_valeur);
            $alert_resultat_2 =  "x2 = ". $sol_2;
        } else {
            $alert_msg = "Equation incalculable";
        }

    } else {
        $alert_msg = "";
    }
?>