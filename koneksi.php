<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'toor',"akademik");
    
    // production
    $kon = mysqli_connect("localhost", "id8008057_fajar",'fajar',"id8008057_akademik");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>