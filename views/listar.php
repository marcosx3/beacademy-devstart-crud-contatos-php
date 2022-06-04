<h1 class="listar-contato-title">Listando Contatos</h1>
<div class="container listar-contato">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Ação</td>
            </tr>
        </thead>
        <tbody>
            <tr>
              <?php 
                    foreach($contatos as $posicao => $cadaContato) {
                        $partes = explode(';',$cadaContato);
                        echo '<tr>';
                            echo "<td>{$partes[0]}</td>";
                            echo "<td>{$partes[1]}</td>";
                            echo "<td>{$partes[2]}</td>";
                            echo "<td>
                                <a href='/excluir?id={$posicao}' class='btn btn-danger'>Excluir</a>
                                <a href='/editar?id={$posicao}' class='btn btn-warning'>Editar</a>
                                </td>";
                        echo '</tr>';
                    }
              ?>
            </tr>
        </tbody>
    </table>
</div>