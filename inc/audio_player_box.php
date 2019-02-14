<?php
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_HEADER); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FUNCTIONS);

  /* Funções do Player */

	/* Informações da Música */

	exibir_capaAlbum($capa_url);

	exibir_creditosMusica($titulo,$autor,$interprete,$album);

	/* Player de áudio */

	tocar_musica($musica_url);

	/* Baixar música */
	baixar_musica($album, $musica_url);

  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FOOTER); 
?>