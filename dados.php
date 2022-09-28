<?php

$email =$_POST ['Email'];
$senha =$_POST ['Senha'];


$usuario = 'amor.eterno@gmail.com';
$ususenha = 'amoramor';


if ($email == $usuario && $senha == $ususenha ){
    include 'conteudo.html';

}
else{
    echo "Campos devem ser preenchidos!";
    include 'login.html';

}

?>






   




    
    
    
    
