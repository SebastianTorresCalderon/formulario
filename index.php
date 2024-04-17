<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <form method="post" autocomplete="off">
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombres y apellidos">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="date" name="birthday">
                <i class="fa-solid fa-calendar"></i>
            </div>

            <div class="input-container">
                <input type="text" name="ocupation" placeholder="Su ocupación">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="tel" name="contact_phone" placeholder="Número de teléfono">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-container">
                <input type="email" name="contact_email" placeholder="Email">
                <i class="fa-solid fa-envelope"></i>
            </div>
  
            <div class="input-container">
                <label for="nationality"style="color: white;">Su nacionalidad:</label>
                <select name="nationality">
                    <option value="Peru">Perú</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Chile">Chile</option>
                    
                </select>
            </div>
            
            <div class="input-container">
                <label for="english_level"style="color: white;">Nivel de inglés:</label>
                <select name="english_level" id="english_level">
                    <option value="Basico">Básico</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Avanzado">Avanzado</option>
                    <option value="Fluido">Fluido</option>
                </select>
            </div>

            
            <div class="input-container">
                <label for="interests[]"style="color: white;">Lenguajes de programación:</label>
                <select name="interests[]" multiple>
                    <option value="javascript">C++</option>
                    <option value="python">Python</option>
                    <option value="java">Java</option>
                    <option value="php">PHP</option>
                   
                </select>
            </div>
           
            <div class="input-container">
                <input list="aptitudes" name="aptitude" placeholder="Seleccione una aptitud">
                <datalist id="aptitudes">
                    <option value="Comunicación">
                    <option value="Trabajo en equipo">
                    <option value="Resolución de problemas">
                    <option value="Creatividad">
                   
                </datalist>
            </div>
            <div class="input-container">
                <textarea name="profile" placeholder="Perfil">Rellene con su perfil</textarea>
            </div>

            <input name="send" type="submit" class="btn" value="Enviar">
        </div>
    </form>

    <?php

    include("send.php");
    ?>
    
</body>
</html>
