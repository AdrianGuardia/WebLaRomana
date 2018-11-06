<?php 
session_start();

$db=new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM opiniones INNER JOIN clientes ON clientes.idcl = opiniones.cliente ORDER BY idOp DESC");

$opiniones= $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Romana|Opiniones</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include("partes/cabecera.php")?>
    <div id="conto">
        <h1 id="lg3">Opiniones de nuestros Usuarios</h1>
        <form action="procesarop.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_SESSION["idus"] ?>">
                    <button type="submit">Da tu Opinion</button>

        <?php foreach($opiniones as $p){?>
            <h3><?php echo $p["Nombre"]?></h3>
            <p><?php echo $p["Cont"]?></p>

        <?php } ?>
    </div>
</body>
</html>