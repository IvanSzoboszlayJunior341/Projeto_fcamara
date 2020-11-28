<?php
session_start();

if(isset($_SESSION['fila_11'])){

    if($_SESSION['fila_11'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_11'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_11'] = null;
    }

}elseif(isset($_SESSION['fila_21'])){
    
    if($_SESSION['fila_21'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_21'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_21'] = null;
    }

}elseif(isset($_SESSION['fila_31'])){

    if($_SESSION['fila_31'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_31'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_31'] = null;
    }

}elseif(isset($_SESSION['fila_41'])){

    if($_SESSION['fila_41'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_41'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_41'] = null;
    }

}else{
    $fila11 = 0;
}






  if(isset($_SESSION['idusuario']))	//verifica se sessao foi setada
  {

  }else{															

      header("location:index.php"); //se nao foi então manda para index.html
  } 
require __DIR__ . "/vendor/autoload.php";
$user = new \_api\Classes\Usuario();
$user->setId($_SESSION['idusuario']);
$usuarioDao = new \_api\Classes\UsuarioDao();

$usuarioDao->read($user);
foreach($usuarioDao->read($user) as $usuario):
    $foto = $usuario['Foto'];
    $nome = $usuario['Nome'];
    $email = $usuario['Email']; 
    $senha = $usuario['Senha'];
endforeach;

$filaDao = new \_api\Classes\FilaDao();
$fila_1 = new \_api\Classes\Fila();
$fila_1->setEquipamento(1);
$fila_1->setUsuario($_SESSION['idusuario']);
$filaDao->read_dentro($fila_1);
if($filaDao->read_dentro($fila_1) == True)
{
    $fila1 = True;
}
else
{
    $fila1 = false;
}

$fila_2 = new \_api\Classes\Fila();
$fila_2->setEquipamento(2);
$fila_2->setUsuario($_SESSION['idusuario']);
$filaDao->read_dentro($fila_2);
if($filaDao->read_dentro($fila_2) == True)
{
    $fila2 = True;
}
else
{
    $fila2 = false;
}

$fila_3 = new \_api\Classes\Fila();
$fila_3->setEquipamento(3);
$fila_3->setUsuario($_SESSION['idusuario']);
$filaDao->read_dentro($fila_3);
if($filaDao->read_dentro($fila_3) == True)
{
    $fila3 = True;
}
else
{
    $fila3 = false;
}

$fila_4 = new \_api\Classes\Fila();
$fila_4->setEquipamento(4);
$fila_4->setUsuario($_SESSION['idusuario']);
$filaDao->read_dentro($fila_4);
if($filaDao->read_dentro($fila_4) == True)
{
    $fila4 = True;
}
else
{
    $fila4 = false;
}





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FIFO - Fcamara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <?php if(isset($_GET['idPerfil'])){ $idclicado = $_GET['idPerfil'];}?>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-dark default-color ">
            <div class="heander_nav_img">
                <a href="index_fila.php">
                    <div class="logo">
                        <img src="img/LOGO_COMPLETA.png" alt="FIFO Logo">
                    </div>
                </a>
            </div>    

            <form class="form-inline my-2 my-lg-0 ml-auto menu_form">
                <!--<a href="calendario.php" class="button" >Board Games</a>-->
                <a href="" class="button" data-toggle="modal" data-target="#modal_editar_perfil">EDITAR PERFIL </a>
                <a href="" class="button" data-toggle="modal" data-target="#modal_sair">SAIR</a>
            </form>

        </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="textoH2">
                            <H2>OLÁ, <?php echo $nome ?>. <br>SEJA BEM VINDO!</H2>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="header_img_usuario" >
                            <img src="img/<?php echo $foto ?>" alt="..." >
                        </div>
                    </div>
                </div>
            </div>
    <div class="container">
        <div class="col-md-12">
            <div class="texto_fila">
                <H4 align="left" class="cor_prin_02_texto">ENTRE NA FILA E COMECE A JOGAR!</H2>
                <p align="left">A FCÂMARA OFERECE UMA VARIEDADE DE JOGOS PARA AJUDAR NA ROTINA <br>
                                DE TRABALHO. ESCOLHA UMA FILA, ACOMPANHE-A EM TEMPO REAL, SAIBA <br>
                                QUANDO CHEGAR SUA VEZ, E <span class="cor_prin_02_texto">DESESTREESSA!</span></p>
            </div>
        </div>
    </div>


    <section class="featured-places" id="blog">

        <div class="container-fluid">
            <div class="row">
                <div class="espaco_card">
                    <div class="card mb-3 " >
                        <div class="row no-gutters">
                            
                            <div class="col-md-4 ">
                                <img src="img/fila/fila_videogame.jpg" class="card_img" alt="...">
                            </div>
                        
                            <div class="col-md-8">
                                <div class="card-body">
                                    <H4 class="card_titulo">VIDEOGAME 01</H4>
                                    <h6 class="card_subtitulo">sala de descompressão</h6>

                                    <div class="card_numero_fila">
                                        <div id="fila1">

                                        </div>
                                        <div class="card_conteudo_fila">
                                        <span>PESSOAS</span>  <br>      
                                        <span >NA FILA</span><br>
                                        </div>
                                    </div>


                                <?php if($fila1 == false || $fila1 == null){?>
                                    <div class="card_button">    
                                        <button class="btn button_fila" data-toggle="modal" data-target="#modal_entrar_fila1">ENTRAR NA FILA</button>
                                    </div>

                                    <div class="card_detalhe_icone">
                                        <a href="#pessoalfila1" data-toggle="modal" data-target="#pessoalfila1">
                                            <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                            
                                            <div class="card_detalhe_texto">
                                                <span>Ver mais detalhes</span>  <br>      
                                            
                                            </div>
                                        </a>
                                    </div>

                                <?php }else{ ?>

                                    <div class="card_button">   
                                        <button class="btn button_fila" data-toggle="modal" data-target="#modal_sair_fila1">SAIR DA FILA</button>
                                    </div>

                                    <div class="card_detalhe_icone">
                                        <a href="#pessoalfiladentro1" data-toggle="modal" data-target="#pessoalfiladentro1">
                                            <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                            
                                            <div class="card_detalhe_texto">
                                                <span>Ver mais detalhes</span>  <br>      
                                            
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>    


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaco_card">
                    <div class="card mb-3 " >
                        <div class="row no-gutters">
                            
                            <div class="col-md-4 ">
                                <img src="img/fila/fila_videogame1.jpg" class="card_img" alt="...">
                            </div>
                        
                            <div class="col-md-8">
                                <div class="card-body">
                                    <H4 class="card_titulo">VIDEOGAME 02</H4>
                                    <h6 class="card_subtitulo">escritório</h6>

                                    <div class="card_numero_fila" >
                                        <H1 id="fila2"></H1>
                                        <div class="card_conteudo_fila" >
                                            <span>PESSOAS</span>  <br>      
                                            <span >NA FILA</span><br>
                                        </div>
                                    </div>

                                    <div class="card_button">
                                        <?php 
                                            if($fila2 == false || $fila2 == null){?>    
                                                <button class="btn button_fila" data-toggle="modal" data-target="#modal_entrar_fila2">ENTRAR NA FILA</button>
                                            <?php
                                            }else{
                                            ?>
                                                <button class="btn button_fila" data-toggle="modal" data-target="#modal_sair_fila2">SAIR DA FILA</button>   
                                        <?php } ?>
                                    </div>

                                    <div class="card_detalhe_icone">
                                        <a href="#pessoalfiladentro2" data-toggle="modal" data-target="#pessoalfiladentro2">
                                            <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                            
                                            <div class="card_detalhe_texto">
                                                <span>Ver mais detalhes</span>  <br>      
                                            
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="espaco_card">
                    <div class="card mb-3 " >
                        <div class="row no-gutters">
                            
                            <div class="col-md-4 ">
                                <img src="img/fila/fliperama7.jpg" class="card_img" alt="...">
                            </div>
                        
                            <div class="col-md-8">
                                <div class="card-body">
                                    <H4 class="card_titulo">FLIPERAMA</H4>
                                    <h6 class="card_subtitulo">'</h6>

                                    <div class="card_numero_fila">
                                        <div id="fila3">
                                            
                                        </div>
                                        <div class="card_conteudo_fila">
                                        <span>PESSOAS</span>  <br>      
                                        <span >NA FILA</span><br>
                                        </div>
                                    </div>

                                    <div class="card_button">
                                        <?php 
                                            if($fila3 == false || $fila3 == null){?>    
                                                <button class="btn button_fila" data-toggle="modal" data-target="#modal_entrar_fila3">ENTRAR NA FILA</button>
                                            <?php
                                            }else{
                                            ?>
                                                <button class="btn button_fila" data-toggle="modal" data-target="#modal_sair_fila3">SAIR DA FILA</button>   
                                        <?php } ?>
                                    </div>

                                    <div class="card_detalhe_icone">
                                        <a href="#pessoalfila3" data-toggle="modal" data-target="#pessoalfila3">
                                            <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                            
                                            <div class="card_detalhe_texto">
                                                <span>Ver mais detalhes</span>  <br>      
                                            
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="espaco_card">
                    <div class="card mb-3 " >
                        <div class="row no-gutters">
                            
                            <div class="col-md-4 ">
                                <img src="img/fila/sinu.png" class="card_img" alt="...">
                            </div>
                        
                            <div class="col-md-8">
                                <div class="card-body">
                                    <H4 class="card_titulo">MESA DE JOGOS</H4>
                                    <h6 class="card_subtitulo">sinuca | ping pong</h6>

                                    <div class="card_numero_fila">
                                        <div  id="fila4">
                                            
                                        </div>
                                        <div class="card_conteudo_fila">
                                        <span>PESSOAS</span>  <br>      
                                        <span >NA FILA</span><br>
                                        </div>
                                    </div>

                                    <div class="card_button">
                                        <?php 
                                            if($fila4 == false || $fila4 == null){?>    
                                                <button class="btn button_fila" data-toggle="modal" data-target="#modal_entrar_fila4">ENTRAR NA FILA</button>
                                            <?php
                                            }else{
                                            ?>
                                                <button class="btn button_fila" data-toggle="modal" data-target="#modal_sair_fila4">SAIR DA FILA</button>   
                                        <?php } ?>
                                    </div>

                                    <div class="card_detalhe_icone">
                                        <a href="#pessoalfila4" data-toggle="modal" data-target="#pessoalfila4">
                                            <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                            
                                            <div class="card_detalhe_texto">
                                                <span>Ver mais detalhes</span>  <br>      
                                            
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-6">  
                        <div class="logo footer_img">
                            <img src="img/LOGO_FIFO_1.png" alt="FIFO Logo"><br>
                            <img src="img/LOGO_FCAMARA(1).png" alt="Logo FCAMARA">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="about-veno footer_icone">
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.instagram.com/grupo.fcamara/" target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#instagram" />
                                        </svg>
                                    </a>
                                    <a href="https://pt-br.facebook.com/grupofcamara/" target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#facebook" />
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/company/fcamara-consulting-&-training/"
                                        target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#linkedin" />
                                        </svg>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCHsQ04xha1YKv48dSzQFlpw" target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#youtube" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <p><h6 class="footer_texto">&copy; 2020 FCamara Formação e Consultoria.<br>
                            Todos os direitos reservados<h6></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!--MODAL EDITAR PERFIL-->

    <div class="modal fade " id="modal_editar_perfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content cormodal">
                <form action="_api/atualiza_perfil.php" method="post" enctype="multipart/form-data">




                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">EDITAR PERFIL</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body mx-3">

                        <form method="post" action="_api/atualiza_perfil.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                        
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Nome</label>
                                    <input type="text" name="nome_perfil" class="form-control validate" placeholder="Nome" value="<?php echo $nome ; ?>">
                                
                                </div>
                                <!--
                                <div class="form-group col-md-12">
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Apelido</label>
                                    <input type="text" name="apelido_perfil" class="form-control validate" placeholder="Apelido" value="<?php echo $_SESSION['apelido']; ?>">
                                </div>-->

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">E-mail</label>
                                    <input type="email" name="email_perfil" class="form-control" placeholder="E-mail" value="<?php echo $email; ?>">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Senha</label>
                                    <input name="senha_perfil" type="password" class="form-control" placeholder="Senha" value="<?php echo $senha;?>">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Foto</label>
                                    <input type="file" name="arquivo" placeholder="Foto" >
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" required>
                           
                                    <label class="form-check-label" for="gridCheck">
                                        Concordo que esta mudança não terá volta
                                    </label>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn button_fila"type="submit" name="AtualizarPerfil" value="<?php echo $_SESSION['BuscarPerfil']['idusuario']?>" class="btn btn-primary">ATUALIZAR</button>
                                <!--<button type="submit" name="ExcluirPerfil" value="<?php echo $_SESSION['BuscarPerfil']['idusuario']?>" class="btn btn-danger">Excluir Conta</button>
                                -->
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--MODAL SAIR-->

    <div class="modal fade" id="modal_sair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_texto">Você tem certeza que deseja sair?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <label data-error="wrong" data-success="right" for="defaultForm-apelido">Você tera que entrar novamente na aplicação para fazer novas alteraçôes.</label>
                        
                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <button type="button" class="btn  button_fila modal_tamanho_botao" data-dismiss="modal">CANCELAR</button>
                        <a href="_api/sair.php"><button type="button" class="btn button_fila modal_tamanho_botao">SAIR</button></a>


                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!--Modal entrar fila-->

    <!--FILA1-->
    <div class="modal fade" id="modal_entrar_fila1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <div class="modal-content cormodal">
                <form action="_api/entrarfila.php" method="post">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">FILA VIDEOGAME 01</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4 numeros_modal">
                            <div id="filamodal1" >

                            </div>
                            <p>SUA POSIÇÃO SERÁ</p>
                        </div>
                        <div class="md-form mb-5">
                            <input name="equipamento" type="text" value="1" hidden>
                            <label for="inputState">QUAL JOGO VOCÊ VAI JOGAR? (OPCIONAL)</label>
                            <input name="jogo" type="text" class="form-control" placeholder="FIFA">
                        </div>
                        <div class="btnForm ">
                            <input type="submit" name="Enviar" class="button_fila">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--FILA2-->
    <div class="modal fade" id="modal_entrar_fila2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <div class="modal-content cormodal">
                <form action="_api/entrarfila.php" method="post">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">FILA VIDEOGAME 01</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4 numeros_modal">
                            <div id="filamodal2" >

                            </div>
                            <p>SUA POSIÇÃO SERÁ</p>
                        </div>
                        <div class="md-form mb-5">
                            <input name="equipamento" type="text" value="2" hidden>
                            <label for="inputState">QUAL JOGO VOCÊ VAI JOGAR? (OPCIONAL)</label>
                            <input name="jogo" type="text" class="form-control" placeholder="FIFA">
                        </div>
                        <div class="btnForm ">
                            <input type="submit" name="Enviar" class="button_fila">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--FILA3-->
    <div class="modal fade" id="modal_entrar_fila3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <div class="modal-content cormodal">
                <form action="_api/entrarfila.php" method="post">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">FILA VIDEOGAME 01</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4 numeros_modal">
                            <div id="filamodal3" >

                            </div>
                            <p>SUA POSIÇÃO SERÁ</p>
                        </div>
                        <div class="md-form mb-5">
                            <input name="equipamento" type="text" value="3" hidden>
                            <label for="inputState">QUAL JOGO VOCÊ VAI JOGAR? (OPCIONAL)</label>
                            <input name="jogo" type="text" class="form-control" placeholder="FIFA">
                        </div>
                        <div class="btnForm ">
                            <input type="submit" name="Enviar" class="button_fila">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--FILA4-->
    <div class="modal fade" id="modal_entrar_fila4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <div class="modal-content cormodal">
                <form action="_api/entrarfila.php" method="post">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">FILA VIDEOGAME 01</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4 numeros_modal">
                            <div id="filamodal4" >

                            </div>
                            <p>SUA POSIÇÃO SERÁ</p>
                        </div>
                        <div class="md-form mb-5">
                            <input name="equipamento" type="text" value="4" hidden>
                            <label for="inputState">QUAL JOGO VOCÊ VAI JOGAR? (OPCIONAL)</label>
                            <input name="jogo" type="text" class="form-control" placeholder="FIFA">
                        </div>
                        <div class="btnForm ">
                            <input type="submit" name="Enviar" class="button_fila">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal sair fila-->

    <!--Fila 1-->
    <div class="modal fade" id="modal_sair_fila1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_texto">Você tem certeza que deseja sair?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <label data-error="wrong" data-success="right" for="defaultForm-apelido">Essa ação não poderá ser desfeita. Caso você deseje retornar irá para o final da fila.</label>
                        
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input name="equipamento" type="text" value="1" hidden>
                        <button type="button" class="btn  button_fila modal_tamanho_botao" data-dismiss="modal">CANCELAR</button>
                        <input type="submit" value="SAIR DA FILA" class="btn button_fila modal_tamanho_botao" >
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--Fila 2-->
    <div class="modal fade" id="modal_sair_fila2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_texto">Você tem certeza que deseja sair?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <label data-error="wrong" data-success="right" for="defaultForm-apelido">Essa ação não poderá ser desfeita. Caso você deseje retornar irá para o final da fila.</label>
                        
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input name="equipamento" type="text" value="2" hidden>
                        <button type="button" class="btn  button_fila modal_tamanho_botao" data-dismiss="modal">CANCELAR</button>
                        <input type="submit" value="SAIR DA FILA" class="btn button_fila modal_tamanho_botao" >
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--Fila 3-->
    <div class="modal fade" id="modal_sair_fila3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_texto">Você tem certeza que deseja sair?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <label data-error="wrong" data-success="right" for="defaultForm-apelido">Essa ação não poderá ser desfeita. Caso você deseje retornar irá para o final da fila.</label>
                        
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input name="equipamento" type="text" value="3" hidden>
                        <button type="button" class="btn  button_fila modal_tamanho_botao" data-dismiss="modal">CANCELAR</button>
                        <input type="submit" value="SAIR DA FILA" class="btn button_fila modal_tamanho_botao" >
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--Fila 4-->
    <div class="modal fade" id="modal_sair_fila4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_texto">Você tem certeza que deseja sair?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <label data-error="wrong" data-success="right" for="defaultForm-apelido">Essa ação não poderá ser desfeita. Caso você deseje retornar irá para o final da fila.</label>
                        
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input name="equipamento" type="text" value="4" hidden>
                        <button type="button" class="btn  button_fila modal_tamanho_botao" data-dismiss="modal">CANCELAR</button>
                        <input type="submit" value="SAIR DA FILA" class="btn button_fila modal_tamanho_botao" >
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--ENTROU-->

    <div class="modal fade" id="ModalEntrouFila" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content  cormodal ">
                <form action="_api/login.php" method="post">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3 erros_modal">
                        <div class="md-form mb-5 erro_modal">
                            <img class="erros_modal_img" src="img/Vector.png" alt="">  
                        </div>
                        <div class="md-form mb-4 erro_modal msg_erros">
                            <p class="msg_erro">VOCÊ ENTROU NA FILA </p>   
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--SAIU-->
    <div class="modal fade" id="ModalSaiuFila" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content  cormodal ">
                <form action="_api/login.php" method="post">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3 erros_modal">
                        <div class="md-form mb-5 erro_modal">
                            <img class="erros_modal_img" src="img/Vector.png" alt="">  
                        </div>
                        <div class="md-form mb-4 erro_modal msg_erros">
                            <p class="msg_erro">VOCÊ SAIU DA FILA </p>   
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Lista Fila -->

    <!--FILA1-->
    <div class="modal" id="pessoalfila1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Heading</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila1">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
    </div>

      <!--FILA 2-->
    <div class="modal" id="pessoalfila2">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Heading</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila2">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>

      <!--FILA 3-->
    <div class="modal" id="pessoalfila3">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Heading</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila3">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>

      <!--FILA 4-->
    <div class="modal" id="pessoalfila4">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Heading</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila4">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>


      <!--FILA DENTRO 1-->
    <div class="modal" id="pessoalfiladentro1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Headingaaa</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila_dentro1">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>

      <!--FILA DENTRO 2-->
    <div class="modal" id="pessoalfiladentro2">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Headingaaa</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila_dentro2">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>

      <!--FILA DENTRO 3-->
    <div class="modal" id="pessoalfiladentro3">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Headingaaa</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila_dentro3">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>

      <!--FILA DENTRO 4-->
    <div class="modal" id="pessoalfiladentro4">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content cormodal">
          
            
            <div class="modal-header">
              <h1 class="modal-title">Modal Headingaaa</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            
            <div class="modal-body" id="pessoal_fila_dentro4">
                
            </div>
            
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>
    

        
      
    <!-- SVG -->

    <div hidden>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="facebook" viewBox="0 0 16 28">
                <title>facebook</title>
                <path d="M9.9629 27.9227H5.62191C4.89683 27.9227 4.307 27.3341 4.307 26.6104V16.8382H1.77438C1.0493 16.8382 0.459473 16.2493 0.459473 15.5259V11.3385C0.459473 10.6148 1.0493 10.0261 1.77438 10.0261H4.307V7.92922C4.307 5.85007 4.96115 4.08115 6.19851 2.81401C7.44145 1.54109 9.17846 0.868408 11.2218 0.868408L14.5324 0.873775C15.2563 0.875013 15.845 1.46369 15.845 2.18612V6.07402C15.845 6.79769 15.2554 7.38636 14.5306 7.38636L12.3015 7.38719C11.6217 7.38719 11.4486 7.52321 11.4116 7.56491C11.3506 7.63405 11.278 7.82952 11.278 8.36928V10.0259H14.363C14.5953 10.0259 14.8203 10.0831 15.0137 10.1908C15.4308 10.4235 15.6901 10.8633 15.6901 11.3387L15.6885 15.5261C15.6885 16.2493 15.0987 16.838 14.3736 16.838H11.278V26.6104C11.278 27.3341 10.688 27.9227 9.9629 27.9227ZM5.89615 26.3367H9.68867V16.1282C9.68867 15.645 10.0826 15.252 10.5666 15.252H14.0993L14.1008 11.6122H10.5664C10.0824 11.6122 9.68867 11.2192 9.68867 10.736V8.36928C9.68867 7.74964 9.75175 7.04497 10.2204 6.51532C10.7866 5.87504 11.679 5.80115 12.3011 5.80115L14.2559 5.80032V2.4594L11.2205 2.45445C7.93676 2.45445 5.89615 4.55238 5.89615 7.92922V10.736C5.89615 11.219 5.50238 11.6122 5.01844 11.6122H2.04862V15.252H5.01844C5.50238 15.252 5.89615 15.645 5.89615 16.1282V26.3367ZM14.5293 2.45982H14.5295H14.5293Z" 
                fill="white" width="16" height="28" viewBox="0 0 16 28"/>

            </symbol>
            <symbol id="instagram" viewBox="0 0 24 24">
                <title>instagram</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m4.75 24h14.5c2.619 0 4.75-2.131 4.75-4.75v-14.5c0-2.619-2.131-4.75-4.75-4.75h-14.5c-2.619 0-4.75 2.131-4.75 4.75v14.5c0 2.619 2.131 4.75 4.75 4.75zm-3.25-19.25c0-1.792 1.458-3.25 3.25-3.25h14.5c1.792 0 3.25 1.458 3.25 3.25v14.5c0 1.792-1.458 3.25-3.25 3.25h-14.5c-1.792 0-3.25-1.458-3.25-3.25z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m12 18.13c3.38 0 6.13-2.75 6.13-6.13s-2.75-6.13-6.13-6.13-6.13 2.75-6.13 6.13 2.75 6.13 6.13 6.13zm0-10.76c2.553 0 4.63 2.077 4.63 4.63s-2.077 4.63-4.63 4.63-4.63-2.077-4.63-4.63 2.077-4.63 4.63-4.63z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m18.358 7.362c.986 0 1.729-.74 1.729-1.721 0-1.023-.782-1.721-1.728-1.721-.986 0-1.729.74-1.729 1.721 0 1.021.778 1.721 1.728 1.721zm.177-1.886c.316.279-.405.618-.405.166 0-.27.367-.2.405-.166z"
                    fill="#fff" data-original="#000000" style="" />
            </symbol>
            <symbol id="youtube" viewBox="0 0 24 24">
                <title>youtube</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m9.939 7.856c-.497-.297-1.134.062-1.134.644v7c0 .585.638.939 1.134.645l5.869-3.495c.488-.291.487-.997.001-1.289zm.366 6.325v-4.36l3.655 2.183z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m19.904 3.271c-4.653-.691-11.153-.691-15.808 0-1.862.276-3.329 1.738-3.649 3.636-.596 3.523-.596 6.664 0 10.186.32 1.899 1.787 3.36 3.649 3.636 2.332.346 5.124.519 7.915.519 2.786 0 5.571-.172 7.894-.518 1.86-.276 3.326-1.737 3.648-3.636.596-3.523.596-6.665 0-10.188-.32-1.897-1.787-3.359-3.649-3.635zm2.17 13.573c-.213 1.256-1.173 2.222-2.39 2.402-4.518.671-10.838.671-15.368-.001-1.218-.181-2.179-1.146-2.391-2.402-.574-3.394-.574-6.291 0-9.687.213-1.256 1.173-2.22 2.392-2.402 2.262-.335 4.973-.503 7.682-.503 2.711 0 5.422.168 7.684.503 1.218.181 2.179 1.146 2.391 2.402.574 3.396.574 6.293 0 9.688z"
                    fill="#fff" data-original="#000000" style="" />
            </symbol>
            <symbol id="linkedin" viewBox="0 0 24 24">
                <title>linkedin</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m18.59 24c.103 0 4.762-.001 4.66-.001.414 0 .75-.336.75-.75-.35-7.857 1.842-16.148-6.338-16.148-1.573 0-2.826.537-3.729 1.247 0-1.461-1.579-.653-5.224-.87-.414 0-.75.336-.75.75.302 14.166-.674 15.771.75 15.771h4.66c1.353 0 .492-1.908.75-8.188 0-2.594.75-3.102 2.046-3.102 1.434 0 1.675.996 1.675 3.228.257 6.167-.598 8.063.75 8.063zm-2.425-12.791c-4.491 0-3.546 4.938-3.546 11.29h-3.16v-13.521h2.974v1.298c0 .72 1.097 1.074 1.479.35.492-.934 1.77-2.025 3.75-2.025 3.527 0 4.838 1.733 4.838 6.396v7.503h-3.16c0-7.144.756-11.291-3.175-11.291z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m1.122 7.479c-1.42 0-.448 1.585-.75 15.771 0 .414.336.75.75.75h4.665c1.42 0 .448-1.585.75-15.771 0-1.295-1.881-.531-5.415-.75zm3.915 15.021h-3.165v-13.521h3.165z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m3.452 0c-4.576 0-4.548 6.929 0 6.929 4.545 0 4.581-6.929 0-6.929zm0 5.429c-2.568 0-2.592-3.929 0-3.929 2.597 0 2.564 3.929 0 3.929z"
                    fill="#fff" data-original="#000000" style="" />
            </symbol>
        </svg>
    </div>

    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="jr/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>  
    <script>
        var fila = setInterval(function() { $('#fila1').load('_api/fila1.php'); }, 1000);
        var fila2 = setInterval(function() { $('#fila2').load('_api/fila2.php'); }, 1000);
        var fila3 = setInterval(function() { $('#fila3').load('_api/fila3.php'); }, 1000);
        var fila4 = setInterval(function() { $('#fila4').load('_api/fila4.php'); }, 1000);
        var filamodal1 = setInterval(function() { $('#filamodal1').load('_api/fila1Entra.php'); }, 1000);
        var filamodal2 = setInterval(function() { $('#filamodal2').load('_api/fila2Entra.php'); }, 1000);
        var filamodal3 = setInterval(function() { $('#filamodal3').load('_api/fila3Entra.php'); }, 1000);
        var filamodal4 = setInterval(function() { $('#filamodal4').load('_api/fila4Entra.php'); }, 1000);
        var lista1 = setInterval(function() { $('#pessoal_fila1').load('_api/lista1.php'); }, 1000);
        var lista2 = setInterval(function() { $('#pessoal_fila2').load('_api/lista2.php'); }, 1000); 
        var lista3 = setInterval(function() { $('#pessoal_fila3').load('_api/lista3.php'); }, 1000); 
        var lista4 = setInterval(function() { $('#pessoal_fila4').load('_api/lista4.php'); }, 1000);
        var listadentro1 = setInterval(function() { $('#pessoal_fila_dentro1').load('_api/listadentro1.php'); }, 1000);
        var listadentro2 = setInterval(function() { $('#pessoal_fila_dentro2').load('_api/listadentro2.php'); }, 1000); 
        var listadentro3 = setInterval(function() { $('#pessoal_fila_dentro3').load('_api/listadentro3.php'); }, 1000); 
        var listadentro4 = setInterval(function() { $('#pessoal_fila_dentro4').load('_api/listadentro4.php'); }, 1000); 
    </script>
    <?php
    if($fila11 == 1): ?>
        <script>
            $(document).ready(function(){
                $('#ModalEntrouFila').modal('show');
            });
        </script>
    <?php elseif($fila11 == 2): ?>
        <script>
            $(document).ready(function(){
                $('#ModalSaiuFila').modal('show');
            });
        </script>
    <?php endif; ?>
</body>

</html>