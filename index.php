<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>boi na linha</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">

  </head>
  <body onload="mostraMercadorias()">
    <div class="container">
      <div class="header boi na linha">
        <div id="logo"></div>
        <h1> Sistema Boi na Linha - Processo de seleção </h1>
        <div class="jumbotron">
          <form id="formulario" action="config.php" method="POST">
            <div class="form-group">
              <label>Código da Mercadoria:</label>
              <input type="text" id="codigoMercadoria" class="form-control" placeholder="Código">
            </div>
            <div class="form-group">
              <label>Tipo de Mercadoria:</label>
              <input type="text" id="tipoMercadoria" class="form-control" placeholder="Tipo">
            </div>
            <div class="form-group">
              <label>Nome da Mercadoria:</label>
              <input type="text" id="nomeMercadoria" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
              <label>Quantidade de Mercadoria:</label>
              <input type="text" id="quantidadeMercadoria" class="form-control" placeholder="Quantidade">
            </div>
            <div class="form-group">
              <label>Preço da Mercadoria:</label>
              <input type="text" id="precoMercadoria" class="form-control" placeholder="Exemplo: 3.400,00">
            </div>
            <div class="form-group">
              <label>Tipo do Negocio:</label>
              <input type="text" id="tipoNegocio" class="form-control" placeholder="Compra ou Venda">
            </div>
              <button name="confirma" type="submit" class="btn btn-primary">Adicionar</button>
          </form>
        </div>
      </div>
      <div class="now marketing">
        <div class="col-lg-12">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Código da Mercadoria</th>
                <th>Tipo de Mercadoria</th>
                <th>Nome da Mercadoria</th>
                <th>Quantidade de Mercadoria</th>
                <th>Preço da Mercadoria</th>
                <th>Tipo do Negócio</th>
              </tr>
            </thead>
            <tbody id="resultados"></tbody>
          </table>
        </div>
      </div>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.mask.min.js"></script>

    <?php
      require 'php/config.php';
      require 'php/connection.php';
      require 'php/database.php';

      $dados = array (
        'cod_mercadoria' => 'Ygor Rocha',
        'tipo_mercadoria' => 'contato@coderweb.com.br',
        'nome_mercadoria' => '18',
        'qtde_mercadoria' => '1',
        'preco_mercadoria' => '200',
        'tipo_negocio' => 'Compra'
      );

      $grava = DBCreate('dados', $dados);
        if($grava)
          echo 'Ok';
        else
          echo ':/';
     ?>

  </body>
</html>
