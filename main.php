.       .
                             / `.   .' "
                     .---.  <    > <    >  .---.
                     |    \  \ - ~ ~ - /  /    |
         _____          ..-~             ~-..-~
        |     |   \~~~\.'                    `./~~~/
       ---------   \__/                        \__/
      .'  O    \     /               /       \  "
     (_____,    `._.'               |         }  \/~~~/
      `----.          /       }     |        /    \__/
            `-.      |       /      |       /      `. ,~~|
                ~-.__|      /_ - ~ ^|      /- _      `..-'   
                     |     /        |     /     ~-.     `-. _  _  _
                     |_____|        |_____|         ~ - . _ _ _ _ _>


<?php
    $valueone = 0;
    $valuetwo = 0;
    $valuethree = 0;
    $delta = 0;

    print('RESOLUTION EQUATION DU SECOND DEGRE AVEC PHP ax² + bx + c = 0' ."\n");

    $valueone = readline('Valeur de A : ');
    $valuetwo = readline('Valeur de B : ');
    $valuethree = readline('Valeur de C : ');
    //fscanf(STDIN, "%d %d", $a, $b);
    
    print("A = $valueone  B = $valuetwo  C = $valuethree \n");

    if (is_numeric($valueone) && is_numeric($valuetwo) && is_numeric($valuethree)) {
        print($valueone."x² + ".$valuetwo."x + ".$valuethree." = 0 \n");
        print('Donc Δ = b²-4ac' ."\n");
        $delta = pow($valuetwo, 2) - 4 * ( ($valueone * $valuethree) ."\n");
        print('Δ = ' .$delta. "\n");
        
        switch ($delta) {
            case ($delta <= 0):
                print('Comme Δ < 0, l\'équation ne possède pas de solution réelle.');
                break;
            case ($delta === 0):
                print('Comme Δ = 0, l\'équation possède une unique solution :
                         b
                x 0 =   ----
                         2a 
                                            ' ."\n");
                //calcul
                $cal1 =  -($valuetwo);
                $cal2 =  - ($valueone) * - ($valueone);
                //fin de calcul
                print("
                         $cal1
                x 0 =   ----
                         $cal2                            
                                    ");
                break;
            case ($delta > 0):
                print('');
                break;
            default:
            print('Equation incalculable');
            break;
        }
    }

?>