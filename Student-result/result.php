<?php
$marks=[80,90,96,98,99];

    

$totalmarks=array_sum($marks);
$averagemarks=$totalmarks/count($marks);

switch (true){
    case($averagemarks<100 && $averagemarks>=80):
        echo "Grade: A+";
        break;

        case($averagemarks<80 && $averagemarks>=70):
            echo "Grade: A";
            break;

            case($averagemarks<70 && $averagemarks>=60):
                echo "Grade: A-";
                break;
                case($averagemarks<60 && $averagemarks>=50):
                    echo "Grade: B";
                    break;
                    case($averagemarks<50 && $averagemarks>=40):
                        echo "Grade: C";
                        break;
                        case($averagemarks<40 && $averagemarks>=33):
                            echo "Grade: D";
                            break;
                            default:
                            echo "Grade: F";
                            break;
}
echo"Total Mark: $totalmarks\n";
echo"Avetrage Mark: $averagemarks\n";
