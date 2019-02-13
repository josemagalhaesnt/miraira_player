<?php
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_HEADER); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FUNCTIONS);

  /* Funções do Player */

	/* Informações do Vídeo */

	exibir_tituloVideo($titulo);

	/* Player de vídeo */

	tocar_video($video_url);
	
	/* Demais Informações do Vídeo */
	exibir_creditosVideo($autor,$descricao);

  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FOOTER); 
?>