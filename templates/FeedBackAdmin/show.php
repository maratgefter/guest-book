<table border=1>
<?php 


foreach ($data as $id => $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "<td><a href='$delURL&id=$id'>$id</a></td></tr>";
}

?>
</table>
