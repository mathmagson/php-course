<?php

$anoNascimento = 1991;

$nome = "João";

$sobrenome = "Doria";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $anoNascimento;

unset($anoNascimento);

if (isset($anoNascimento)) {

	echo $anoNascimento;

}



?>