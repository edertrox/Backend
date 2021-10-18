<?php
include_once 'connection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SPRINT 0</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>


<body>
    <div class="header">
        <a href="index.php" class="logo"><img id="imgLogo" src="img/logoGTI.svg" alt="logo"></a>
    </div>

    <h2>MEDICIONES</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Valor</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $sql = "SELECT * FROM mediciones;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
    
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['valor']; ?></td>
                    <td><?php echo $row['latitud']; ?></td>
                    <td><?php echo $row['longitud']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                </tr>

                <?php
            }     
        }
        ?>
            <tbody>
                <tr>
                    <a href="index.php"><i class="fas fa-sync-alt"></i></a>
                </tr>
        </table>
    </div>



    <form action="post-mediciones.php" method="post">
        <div class="form">
            <div class="title">Nueva medicion</div>
            <div class="subtitle">Solo para pruebas</div>
            <div class="input-container ic1">
                <input type="text" class="input" id="valor" name="valor" placeholder=" ">
                <div class="cut cut-short"></div>
                <label for="valor" class="placeholder">Valor </label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="latitud" name="latitud" placeholder=" ">
                <div class="cut"></div>
                <label for="latitud" class="placeholder">Latitud </label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="longitud" name="longitud" placeholder=" ">
                <div class="cut"></div>
                <label for="longitud" class="placeholder">Longitud</label>
            </div>
            <div class="input-container ic2">
                <input type="date" class="input" id="fecha" name="fecha" placeholder=" ">
                <div class="cut cut-short"></div>
                <label for="fecha" class="placeholder">Fecha</label>
            </div>
            <button type="text" class="submit">ENVIAR</button>
        </div>
    </form>


</body>

</html>
