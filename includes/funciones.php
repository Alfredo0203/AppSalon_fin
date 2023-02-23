<?php

function getServices() : array {

    try {
        // Import the connection
        require 'database.php';
        // Create mysql consult
        $sql = "SELECT * FROM servicios;";
       
        $consult = mysqli_query($db, $sql);

        // Get results 

        // empty array
        $services = [];

        $i = 0;

        // while($row = mysqli_fetch_assoc($consult)) {
        //     echo '<pre>';
        // var_dump($row);
        // echo '</pre>';
        // json_encode($services);
        // }

        while($row = mysqli_fetch_assoc($consult)) {
            $services[$i]['Id'] = $row['idServicio'];
            $services[$i]['Nombre'] = $row['Nombre'];
            $services[$i]['Precio'] = $row['Precio'];

            $i++;
        }

        //      echo '<pre>';
        //  var_dump($services);
        //  echo '</pre>';

        return $services;


    } catch (\Throwable $th) {
        var_dump($th);
    }
}

getServices();