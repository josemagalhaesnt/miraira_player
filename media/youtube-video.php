<?php 
  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT'].'/miraira_player/config.php'); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_HEADER); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FUNCTIONS);

  /* ALTERE AQUI - Colocar as informações da música dentro das aspas */

  /* Caso a informação seja vazia ou desconhecida, deixar aspas em branco */

  /* Créditos da Música */
  $titulo = "Grupo Miraira - Maneiro Pau";
  $autor = "";
  $descricao = "Dança executada com batidas de cacetes de jucá ao som de repentes, emboladas, tipo estrofe refrão. É dançado no Cariri (Juazeiro e Crato), em Assaré e Morada Nova. Grupo Miraira - IFCE";

  /* Links */
  $video_url = "https://www.youtube.com/embed/MCw-W1AlvcE";

  /* NÃO ALTERE AS LINHAS ABAIXO */

  /* Funções do Player */

	/* Informações do Vídeo */

	exibir_tituloVideo($titulo);

	/* Player de vídeo */

	tocar_video($video_url);
	
	/* Demais Informações do Vídeo */
	exibir_creditosVideo($autor,$descricao);
	
require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FOOTER); 
?>