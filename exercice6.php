<?php include("header.php"); ?>

    <h2>Exercice 6</h2>

    <?php
        $hexa = array('00', '11', '22', '33', '44', '55', '66', '77', '88', '99', 'AA', 'BB', 'CC', 'DD', 'EE', 'FF');

        for($i = 0; $i < 16; $i++){ //R
            echo('<table><tbody>');
            for($j = 0; $j < 16; $j++){ //G
                echo('<tr>');
                for($k = 0; $k < 16; $k++){ //B
                    echo('<td><table><tbody>');
                    echo('<tr><td><div style="display: block; width: 60px; height: 20px; margin-right: 4px; background-color: #' . $hexa[$k] . $hexa[$j] . $hexa[$i] . ';"></div></td></tr>');
                    echo('<tr><td>' . $hexa[$k] . $hexa[$j] . $hexa[$i] . '</td></tr>');
                    echo('</tbody></table></td>');
                }
                echo('</tr>');
            }
            echo('</tbody></table><br>');
        }
    
    ?>

<?php include("footer.php"); ?>