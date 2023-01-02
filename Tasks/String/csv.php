<?php

/**
 * display the sales.csv file in an html table
 * using the method fgetcsv
 */

?>
<!DOCTYPE html>
<html>

<head>
    <title>+test</title>
    <style>
    table,
    th,
    td {
        border: 1px solid;
    }
    </style>

</head>

<body>
    <?php
    if (($file = fopen("sales.csv", "r")) !== false) {
        $str = '';
        $str .= '<table>';
        while (($resuletData = fgetcsv($file, 1024, ",")) !== false) {
            $str .= '<tr>';
            foreach ($resuletData as $key => $value) {
                $str .= "<td>$value</td>";
            }
            $str .= '</tr>';
        }
        fclose($file);
        $str .= '</table>';
        echo $str;
    }
    ?>
</body>

</html>

<!-- &$value -->