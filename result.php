<?php include("./calcular.php") ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Frete - Correios</title>
</head>

<body>
  <h1> Calcular Frete </h1>
  <div id="main" class="container">
    <table id="tabela" class="table">
      <h2 class="titulo-table">Cálculo de Frete</h2>
      <thead>
        <tr>
          <th scope="col">CEP Destino</th>
          <th scope="col">Serviço</th>
          <th scope="col">Valor</th>
          <th scope="col">Prazo de Entrega</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $cep_d; ?></td>
          <td><?php echo ($frete->cServico->Codigo == "41106") ? "PAC" : "SEDEX"; ?></td>
          <td><?php echo "R$ " . $frete->cServico->Valor; ?></td>
          <td><?php echo $frete->cServico->PrazoEntrega . " dias"; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>