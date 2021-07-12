<?php

$hit = 0;
$keys = array_keys($_GET);
$response = array(

        "rsp1" => "Risoto",
        "rsp2" => "10",
        "rsp3" => "Lasanha",
        "rsp4" => "5",
        "rsp5" => "Salgado",
        "rsp6" => "30",
        "rsp7" => "Pão",
        "rsp8" => "15",
        "rsp9" => "Pizza",
        "rsp10" => "10",
        "rsp11" => "Broa",
        "rsp12" => "15"

);
// verifica se o que veio exite no array de resposta com base nas chaves
foreach($keys as $key){

    if($_GET[$key] == $response[$key]){

      $hit += 1;

    }

};
// verificar a quantidade de acertos
switch($hit){

   case 1:
        echo "você acertou uma resposta do video, esta quase lá";
   break;
   case 2:
       echo "você acertou todas as respostas do video parabéns";
   break;
   default:
       echo "Que pena você não acertou nenhuma resposta do video";
   break;
}




