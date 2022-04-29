<?php

$senha = 1234;
echo $novasenha = base64_encode($senha)."<br>";

echo "A senha acima é: ".base64_decode($novasenha);

echo "<hr>";

echo "Criptografias de mao única (não descriptografa) <br>";

echo "MD5: ".md5($senha);
echo "<br>";
echo "Sha1: ".sha1($senha);
echo "<hr>";

echo "Password Hash (mais seguro) <br>";

$senhaSegura = password_hash ($senha, PASSWORD_DEFAULT);//Parametros senha e algoritmo que vai criptografar
echo $senhaSegura."<br>"; // a cada atualização vai alterar o hash
echo "<strong>OBS: Para salvar esse tipo de senha no banco, manter 255 caracteres e não 60.</strong>";


echo "<hr>";

echo "Autenticando a senha: <br>";

// $senha já declarada anteriormente
$senha_db = '$2y$10$ijnr9FEMo0FUerqwNJyEquoq2Yo.pttMZmLeyZQfhP5ihB.aaMDMa';

if (password_verify($senha, $senha_db)){
    echo "senha correta";
}else{
    echo 'senha inválida';
}
echo "<br>";
echo "Foi utilizado 'if(password_verify(senha, hash))'";