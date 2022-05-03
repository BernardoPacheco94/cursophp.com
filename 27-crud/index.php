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

                if (mysqli_num_rows($resultado) > 0) {

                    while ($dados = mysqli_fetch_array($resultado)) { //enquanto  estiver buscando resultado(sql), vai incluindo linhas na tabela pelo array dados
                ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['sobrenome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['idade']; ?></td>
                            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>



                            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                            <!--Botao delete, implementação do modal (confirmação de exclusão), capturado o id pq está em um loop-->


                            <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>ATENÇÃO</h4>
                                    <p>O Cliente será excluído, deseja prosseguir?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="php-action/delete.php" method="POST">
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>


                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn red">
                                            Sim, deletar!
                                        </button>
                                    </form>
                                </div>
                            </div>



                        </tr>

                    <?php }
                } else {
                    ?>
                    <tr>
                        <th>-</th>
                        <th>-</th>
                        <th>-</th>
                        <th>-</th>
                    </tr>
                <?php
                }
                ?>
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