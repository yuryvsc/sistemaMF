
<!DOCTYPE html>
<html>
<head>
	
	<title>Gestao</title>
	<meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="images/img/favicon-4.png" type="image/x-icon">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>    

<form class="login100-form validate-form" method="post" action="autenticar.php">
<!-- <div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Central de Analise</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-space">
                        <div class="login">
                            <div class="group"> <label for="user" class="label">Usuário</label> <input id="username" type="text" name="username" class="input" placeholder="Nome de Usuário"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" name="pass" type="password" class="input" data-type="Senha" placeholder="Entre com sua senha"> </div>                    
                            <div class="group"> <input type="submit" class="button" value="Acessar"> </div>
                            <div class="hr"></div>                           
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->





    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="far fa-chart-bar" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    Gestão EQTL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">Usuário</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Senha</label>
                                <input name="pass" type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

</form>

</body>
</html>