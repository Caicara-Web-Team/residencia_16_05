<?php
//comunic banco
include('conect.php');

//back-end de envio
include('enviar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/formulario.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body class="center fonte">
    <img src="img/fundo.jpg" alt="">
    
    <div class="card">
        <div class="titulo">
            <h1>Adicionar Produto</h1>
        </div>
        <form method="post" enctype="multipart/form-data" class="center">
            <div class="input_div">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" placeholder="digite aqui o nome..." required>
            </div>

            <div class="input_div">
                <label for="valor">Valor</label>
                <input type="text" name="valor" placeholder="digite aqui o valor do produto..." required>
            </div>

            <div class="input_div">
                <label for="quant">Quantidade</label>
                <input type="text" name="quant" placeholder="digite aqui a quantidade do produto..." required>   
            </div>

            <div class="input_div">
                <label for="tipo">Tipo</label>
                <select name="tipo">
                    <option value="0">Selecionar tipo</option>
                    <option value="peixe">Peixe</option>
                    <option value="crustaceo">Crustáceo</option>
                    <option value="molusco">Molusco</option>
                    <option value="marisco">Marisco</option>
                </select>
            </div>

            <div class="input_div">
                <label for="file">Adicionar Imagem</label>
                <input type="file" name="file" accept="img/*" multiple required>
            </div>
    
            <button type="submit" name="EnviarInfos" >Adicionar Produto</button>
        </form>
        <a href="index.php" class="submit">Voltar</a>

    </div>
</body>

</html>