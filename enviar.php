<?php
//comunic banco
include('conect.php');

if (isset($_POST['EnviarInfos'])) {

    //o nome da pasta - quanto a chave de reconhecimento da pasta
    $token = uniqid();

    //adicionar imagem
    $files = $_FILES['file'];
    $names = $files['name'];
    $tmp_name = $files['tmp_name'];



    //vetor que armazena as variaveis que vem do formulario HTML
    $novoItem = [
        'chave' => $token,
        'nome' => $_POST['nome'],
        'valor' => $_POST['valor'],
        'quantidade' => $_POST['quant'],
        'tipo' => $_POST['tipo']
    ];

    //caminho para armazernar, deletar ou atualizar o banco
    $database->getReference('caicara/ribeirinho/' . $token)->set($novoItem);

    //mover o usuario
    header('Location: index.php');
}
