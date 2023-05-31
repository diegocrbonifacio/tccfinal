<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cadastro do Remédio</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="menu.html">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php">Remédios</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                  include("config.php");
                  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
                  $res = $conn->query($sql) or die($conn->error);
                  $row = $res->fetch_object();
                ?>
                <form action="salvar.php" method="POST">
                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="id" value="<?php print $row->id; ?>">
                    <h1>Editar</h1></br>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
                    </div>
                    <div class="form-group">
                        <label>Local de Ação</label>
                        <input type="text" name="localacao" class="form-control" value="<?php print $row->localacao; ?>">
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input type="text" name="valor" class="form-control" value="<?php print $row->valor; ?>">
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" name="quantidade" class="form-control" value="<?php print $row->quantidade; ?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>