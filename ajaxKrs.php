<?php
    require "fungsi.php";
    $id = $_POST['id'];
    $homebase = explode(".", $id)[0];
    $rs = search("dosen", "homebase='$homebase'", 0, "$homebase");
    ?>
    <option value='' disabled selected>Pilih Dosen</option>
    <?php 
    while($row = mysqli_fetch_assoc($rs)) {
    ?>
        <option value=<?= $row["npp"]; ?>><?= $row["namadosen"] ?></option>
    <?php } ?>
