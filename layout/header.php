<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
      .rodape{
        right: 0;
        left: 0;
        bottom: 0;
        position: fixed;
        margin: auto;
        width: 1000px;
        padding: 20px 0 25px 0;
        text-align: center;
      }
    </style>
    </head>
    <body>
        <div class="container">
            <h3 class="muted">Code Education - Foundation</h3>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <?php if(empty($route) || $route == 'home'):?>
                            <li class="active"><a href="#">Home</a></li>
                            <?php else:?>
                            <li><a href="/home">Home</a></li>
                            <?php endif;?>
                            
                            <?php if($route == 'empresa'):?>
                            <li class="active"><a href="#">Empresa</a></li>
                            <?php else:?>
                            <li><a href="/empresa">Empresa</a></li>
                            <?php endif;?>
                            
                            <?php if($route == 'produtos'):?>
                            <li class="active"><a href="#">Produtos</a></li>
                            <?php else:?>
                            <li><a href="/produtos">Produtos</a></li>
                            <?php endif;?>
                            <?php if($route == 'servicos'):?>
                            <li class="active"><a href="#">Serviços</a></li>
                            <?php else:?>
                            <li><a href="/servicos">Serviços</a></li>
                            <?php endif;?>
                            <?php if($route == 'contato'):?>
                            <li class="active"><a href="#">Contato</a></li>
                            <?php else:?>
                            <li><a href="/contato">Contato</a></li>
                            <?php endif;?>
                            <?php if($route == 'pesquisar'):?>
                            <li class="active"><a href="#">Pesquisar</a></li>
                            <?php else:?>
                            <li><a href="/pesquisar">Pesquisar</a></li>
                            <?php endif;?>
                            <?php if($route == 'login'):?>
                                <li class="active"><a href="#">Administração</a></li>
                            <?php else:?>
                                <li><a href="/login">Administração</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>