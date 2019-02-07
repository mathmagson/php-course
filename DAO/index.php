<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

// Carrega um usuário
//$user = new Usuario();
//$user->loadbyId(3);
//echo $user;


// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("joao", "jsrtus");
//echo $usuario;

// INSERT
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;

// UPDATE
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "1231");
//echo $usuario;

// DELETE
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

 ?>