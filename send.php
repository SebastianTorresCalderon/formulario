<?php

include("conexion.php"); //verificar envío

if(isset($_POST['send'])){ //verifica si es que se envió el formulario
    if(
        strlen($_POST['name'])>=1 &&
        strlen($_POST['birthday'])>=1 &&
        strlen($_POST['ocupation'])>=1 &&
        strlen($_POST['contact_phone'])>=1 &&
        strlen($_POST['contact_email'])>=1 &&  //verificar que todos los campos sean llenados
        strlen($_POST['nationality'])>=1 &&
        strlen($_POST['english_level'])>=1 &&
        isset($_POST['interests']) &&
        isset($_POST['aptitude']) &&
        isset($_POST['hability']) &&
        strlen($_POST['profile'])>=1 
    ) {
        $name = trim($_POST['name']);
        $birthdate = trim($_POST['birthday']);
        $ocupation = trim($_POST['ocupation']);
        $contact_phone = trim($_POST['contact_phone']); //asignación a las variables
        $contact_email = trim($_POST['contact_email']);
        $nationality = trim($_POST['nationality']);
        $english_level = trim($_POST['english_level']);
        $interests = implode(", ", $_POST['interests']); 
        $aptitude = trim($_POST['aptitude']);
        $hability = trim($_POST['hability']);
        $profile = trim($_POST['profile']);                                                        //envío a mysql
        $consulta = "INSERT INTO datos(nombre, fecha_de_nacimiento, ocupacion, telefono, email, nacionalidad, nivel_ingles, intereses, aptitud, habilidad, perfil)
                        VALUES('$name', '$birthdate', '$ocupation', '$contact_phone', '$contact_email', '$nationality', '$english_level', '$interests', '$aptitude','$hability', '$profile')";

        $resultado = mysqli_query($conex, $consulta);
        if($resultado){ 
            ?>
            <h3 class="success">La información fue enviada</h3>
            <?php
        }else{
            ?>
            <h3 class="error">Ocurrió un error</h3>
            <?php
        }
    }
    else { ?>
        <h3 class="error">Llene todos los campos</h3>
    <?php }
}
?>
