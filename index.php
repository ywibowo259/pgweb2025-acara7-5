<html>
<body>
<table border="1">
    <tr>
    <th>Nomor</th>    
    <th>Kecamatan</th>
    </tr>    
<?php
    $arr=array("Gamping", "Godean", "Moyudan", "Minggir", "Seyegan", "Mlati", "Depok", "Berbah", "Prambanan", "Kalasan", "Ngemplak", "Ngaglik", "Sleman", "Tempel", "Turi", "Pakem", "Cangkringan");
    $urutan= 1;
    foreach ($arr as $angka)
    {
        echo "<tr><td>$urutan</td><td>$angka</td></tr>";
        $urutan= $urutan + 1;
    }
    ?>
</body>
</html>
