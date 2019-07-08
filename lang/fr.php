<?php 

	include_once('array_comman.php');

	// header
	$lang['header'] = array(
		'talk_to_us' => 'Parle-nous'
	);
	
	$lang['menu'] = array(
		'about_us' => 'à propos de nous',
		'services' => 'Prestations de service',
		'eroupe' => "GearSpect L'Europe",
		'india' => 'GearSpect Inde',
		'contact' => 'Contact'
	);
		
	$lang['footer'] = array(
		'rights' => '2019 par GearSpect. Tous les droits sont réservés'
	);
	
	$lang['index']['slider'] = array(
		'eroupe' => "GearSpect L'Europe",
		'india' => 'GearSpect Inde',
		'text' => 'Vous pouvez trouver le matériel et les pièces pour vos industries',
		'read_more' => 'Lire la suite'
	);
	
	$areasDataArr = array(
		array(
			'title' => 'Délai de livraison ponctuel',
			'text' => 'Expliquez-vous comment toute cette idée erronée de dénoncer le plaisir et notre système de naissance et de complicité vantant la douleur.'
		),
		array(
			'title' => 'Technologie intelligente',
			'text' => "Pour prendre un exemple trivial, lequel d'entre nous entreprend jamais un exercice physique laborieux, sauf un avantage."
		),
		array(
			'title' => 'Equipe professionelle',
			'text' => 'Dénonçant le plaisir et louant la douleur était né et nous vous donnerons un compte-rendu complet pour expliquer les enseignements actuels.'
		),
	);
	
	$i = 0; 
	foreach($areasDataArr as $arr){
		$areasArr[] = array_merge($areas[$i],$arr); $i++;
	}
	
	$lang['index']['container'] = array(
		'title' => 'Nous menons <br/> prestataire de services',
		'areas' => $areasArr,
	);
		
	$lang['index']['clients'] = array(
		'title' => 'Clients précieux',
		'img' => $clients
	);
	
	$silderDataArr = array(
		array(
			'text' => "D'autre part, nous dénonçons avec le travail les indignations justes détestent les hommes, nous sommes séduits, démoralisons que tout charme notre moment est à accueillir.",
			'position' => 'Engineer'
		),
		array(
			'text' => "D'autre part, nous dénonçons avec le travail les indignations justes détestent les hommes, nous sommes séduits, démoralisons que tout charme notre moment est à accueillir.",
			'position' => 'Engineer'
		),
		array(
			'text' => "D'autre part, nous dénonçons avec le travail les indignations justes détestent les hommes, nous sommes séduits, démoralisons que tout charme notre moment est à accueillir.",
			'position' => 'Engineer'
		),
	);
	
	$i = 0; 
	foreach($silderDataArr as $arr){
		$sliderArr[] = array_merge($slider[$i],$arr); $i++;
	}
		
	$lang['index']['words'] = array(
		'title' => 'Mots de clients',
		'slider' => $sliderArr
	);
	
	$eventsDataArr = array(
		array(
			'title' => "L’application de l’analyse, l’amplification de son pouvoir et le maintien des entreprises à l’abri de résultats risqués ....",
			'text' => "Nous avons remporté le prix de la meilleure usine de l'année 2017 et 18.",			
			'date' => '08 août',			
		),
		array(
			'title' => "L’application de l’analyse, l’amplification de son pouvoir et le maintien des entreprises à l’abri de résultats risqués ....",
			'text' => "Nous avons remporté le prix de la meilleure usine de l'année 2017 et 18.",			
			'date' => '08 août',			
		),
		array(
			'title' => "L’application de l’analyse, l’amplification de son pouvoir et le maintien des entreprises à l’abri de résultats risqués ....",
			'text' => "Nous avons remporté le prix de la meilleure usine de l'année 2017 et 18.",			
			'date' => '08 août',			
		),
	);
	
	$i = 0; 
	foreach($eventsDataArr as $arr){
		$eventsArr[] = array_merge($events[$i],$arr); $i++;
	}
	
	$lang['index']['events'] = array(
		'title' => 'Dernières nouvelles des événements',
		'slider' => $eventsArr
	);
	
	
?>