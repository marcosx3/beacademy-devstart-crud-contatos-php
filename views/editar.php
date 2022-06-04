<h1 class="editar-contato-title">Editando Contato</h1>
<div class="container editar-contato">
    <form action="" method="POST">
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input value="<?php echo $dados[0]; ?>" class="form-control" type="text" placeholder="Nome do contato" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input value="<?php echo $dados[1]; ?>" class="form-control" type="email" placeholder="Email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone: </label>
            <input value="<?php echo $dados[2]; ?>" class="form-control" type="text" placeholder="xxxxxxxxxxx" id="telefone" name="telefone" >
        </div>
        <button class="btn btn-primary mt-2" type="submit">Editar</button>
    </form>


</div>