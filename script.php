<?php 


$catetorias = [];
$catetorias[]  = 'infantil';
$catetorias[]  = 'adolescente';
$catetorias[]  = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
      echo 'O nome não pode ser vazio';
      return;
}
if(strlen($nome) < 3)
{
    echo '0 nome deve conter mais de 3 caracteres';
  return;
}

if(strlen($nome) > 40)
{
    echo '0 nome é muito extenso';
  return;


}

if(!is_numeric($idade))
{
    echo "informe um numero para idade";
    return;
}






