<?php 
   // Cadastra Contato
    function cadastrarContato($nome,$email,$telefone) {
        $arquivo = fopen('model/contatos.csv','a+');
        fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
        fclose($arquivo);
        $mensagem = 'Cadastro efetuado com Sucesso';
        include './views/alert/mensagem.php';
    }
    //Lista Contato
    function listarContato(){
        $contatos = file('model/contatos.csv');
        return $contatos;
    }
    // Excluir contato
    function excluirContato(){
        $id = $_GET['id'];
        $contatos = file('model/contatos.csv');
        unset($contatos[$id]);

        unlink('model/contatos.csv');
        $arquivo = fopen('model/contatos.csv','a+');

        foreach($contatos as $cadaContato ) {
            fwrite($arquivo,$cadaContato);
        }
        $mensagem = 'Contato Excluido!';
        include './views/alert/contatoExcluido.php';
    }
    //editando contato
    function editarContato(){
        $id = $_GET['id'];
        $contatos = file('model/contatos.csv');
        if($_POST){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $contatos[$id] = "{$nome};{$email};{$telefone}". PHP_EOL; 
            unlink('model/contatos.csv');
            $arquivo = fopen('model/contatos.csv', 'a+');
             foreach($contatos as $cadaContato){

                 fwrite($arquivo, $cadaContato);
            }
            fclose($arquivo);
            $mensagem = 'Cadastro atualizado com sucesso!';
            include './views/alert/contatoAtualizado.php';
        }
       
        $dados = explode(';',$contatos[$id]);
        return $dados;
    }
