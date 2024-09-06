<?php
// Caso que mostrará un error cuando la división sea entre 0
if(empty($_REQUEST["num1"]) && empty($_REQUEST["num2"])){
    try {

    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    echo "Número 1 = ".$num1."<br>Número 2 = ".$num2."<br><br>";
    echo "La suma de $num1 + $num2 = ".($num1 + $num2)."<br>";
    echo "La resta de $num1 - $num2 = ".($num1 - $num2)."<br>";
    echo "La multiplicación de $num1 * $num2 = ".($num1 * $num2)."<br>";
    echo "La división de $num1 ÷ $num2 = ".($num1 / $num2)."<br>";

    }catch (DivisionByZeroError $e){
        echo "<br>Ha ocurrido un error";
        echo $e->getMessage(); //Muestra el mensaje por defecto que tiene el error capturado
    }catch(TypeError $e){
        echo "<br>Ha ocurrido un error";
        echo "<br>".$e->getMessage();
    }catch (Throwable $e){
        echo "<br>Ha ocurrido un error";
        echo "<br>".$e->getMessage();
    }
}else{
    header("Location: index.php");
}