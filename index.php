<!DOCTYPE html>
<html lang="pt-br">
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
        <form class="form" action="calcular.php" method="post">

            <section class="ative">
                <h2 class="titulo-seccao">Informações do Seviço</h2>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="n-cep-o">CEP - Origem</label>
                            <input type="text"  class="number form-control" name="n-cep-o" id="cep-o" required />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="n-cep-d">CEP - Destino</label>
                            <input type="text" class="number form-control" name="n-cep-d" id="cep-d" required />
                        </div>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="n-serv">Tipo de Serviço</label>
                    <select name ="n-serv" class="form-control" id="n-serv">
                        <option value="41106">PAC</option>
                        <option value="40010">SEDEX</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="next form-control btn btn-primary" id="seguinte">Seguinte <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                            
            </section>

            <section>
                <h2 class="titulo-seccao">Informações do Produto</h2>
                <div class="form-group">
                    <label for="n-peso">Peso</label>
                    <input type="text"  class="number decimal form-control" name="n-peso" id="peso" required />
                </div>

                <div class="form-group">
                    <label for="n-comp">Comprimento</label>
                    <input type="text" class=" number decimal form-control" name="n-comp" id="comp" required />
                </div>

                <div class="form-group">
                    <label for="n-larg">Largura</label>
                    <input type="text" class="number decimal form-control" name="n-larg" id="larg" required />
                </div>
                <div class="form-group">
                    <label for="n-alt">Altura</label>
                    <input type="text" class="number decimal form-control" name="n-alt" id="alt" required />
                </div>

                <div class="form-group">
                    <label for="n-val">Valor</label>
                    <input type="text" class="number decimal form-control" name="n-val" id="val" required />
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="prev form-control btn btn-secondary" id="anterior"><i class="fas fa-arrow-left"></i> Anterior</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="form-control btn btn-success" id="calcular" name="calcular"><i class="fas fa-calculator"></i> Calcular</button> 
                        </div> 
                    </div>
                </div>

            </section>
            
        </form>

</div>
   <script src="./js/jquery-3.4.1.slim.min.js"></script>
   <script src="./js/jquery.mask.min.js"></script>
   <script src="./js/app.js"></script>
   <script src="./js/bootstrap.min.js"></script>
   <script src="./js/all.min.js"></script>
</body>
</html>
