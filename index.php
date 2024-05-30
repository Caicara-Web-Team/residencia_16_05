    <?php
    // comunicacao com o banco de dados
    include('conect.php');

    //captar as infos da empresa
    $info = $database->getReference('caicara/ribeirinho/')->getValue();

    //listas dos produtos
    $ListaDeProdutos = $database->getReference('caicara/ribeirinho/')->getSnapshot();
    
    

    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caiçara</title>
</head>

<body class="center fonte">
    <!-- navbar -->
    <div class="nav">
        <div class="Esq">
            <img src="img/logo.jpg" class="Esq">
        </div>
        <div class="Dir center">
            <div class="Conteudo">
                <a href="">Home</a>
                <a href="">Quem somos</a>
                <a href="formulario.php">Cadastro</a>
                <a href="">Controle</a>
            </div>
        </div>
    </div>
    <!-- fim da navbar -->      

    <!-- inicio header -->
    <div class="home">
        <div class="banner">
            <img src="img/header.jpg" class="banner">
        </div>
    </div>
    <!-- fim do header -->

    <!-- inicio catalogo -->
    <!-- destaques -->
    <div class="destaques">
        <div class="destaque_direita">
            <h1>Mais Vendidos</h1>
            <p>A produção diária na nossa fábrica. novas práticas de gestão de qualidade.</p>
        </div>
        <div class="destaque_esquerda_geral">
            <div class="destaque_esquerda">
                <img src="img/dourado.jpg">
            </div>
                
            <div class="destaque_esquerda">
                <img src="img/camarão.jpg">
            </div>

            <div class="destaque_esquerda">
                <img src="img/tilapia60.jpg">
            </div>
        </div>
 
    </div>
    <!-- catalogo principal -->
    <div class="catalogo center">
        <div class="catalogo_texto center">
            <h1>Nossos produtos</h1>
        </div>
        <div class="lista">

            <?php foreach($ListaDeProdutos->getValue() as $produto): ?>

                <!-- produto 1 -->
                <div class="produto">
                    <?php
                    //coletar a img
                    $imagemColetadaJPG = 'img/finais/'.$produto['nome'].'.jpg';
                    $imagemColetadaPNG = 'img/finais/'.$produto['nome'].'.png';

                    if(file_exists($imagemColetadaJPG)){
                        $image = $imagemColetadaJPG;
                    }else{
                        $image = $imagemColetadaPNG;
                    }
                    ?>
                    <img src="<?php echo $image?>" class="imagem_produto">
                    <h5>Nome: <?php echo $produto['nome']; ?></h5>
                    <h5>Valor: R$<?php echo $produto['valor']; ?></h5>
                    <!-- criamos uma variavel para armazenar o link de redirecionamento -->
                    <?php $link = 'preview.php?id='. $produto['chave']; ?>
                    <a href="<?php echo $link ?>" class="submit">Comprar</a>
                </div>

            <?php endforeach ?>

            <!-- <div class="produto">
                <img src="img/robalo.jpg">
            </div>
            <div class="produto">
                <img src="img/dourado.jpg">
            </div>
            <div class="produto">
                <img src="img/camarão.jpg">
            </div>
            <div class="produto">
                <img src="img/lula.jpg">
            </div>
            <div class="produto">
                <img src="img/atum.jpg">
            </div> -->

        </div>
    </div>

    <footer class="footer">
        <div class="fut_esq">
        <h3>Bem-vindo à Comperativa Caiçara!</h3>
        Somos uma empresa comprometida em fornecer aos nossos clientes uma experiência de compra excepcional, onde qualidade, variedade e atendimento ao cliente são nossos principais pilares.
        </div>
        <center>
        <div class="fut_dir">
            <h4><a href="">Home</a></h4>
            <h4><a href="">Quem somos</a></h4>
            <h4><a href="">Controle</a></h4>
        </div>
        </center>
    </footer>

</body>

</html>