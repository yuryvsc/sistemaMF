<?php 

require_once "../conexao.php";

?>


<!DOCTYPE html>
<html>
<head>

    <title>GESTÃO AL</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="../images/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">



    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>    

    <div class="container">
        <div class="row" style="width:100% height:100%">
            <div class="col-lg-12"></div>
            <div class="login-box" style="width:100%">
                <div class="col-lg-12 login-key">
                    <i class="fas fa-chart-bar" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    GESTÃO AL
                </div>

                <div class="col-lg-12 login-title">

                    <?php  if(@$nome_usuario == $nivel_backoffice_adm){ ?> <!-- INFORMAÇÃO PARA TRIAGEM -->

                    <h5>Bem Vindo <?php echo @$log_nome ?> !!</h5>  

                    <h5> Sistema de Controle e Análise dos Processos de Perda</h5>       
               <h5 style="background-color:#FFFF00"> ATENÇÃO!!</h5>
               <h5 style="background-color:#FFFF00"> PARA OS CODIÇOS 154 DS, SELECIONE (( 154.1  ))</h5><br><br><br><br><br><br><br><br> 

                    <?php  }elseif(@$nome_usuario == $nivel_backoffice_bx || @$nome_usuario == $nivel_superv_bx){ ?> <!-- INFORMAÇÃO PARA BAIXA DE OS -->

                    <h5>Bem Vindo <?php echo @$log_nome ?> !!</h5>         
                    
                    <h5> Sistema de Controle e Análise dos Processos de Perda</h5>        
            <!--    <h5 style="background-color:#FFFF00"> Sistema de Controle e Análise dos Processos de Perda</div></h5><br><br><br><br><br><br><br><br> -->                    

                <?php }else{ ?>   

                    <h5>Bem Vindo <?php echo @$log_nome ?> !!</h5>           
                    
                    <h5> Sistema de Controle e Análise dos Processos de Perda</h5>        
            <!--    <h5 style="background-color:#FFFF00"> Sistema de Controle e Análise dos Processos de Perda</div></h5><br><br><br><br><br><br><br><br>  --> 
                <?php } ?>

            </div>
        </div>
                <div class="col-lg-12"></div>
            </div>
        </div>



    </body>
    </html>