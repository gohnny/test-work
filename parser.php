<?php
$row = 0;
if (($fp = fopen("salesdata.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($fp, 1000, ',')) !== FALSE && $row < 6) {
        $row++;
        $list[] = $data;
    }
    fclose($fp);
    $coltitle = array_shift($list);
}
else {
    echo'Файл не найден';
}

    echo "<thead class='thead-dark'><tr>";
             foreach ($coltitle as $key => $value) {
                         echo "<th scope='col'>$value</th>";
             }
    echo '</tr></thead>';

    echo '<tbody>';
        foreach ($list as $row=>$data){
            echo '<tr>';
                foreach ($data as $datum){
                         echo "<td>$datum</td>";
                }
            echo '</tr>';
        }
    echo '</tbody>';

