<?php
  // inicializa com um inteiro aleatório dentro do intervalo dos números do dado
  $numeroDado = mt_rand(1, 6);
  // inicializa
  $numeroTexto = "";
  // chama a instrução switch
  switch($numeroDado) {
    case 1:
      $numeroTexto = "Um";
      break;
    case 2:
      $numeroTexto = "Dois";
      break;
    case 3:
    case 4:
      // os casos 3 e 4 vão para esta linha
      $numeroTexto = "Três ou Quatro";
      break;
    case 5:
      $numeroTexto = "Cinco";
      echo $numeroTexto;
      // break;
      //sem especificar o break ou return, ele continuará executando o próximo case.

    case 6:
      $numeroTexto = "Seis";
      echo $numeroTexto;
      break;
    default:
      $numeroTexto = "desconhecido";
  }
//exibe o resultado
echo 'O dado caiu no número '.$numeroTexto.'.';

?>