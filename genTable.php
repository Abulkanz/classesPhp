<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        require_once 'include/infoConnexion.php';
        require_once 'include/modele.php';
        require_once 'Table.class.php';

        $tablo = new Table;
        $tablo->iTabl();
        $cnx = getBD();

        $sql = "DESCRIBE auteur";
        $idReq = executeR($cnx, $sql);

        while ($row = $idReq->fetch(PDO::FETCH_NUM)) {
            $i = 0;
            $col = $tablo->tHead($row[$i]);
            echo $col;
            $i++;
        }

        $tablo->iRow();

        $row2 = array();
        $sql2 = "SELECT * FROM auteur";
        $idReq2 = executeR($cnx, $sql2);
        $i = 0;
        while ($row2 = $idReq2->fetch()) {
            if ($i == 4) {
                $i = 0;
                echo '</tr><tr>';
            } else {
                $col2 = $tablo->tContent($row2[$i]);
                echo $col2;
                $i++;
            }
        }

        $tablo->endRow();
        ?>
    </body>
</html>

