<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Nilai : <input type="number" name="nilai" />
        <input type="submit" value="Proses" />
    </form>
<?php
$nilai = 100;
switch($nilai){
    case 90:
        echo "Nilai Anda A";
        break;
        case 80:
            echo "Nilai Anda B";
            break;
            case 70:
                echo "Nilai Anda C";
                break;
                case 60:
                    echo "Nilai Anda D";
                    break;
                    default:
                    echo "Nilai Anda E";
                    break;
}
?>