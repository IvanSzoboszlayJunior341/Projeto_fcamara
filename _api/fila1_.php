<?php
    require __DIR__ . "/../vendor/autoload.php";
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->readFila1();
    $cont = 0;
    foreach($filaDao->readFila1() as $filas):
                        
    $cont = $cont + 1; 
    endforeach;
?>
<H1><span class=""><?php echo $cont; ?></span></H1>