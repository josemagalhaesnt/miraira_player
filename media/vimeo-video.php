<?php 
  /* Configurações do Player - NÃO APAGUE AS LINHAS ABAIXO PARA EVITAR PROBLEMAS */
  require_once($_SERVER['DOCUMENT_ROOT'].'/miraira_player/config.php'); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_HEADER); 
  require_once($_SERVER['DOCUMENT_ROOT']. PLAYER_FUNCTIONS);

  /* ALTERE AQUI - Colocar as informações da música dentro das aspas */

  /* Caso a informação seja vazia ou desconhecida, deixar aspas em branco */

  /* Créditos da Música */
  $titulo = "Índios no Brasil - Quem são eles?";
  $autor = 'Vídeo nas Aldeias: <a href="http://www.videonasaldeias.org.br">www.videonasaldeias.org.br</a>';
  $descricao = "A série de dez programas educativos “Índios no Brasil”, produzida para renovar o currículo escolar, é apresentada pelo líder indígena Ailton Krenak e mostra, sem intermediários, como vivem e o que pensam os índios de nove povos dispersos pelo território nacional.

  O primeiro programa da série traz à tona, por meio de entrevistas com populares em diversas partes do país, o desconhecimento e os estereótipos do senso comum sobre a realidade indígena que está na base do processo de discriminação sofrido por estas comunidades. O índio é aquele que anda pelado no mato? O índio está acabando? O índio está deixando de ser índio? Os nove personagens escolhidos para representarem seus povos vão rebatendo um a um estes equívocos. ";

  /* Links */
  $video_url = "https://player.vimeo.com/video/15635463";

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