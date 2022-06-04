<?php 
    include './model/contato.php';

    function login(){
        include 'views/login.php';
    };

    function home(){
        include 'views/home.php';
    };

    function cadastrar(){
        if($_POST){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            cadastrarContato($nome,$email,$telefone);
        }
        include 'views/cadastro.php';
    };
    
    function editar(){
        include 'views/editar.php';
    };
    
    function listar(){
        $contatos = listarContato();
        include 'views/listar.php';
    };
    
    function relatorio(){
        include 'views/relatorio.php';
    };
    function erro404(){
        include 'views/404.php';
    };


?>