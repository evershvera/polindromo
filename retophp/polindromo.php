<?php



if (isset($_POST['letras'])){


    $letras = $_POST['letras'];

    


    
    $letras = str_replace(" ", "", $letras);
   

    $letras = strtolower($letras);
    

    $alreves = strrev($letras);
   

    if($alreves==$letras)
    {
        header("location: correcto.php");
    }

    else{
        header("location: error.php");
    }



}

?>