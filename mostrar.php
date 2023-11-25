<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Formulario de Libro</h1>
<form action="Validar.php" method="POST">

  

    <label for="Nombre">Nombre:</label>
    <input type="Nombre" id="Nombre" name="Nombre" required><br><br>

    <label for="Autor">Autor:</label>
    <input type="Autor" id= "Autor" name= "Autor"required><br><br>

    <label for="Precio">Precio:</label>
    <input type="Precio" id= "Precio" name= "Precio"required><br><br>

    <select class="form-select" name="Disponible">
    <option selected>Disponible</option>
    <option value="1">  disponible</option>
    <option value="2"> no disponible</option>
</select><br><br>

    
    <input type="submit" value="Enviar">
    <button><a href="Mostrar.php">Mostrar datos</a></button>


   
  
    
</form>
</body>
</html>

