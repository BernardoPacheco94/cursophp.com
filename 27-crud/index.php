<?php
include_once 'php-action/db_connect.php'; //conecta com o banco para o read
include_once 'includes/header.php'; //implementa o cabeçalho
include_once 'includes/message.php'; //implementa as mensagens de confirmação de inclusão
?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3>CLIENTES</h3>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>

                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM clientes"; //comando para puxar todos os dados da tabela clientes
                $resultado = mysqli_query($connect, $sql); //resultado do sql, passando a conexao necessária

                while ($dados = mysqli_fetch_array($resultado)) { //enquanto  estiver buscando resultado(sql), vai incluindo linhas na tabela pelo array dados
                ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating orange"><i class="material-icons red">delete</i></a></td>
                    </tr>
                <?php } ?>
                <!--Encerra o while-->
            </tbody>

        </table>
        <br>
        <a href="adicionar.php" class="btn">ADICIONAR CLIENTE</a>
        <!--botao de adicionar cliente-->
    </div>
</div>

<?php
include_once 'includes/footer.php'; //inclui o rodape
?>