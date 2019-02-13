<?php

  /* Metadados do arquivo de mídia - Instruções de Uso */

  /* 1) Colocar as informações da música dentro das aspas */

  /* 2) Caso a informação seja vazia ou desconhecida, deixar aspas em branco */

  /* 3) Caso a mídia esteja disponível para download, colocar o valor sim dentro das aspas na variável $download. Caso contrário deixar aspas em branco */

  /* 4) Criar uma pasta videos (sem acento) e colocar os vídeos dentro, para melhor organização */


  /* Créditos do Vídeo */
  $titulo = "Título do Vídeo";
  $autor = "Autor";
  $descricao = "Insira uma descrição";
  $download = "";

  /* Links */
  $video_url = "videos/video.webm";



  /*
  ******************************************************************************
  NÃO ALTERAR AS LINHAS ABAIXO PARA NÃO COMPROMETER O FUNCIONAMENTO DA APLICAÇÃO 
  ******************************************************************************
  */


  require_once($_SERVER['DOCUMENT_ROOT']. '/miraira_player/config.php');
  require_once($_SERVER['DOCUMENT_ROOT']. VIDEO_PLAYER); 

?>