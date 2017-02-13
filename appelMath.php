<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" name="volume" action="Math.class.php">
            <input type="text" name="nFigure" placeholder="Figure">
            <input type="number" name="rFigure" placeholder="Rayon">
            <input type="number" name="hFigure" placeholder="Hauteur">
        </form>
        <br>
        <?php
        
        require_once 'Math.class.php';

        $objMaths = new Math();
        $objMaths1 = new Math();
        $objMaths2 = new Math();



        echo $objMaths->calCirCerc(18);
        echo '<br>';
        echo $objMaths1->calVol("cylindre", 5, 10);
        echo '<br>';
        echo $objMaths2->calVol("cone", 5, 10);
        ?>
    </body>
</html>