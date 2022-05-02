<?php
include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3 ">
    <h3>ADICIONAR CLIENTE</h3>   
        <form action="php-action/create.php" method="POST"> <!--Passa via POST os parametros do formulario para php-action/create-->
        <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>
            <button type="submit" class="btn" name="btn-cadastrar">ADICIONAR</button>
            <a href="index.php" class="btn"> VOLTAR</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>