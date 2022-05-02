<?php
session_start();
if (isset($_SESSION['mensagem'])) {
?><!-- Finaliza o PHP pra entrar com o javascript embaixo -->

    <script>//implementa o javascript pra subir o toast dentro do if
        window.onload = function() {
            M.toast({
                html: '<?php echo $_SESSION['mensagem']; ?>'
            });
        };
    </script>

<?php
}//finaliza o if da sessao mensagem
session_unset(); //finaliza a sessao para quando atualizar a pg nao exibir novamente
?>