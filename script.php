<?php 


$catetorias = [];
$catetorias[]  = 'infantil';
$catetorias[]  = 'adolescente';
$catetorias[]  = 'adulto';
$catetorias[]  = 'idoso';

$nome = 'Eduardo'
$idade = '18'

if($idade >= 6 && $idade <= 12)
{
   for(si = 0; $i  <= count($categorias); $i++)
   {
       if($categorias[$i] == 'infantil')
                 echo "O nadador " .$nome. "compete na categoria". $categorias[$i];
   }
}
else if($idade >= 13 && $idade <= 18)
{
    for(si = 0; $i  <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        echo "O nadador " .$nome. "compete na categoria adolescente";
    }
}
else
{
    for(si = 0; $i  <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
             echo "O nadador " .$nome. "compete na categoria adulto";

    }
}

