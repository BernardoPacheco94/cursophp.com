<?php
include_once 'includes/header.php';
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
                    <td>Ronaldo</td>
                    <td>Om</td>
                    <td>queondaehessa@157.com</td>
                    <td>157</td>
                    <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating orange"><i class="material-icons red" >delete</i></a></td>
                </tbody>

            </table>
            <br>
            <a href="adicionar.php" class="btn">ADICIONAR CLIENTE</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>