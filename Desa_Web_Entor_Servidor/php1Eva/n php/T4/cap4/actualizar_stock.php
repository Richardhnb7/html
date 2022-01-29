<?php
require_once 'bd.php';
require_once 'sesiones.php';
require_once 'act.php';
comprobar_sesion();

$bd=conexion();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    if ($_POST['cod_pro'] !=0){
        if (!isset($_SESSION['in'])) {
            $i=0;
            $cod_pro=$_POST['cod_pro'];
            $stock=$_POST['stock'];
            $cod_cat=$_POST['cod_cat'];
            
            $act=new Actualiza($cod_pro,$stock,$cod_cat);
        
            $_SESSION['act'.$i]=$act;
            $_SESSION['in']=$i; 
  
        
        }else{
            $i=$_SESSION['in'];

            $cod_pro=$_POST['cod_pro'];
            $stock=$_POST['stock'];
            $cod_cat=$_POST['cod_cat'];
            
            $act=new Actualiza($cod_pro,$stock,$cod_cat);
            $i++;
            $_SESSION['act'.$i]=$act;
            
            $_SESSION['in']=$i;
        
        }
    
    } else{
    header("Location: actualizados.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
</head>
<body>
        <?php
        require 'cabecera.php';
        
        ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="cod_pro">Codigo de el producto</label>
    <input type="number" value="<?php if(isset($cod_pro))echo $cod_pro;?>">
    <label for="">Stock</label>
    <input type="number" value="<?php if(isset($stock))echo $stock;?>">
    <label for="">Codigo de la categoria</label>
    <input type="number" value="<?php if(isset($cod_cat))echo $cod_cat;?>">
    <input type="submit">
    <a href="actualizados.php">Actualizar</a>
</form>
</body>
</html>