<!DOCTYPE html>
<html lang="fr">
<?php
include('./include/head.php');
?>

<body>
    <?php
    include('./include/header.php');

    $lundi = [
        "nord" => "10deg",
        "nord1" => "12deg",
        "nord2" => "10deg",
        "nord3" => "15deg",
        "sud" => "20deg",
        "sud1" => "22deg",
        "sud2" => "20deg",
        "sud3" => "25deg",
        "est" => "11deg",
        "est1" => "14deg",
        "est2" => "15deg",
        "est3" => "14deg",
        "ouest" => "12deg",
        "ouest1" => "13deg",
        "ouest2" => "14deg",
        "ouest3" => "15deg",
    ];
    $mardi = [
        "nord" => "11deg",
        "nord1" => "11deg",
        "nord2" => "14deg",
        "nord3" => "13deg",
        "sud" => "20deg",
        "sud1" => "23deg",
        "sud2" => "22deg",
        "sud3" => "22deg",
        "est" => "12deg",
        "est1" => "13deg",
        "est2" => "10deg",
        "est3" => "15deg",
        "ouest" => "14deg",
        "ouest1" => "13deg",
        "ouest2" => "14deg",
        "ouest3" => "14deg",
    ];
    $mercredi = [
        "nord" => "11deg",
        "nord1" => "15deg",
        "nord2" => "14deg",
        "nord3" => "16deg",
        "sud" => "18deg",
        "sud1" => "18deg",
        "sud2" => "19deg",
        "sud3" => "20deg",
        "est" => "17deg",
        "est1" => "16deg",
        "est2" => "16deg",
        "est3" => "18deg",
        "ouest" => "14deg",
        "ouest1" => "16deg",
        "ouest2" => "16deg",
        "ouest3" => "15deg",
    ];
    $jeudi = [
        "nord" => "18deg",
        "nord1" => "17deg",
        "nord2" => "17deg",
        "nord3" => "18deg",
        "sud" => "21deg",
        "sud1" => "22deg",
        "sud2" => "12deg",
        "sud3" => "23deg",
        "est" => "16deg",
        "est1" => "16deg",
        "est2" => "16deg",
        "est3" => "15deg",
        "ouest" => "17deg",
        "ouest1" => "19deg",
        "ouest2" => "20deg",
        "ouest3" => "18deg",
    ];
    $vendredi = [
        "nord" => "14deg",
        "nord1" => "14deg",
        "nord2" => "14deg",
        "nord3" => "15deg",
        "sud" => "19deg",
        "sud1" => "18deg",
        "sud2" => "18deg",
        "sud3" => "19deg",
        "est" => "10deg",
        "est1" => "12deg",
        "est2" => "10deg",
        "est3" => "15deg",
        "ouest" => "14deg",
        "ouest1" => "13deg",
        "ouest2" => "14deg",
        "ouest3" => "10deg",
    ];
    $samedi = [
        "nord" => "14deg",
        "nord1" => "12deg",
        "nord2" => "14deg",
        "nord3" => "14deg",
        "sud" => "18deg",
        "sud1" => "17deg",
        "sud2" => "17deg",
        "sud3" => "17deg",
        "est" => "10deg",
        "est1" => "12deg",
        "est2" => "10deg",
        "est3" => "15deg",
        "ouest" => "13deg",
        "ouest1" => "11deg",
        "ouest2" => "13deg",
        "ouest3" => "13deg",
    ];
    $dimanche = [
        "nord" => "12deg",
        "nord1" => "12deg",
        "nord2" => "12deg",
        "nord3" => "12deg",
        "sud" => "18deg",
        "sud1" => "18deg",
        "sud2" => "17deg",
        "sud3" => "17deg",
        "est" => "10deg",
        "est1" => "14deg",
        "est2" => "10deg",
        "est3" => "14deg",
        "ouest" => "14deg",
        "ouest1" => "14deg",
        "ouest2" => "14deg",
        "ouest3" => "15deg",
    ];
    echo '<img src="./img/carte.webp" alt="carte de la france">';

    if (isset($_GET['add'])) {


        echo '<p class =n1>' . $lundi['nord'] . '</p>' .  '<p class =n2>' . $lundi['nord1'] . '</p>' .  '<p class =n3>' . $lundi['nord2'] . '</p>' .
            '<p class =n4>' . $lundi['nord3'] . '</p>' .
            '<p class =s1>' . $lundi['sud'] . '</p>' .  '<p class =s2>' . $lundi['sud1'] . '</p>' .  '<p class =s3>' . $lundi['sud2'] . '</p>' .
            '<p class =s4>' . $lundi['sud3'] . '</p>' .  '<p class =e1>' . $lundi['est'] . '</p>' . '<p class =e2>' . $lundi['est1'] . '</p>' .
            '<p class =e3>' . $lundi['est2'] . '</p>' . '<p class =e4>' . $lundi['est3'] . '</p>' .
            '<p class =o1>' . $lundi['ouest'] . '</p>' . '<p class =o2>' . $lundi['ouest1'] . '</p>' . '<p class =o3>' . $lundi['ouest2'] . '</p>' .
            '<p class =o4>' . $lundi['ouest3'] . '</p>';
    } elseif (isset($_GET['add1'])) {


        echo '<p class =n1>' . $mardi['nord'] . '</p>' .  '<p class =n2>' . $mardi['nord1'] . '</p>' .  '<p class =n3>' . $mardi['nord2'] . '</p>' .
            '<p class =n4>' . $mardi['nord3'] . '</p>' .
            '<p class =s1>' . $mardi['sud'] . '</p>' .  '<p class =s2>' . $mardi['sud1'] . '</p>' .  '<p class =s3>' . $mardi['sud2'] . '</p>' .
            '<p class =s4>' . $mardi['sud3'] . '</p>' .  '<p class =e1>' . $mardi['est'] . '</p>' . '<p class =e2>' . $mardi['est1'] . '</p>' .
            '<p class =e3>' . $mardi['est2'] . '</p>' . '<p class =e4>' . $mardi['est3'] . '</p>' .
            '<p class =o1>' . $mardi['ouest'] . '</p>' . '<p class =o2>' . $mardi['ouest1'] . '</p>' . '<p class =o3>' . $mardi['ouest2'] . '</p>' .
            '<p class =o4>' . $mardi['ouest3'] . '</p>';
    } elseif (isset($_GET['add2'])) {


        echo '<p class =n1>' . $mercredi['nord'] . '</p>' .  '<p class =n2>' . $mercredi['nord1'] . '</p>' .  '<p class =n3>' . $mercredi['nord2'] . '</p>' .
            '<p class =n4>' . $mercredi['nord3'] . '</p>' .
            '<p class =s1>' . $mercredi['sud'] . '</p>' .  '<p class =s2>' . $mercredi['sud1'] . '</p>' .  '<p class =s3>' . $mercredi['sud2'] . '</p>' .
            '<p class =s4>' . $mercredi['sud3'] . '</p>' .  '<p class =e1>' . $mercredi['est'] . '</p>' . '<p class =e2>' . $mercredi['est1'] . '</p>' .
            '<p class =e3>' . $mercredi['est2'] . '</p>' . '<p class =e4>' . $mercredi['est3'] . '</p>' .
            '<p class =o1>' . $mercredi['ouest'] . '</p>' . '<p class =o2>' . $mercredi['ouest1'] . '</p>' . '<p class =o3>' . $mercredi['ouest2'] . '</p>' .
            '<p class =o4>' . $mercredi['ouest3'] . '</p>';
    } elseif (isset($_GET['add3'])) {



        echo '<p class =n1>' . $jeudi['nord'] . '</p>' .  '<p class =n2>' . $jeudi['nord1'] . '</p>' .  '<p class =n3>' . $jeudi['nord2'] . '</p>' .
            '<p class =n4>' . $jeudi['nord3'] . '</p>' .
            '<p class =s1>' . $jeudi['sud'] . '</p>' .  '<p class =s2>' . $jeudi['sud1'] . '</p>' .  '<p class =s3>' . $jeudi['sud2'] . '</p>' .
            '<p class =s4>' . $jeudi['sud3'] . '</p>' .  '<p class =e1>' . $jeudi['est'] . '</p>' . '<p class =e2>' . $jeudi['est1'] . '</p>' .
            '<p class =e3>' . $jeudi['est2'] . '</p>' . '<p class =e4>' . $jeudi['est3'] . '</p>' .
            '<p class =o1>' . $jeudi['ouest'] . '</p>' . '<p class =o2>' . $jeudi['ouest1'] . '</p>' . '<p class =o3>' . $jeudi['ouest2'] . '</p>' .
            '<p class =o4>' . $jeudi['ouest3'] . '</p>';
    } elseif (isset($_GET['add4'])) {


        echo '<p class =n1>' . $vendredi['nord'] . '</p>' .  '<p class =n2>' . $vendredi['nord1'] . '</p>' .  '<p class =n3>' . $vendredi['nord2'] . '</p>' .
            '<p class =n4>' . $vendredi['nord3'] . '</p>' .
            '<p class =s1>' . $vendredi['sud'] . '</p>' .  '<p class =s2>' . $vendredi['sud1'] . '</p>' .  '<p class =s3>' . $vendredi['sud2'] . '</p>' .
            '<p class =s4>' . $vendredi['sud3'] . '</p>' .  '<p class =e1>' . $vendredi['est'] . '</p>' . '<p class =e2>' . $vendredi['est1'] . '</p>' .
            '<p class =e3>' . $vendredi['est2'] . '</p>' . '<p class =e4>' . $vendredi['est3'] . '</p>' .
            '<p class =o1>' . $vendredi['ouest'] . '</p>' . '<p class =o2>' . $vendredi['ouest1'] . '</p>' . '<p class =o3>' . $vendredi['ouest2'] . '</p>' .
            '<p class =o4>' . $vendredi['ouest3'] . '</p>';
    } elseif (isset($_GET['add5'])) {


        echo '<p class =n1>' . $samedi['nord'] . '</p>' .  '<p class =n2>' . $samedi['nord1'] . '</p>' .  '<p class =n3>' . $samedi['nord2'] . '</p>' .
            '<p class =n4>' . $samedi['nord3'] . '</p>' .
            '<p class =s1>' . $samedi['sud'] . '</p>' .  '<p class =s2>' . $samedi['sud1'] . '</p>' .  '<p class =s3>' . $samedi['sud2'] . '</p>' .
            '<p class =s4>' . $samedi['sud3'] . '</p>' .  '<p class =e1>' . $samedi['est'] . '</p>' . '<p class =e2>' . $samedi['est1'] . '</p>' .
            '<p class =e3>' . $samedi['est2'] . '</p>' . '<p class =e4>' . $samedi['est3'] . '</p>' .
            '<p class =o1>' . $samedi['ouest'] . '</p>' . '<p class =o2>' . $samedi['ouest1'] . '</p>' . '<p class =o3>' . $samedi['ouest2'] . '</p>' .
            '<p class =o4>' . $samedi['ouest3'] . '</p>';
    } elseif (isset($_GET['add6'])) {


        echo '<p class =n1>' . $dimanche['nord'] . '</p>' .  '<p class =n2>' . $dimanche['nord1'] . '</p>' .  '<p class =n3>' . $dimanche['nord2'] . '</p>' .
            '<p class =n4>' . $dimanche['nord3'] . '</p>' .
            '<p class =s1>' . $dimanche['sud'] . '</p>' .  '<p class =s2>' . $dimanche['sud1'] . '</p>' .  '<p class =s3>' . $dimanche['sud2'] . '</p>' .
            '<p class =s4>' . $dimanche['sud3'] . '</p>' .  '<p class =e1>' . $dimanche['est'] . '</p>' . '<p class =e2>' . $dimanche['est1'] . '</p>' .
            '<p class =e3>' . $dimanche['est2'] . '</p>' . '<p class =e4>' . $dimanche['est3'] . '</p>' .
            '<p class =o1>' . $dimanche['ouest'] . '</p>' . '<p class =o2>' . $dimanche['ouest1'] . '</p>' . '<p class =o3>' . $dimanche['ouest2'] . '</p>' .
            '<p class =o4>' . $dimanche['ouest3'] . '</p>';
    }


    



    include('./include/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>