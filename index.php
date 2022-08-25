<?php
    include('action_equation.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="dist/aos.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" class="form-control mb-5 py-2" placeholder="ax²" name="a_valeur" value="" autocomplete="off" required><br>
            <input type="text" class="form-control mb-5 py-2" placeholder="bx" name="b_valeur" value="" autocomplete="off" required><br>
            <input type="text" class="form-control mb-5 py-2" placeholder="c" name="c_valeur" value="" autocomplete="off" required><br>
            <?php if (isset($alert_incre)) {
                echo '<p class="text-danger">'.$alert_incre.'</p>';
                }
            ?>
            <?php if (isset($alert_msg)) {
                echo '<p class="text-danger">'.$alert_msg.'</p>';
                }
            ?>
            <?php if (isset($alert_regle)) {
                echo '<p class="text-danger">'.$alert_regle.'</p>';
                }
            ?>
            <?php if (isset($alert_x1)) {
                    echo '<p class="text-danger">'.$alert_x1.'</p>';
                }
            ?>
            <?php if (isset($alert_resultat_1)) {
                    echo '<p class="text-danger">'.$alert_resultat_1.'</p>';
                }
            ?>
            <?php if (isset($alert_x2)) {
                    echo '<p class="text-danger">' .$alert_x2. '</p>';
                }
            ?>
            <?php if (isset($alert_resultat_2)) {
                    echo '<p class="text-danger">'.$alert_resultat_2.'</p>';
                }
            ?>
            <button type="submit" name="submit" class="form-control btn btn-primary">Calculer</button>
        </form>
    </div>
</body>
</html>