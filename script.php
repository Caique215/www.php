<?php 
/**
* Created by PhpStorm.
* User: Eduardo.
* Date: 22/03/2021
* Time:  21:00
*/


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
    echo "informe um número para idade";
    return;
}

if($idade >= 6 && $idade <= 12)
{
   for($i = 0; $i  <= count($categorias); $i++)
   {
       if($categorias[$i] == 'infantil')
                 echo "O nadador " .$nome. "compete na categoria". $categorias[$i];
   }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i  <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        echo "O nadador " .$nome. "compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i  <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
             echo "O nadador " .$nome. "compete na categoria adulto";

    }
}




