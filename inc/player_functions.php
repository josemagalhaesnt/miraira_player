<?php

	function exibir_creditosMusica ($titulo, $autor, $interprete, $album) {
		$html = '<div id="creditos" class="musica">';

		if ($titulo != "") {
			$html .= '<span class="campo text text-center">Título: </span>';
			$html .= '<span class="informacao text text-center">' . $titulo . '</span>' .'<br>';
		}

		if ($autor != "") {
			$html .= '<span class="campo text text-center">Autor: </span>';
			$html .= '<span class="informacao text text-center">' . $autor . '</span>'.'<br>';
		}

		if ($interprete != "") {
			$html .= '<span class="campo text text-center">Intérprete: </span>';
			$html .= '<span class="informacao text text-center">' . $interprete . '</span>' .'<br>';
		}

		if ($album != "") {
			$html .= '<span class="campo text text-center">Álbum: </span>';
			$html .= '<span class="informacao text text-center">' . $album . '</span>' .'<br>';
		}

		$html .= '</div>';

		echo $html;

	}

	function exibir_capaAlbum ($capa_url) {

		if ($capa_url != "") {
			$capa = '<div class="mx-auto capa-album">';
			$capa .= '<img class="img-fluid img-thumbnail" src="' . $capa_url . '" width="200" height="200"/>';
			$capa .= '</div>';

			echo $capa;
		}

	}

	function tocar_musica($url) {
		$player = '<div class="container">';
		$player .= '<div id="player">';

		if ($url != "") {
			$player .= '<audio src="' . $url . '" preload="none" oncontextmenu="return false;" controls> Seu navegador não suporta a execução desse áudio. </audio>';
		}
		
		$player .= '</div></div>';

		echo $player;
		
	}

	function exibir_tituloVideo($titulo) {

		$html = "";

		if ($titulo != "") {

			$html = '<h1 class="text text-center titulo-video">'. $titulo .'</h1>';
		}
		
		echo $html;
	}

	function tocar_video($url) {

		$player = '<div id="player" class="col-md-12">';
		$player .= '<video width="auto" height="auto" oncontextmenu="return false;" controls>';
		$player .= '<source src="' . $url . '" type="video/webm">';
		$player .= '</video></div>';
		
		echo $player;
	}

	function exibir_creditosVideo($autor,$descricao) {

		$html = '<div class="container">';
		$html .= '<div id="creditos" class="col-md-12">';

		if ($autor != "") {
			$html .= '<div class="autor"><span class="text text-center campo">Realização: </span>
				<span class="text text-center informacao autor">'. $autor . '</span><br></div>';
		}

		if ($descricao != "") {
			$html .= '<div class="descricao"><p class="text text-center informacao">'. $descricao .'</p>
			</div>';
		}

		$html .= '</div></div>';

		echo $html;
	}

?>