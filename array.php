<?php
    // $array = array("car 1", "car 2", "car 3");
    // echo $array[2];

    // $age = array("Adi"=>"20","NavenPatel"=>"21", "Udit"=>"19");
    // $age['Rana'] = "14";
    // echo $age['Rana'];

    //Multidimentional Arrays

    $profiles= array(array("Adi","20",array("trainer","Developer")),array("Udit","19","Stud"));
    echo $profiles[0][2][1];
?>