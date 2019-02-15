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
	if (album_auth_download($album) == true)
		alb_baixar_musica($album, $musica_url);
	else if (artista_auth_download($interprete) == true)
		art_baixar_musica($interprete, $musica_url);
	else if (faixa_auth_download($titulo) == true)
		fai_baixar_musica($titulo, $musica_url);
	else 
		echo('<div class="legenda text-center"><i class="fas fa-volume-up"></i> 
		Mídia disponível apenas para reproduzir online</div>');
	

  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FOOTER); 
?>