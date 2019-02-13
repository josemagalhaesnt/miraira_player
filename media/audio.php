<?php 
  
  /* Metadados do arquivo de mídia - Instruções de Uso */

  /* 1) Colocar as informações da música dentro das aspas */

  /* 2) Caso a informação seja vazia ou desconhecida, deixar aspas em branco */

  /* 3) Caso a mídia esteja disponível para download, colocar o valor sim dentro das aspas na variável $download. Caso contrário deixar aspas em branco */

  /* 4) Criar uma pasta audios (sem acento) e colocar os áudios dentro, para melhor organização */


  /* Créditos da Música */
  $titulo = "Título";
  $autor = "Autor";
  $interprete = "Intérprete";
  $album = "Álbum";
  $download = "sim";

  /* Links */
  $capa_url = "";
  $musica_url = "audios/audio.mp3";

  /*
  ******************************************************************************
  NÃO ALTERAR AS LINHAS ABAIXO PARA NÃO COMPROMETER O FUNCIONAMENTO DA APLICAÇÃO 
  ******************************************************************************
  */

  require_once($_SERVER['DOCUMENT_ROOT']. '/miraira_player/config.php');
  require_once($_SERVER['DOCUMENT_ROOT']. MUSIC_PLAYER); 
?>