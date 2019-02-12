<?php 
  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT']. '/miraira_player/config.php');
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_HEADER); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FUNCTIONS);

  /* ALTERE AQUI - Colocar as informações da música dentro das aspas */

  /* Caso a informação seja vazia ou desconhecida, deixar aspas em branco */

  /* Créditos da Música */
  $titulo = "Nossa Senhora do Rosário Bendito";
  $autor = "Calé Alencar";
  $interprete = "Loas Maracatu Nação Fortaleza";
  $album = "Salve Mãe Pequena Jenipapo-Kanindé";

  /* Links */
  $capa_url = "";
  $musica_url = "audios/14.mp3";
  $download = "sim";

  /* NÃO ALTERE AS LINHAS ABAIXO */

  /* Funções do Player */

	/* Informações da Música */

		exibir_capaAlbum($capa_url);

		exibir_creditosMusica($titulo,$autor,$interprete,$album);

	/* Player de áudio */

		tocar_musica($musica_url);

	/* Download */
		baixar_musica($download, $musica_url);

  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FOOTER); 
?>