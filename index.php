<?php

require_once ("config.php");
// carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("alex");
//echo json_encode($search);

//Carrega um usuário
//$usuario = new Usuario();
//$usuario->login("alex","321");
//echo $usuario;

$aluno = new Usuario("aluno","@aluno");

$aluno->insert();

echo $aluno;

