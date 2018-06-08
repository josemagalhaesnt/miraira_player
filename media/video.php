<?php 
  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT'].'/miraira_player/config.php'); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_HEADER); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FUNCTIONS);

  /* ALTERE AQUI - Colocar as informações da música dentro das aspas */

  /* Caso a informação seja vazia ou desconhecida, deixar aspas em branco */

  /* Créditos da Música */
  $titulo = "Título do Vídeo";
  $autor = "";
  $descricao = "Blalalala";

  /* Links */
  $video_url = "videos/video.webm";

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