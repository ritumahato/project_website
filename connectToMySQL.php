<?php

    $server = 'sql106.ultimatefreehost.in';
    $user = 'ltm_25827605';
    $password = 'Ritu@743112';
    $db = 'ltm_25827605_data';

    $con = mysqli_connect($server,$user,$password,$db);

    

    if($con)
    {
        ?>

        <script>

            alert("sended succesfull...");
        </script>
        <?php
    }
    else
    {
        ?>

        <script>

            alert("No Connection. Try again later..");
        </script>
        <?php
    }

?>