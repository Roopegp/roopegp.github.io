<?php 
    $hinta = $_POST['hinta'];
    $veroKanta = $_POST['vero'];
    echo "hinta:" .$hinta ."<br> Vero:". $veroKanta . "<br>". "Final result ". $hinta + ($hinta *($veroKanta / 100));
?>