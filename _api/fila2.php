<?php
    require __DIR__ . "/../vendor/autoload.php";
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->readFila2();
    $cont = 0;
    foreach($filaDao->readFila2() as $filas):
                        
    $cont = $cont + 1; 
    endforeach;
?>
<span class="quantidade-pessoas-fila"><?php echo $cont; ?></span>
<span style="font-size: 10px">JOGADORES NA FILA</span>