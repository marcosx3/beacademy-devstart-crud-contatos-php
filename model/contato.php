<?php 
   
    function cadastrarContato($nome,$email,$telefone) {
        $arquivo = fopen('model/contatos.csv','a+');
        fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
        fclose($arquivo);
        $mensagem = 'Cadastro efetuado com Sucesso';
        include './views/alert/mensagem.php';
    }

    function listarContato(){
        $contatos = file('model/contatos.csv');
        return $contatos;
    }



?>