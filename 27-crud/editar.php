<?php
//vai trazer os dados do banco para a tela
include_once 'includes/header.php';
include_once 'php-action/db_connect.php'; // chama a  conexao com o banco

if(isset($_GET['id'])){//se foi passado o id na url
    $id=mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id='$id'";//traz todos os dados do id
    $resultado = mysqli_query($connect, $sql); // consulta o sql na base
    $dados = mysqli_fetch_array($resultado); //coloca o resultado num array
}
?>
<div class="row">
    <div class="col s12 m6 push-m3 ">
    <h3>EIDTAR CLIENTE</h3>   
        <form action="php-action/update.php" method="POST"> <!--Passa via POST os parametros do formulario para php-action/update-->
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"><!--Recebe o id do cliente-->
        <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>"><!-- value carrega os valores pro input -->
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                <label for="idade">Idade</label>
            </div>
            <button type="submit" class="btn" name="btn-editar">ATUALIZAR</button>
            <a href="index.php" class="btn"> VOLTAR</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>