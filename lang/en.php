<?php 

	include_once('array_comman.php');

	// header
	$lang['header'] = array(
		'talk_to_us' => 'Talk to us'
	);
	
	$lang['menu'] = array(
		'about_us' => 'About us',
		'services' => 'Services',
		'eroupe' => 'GearSpect Europe',
		'india' => 'GearSpect India',
		'contact' => 'Contact'
	);
	
	$lang['footer'] = array(
		'rights' => '2019 by GearSpect. All Rights Reserved'
	);
	
	$lang['index']['slider'] = array(
		'eroupe' => 'GearSpect Europe',
		'india' => 'GearSpect India',
		'text' => 'You can find the material & parts for your industries',
		'read_more' => 'Read More'
	);
	
	$areasDataArr = array(
		array(
			'title' => 'Punctual Delivery Time',
			'text' => 'Explain to you how all this mistaken idea of denouncing pleasure & our praising pain born & complete system.'
		),
		array(
			'title' => 'Smart Technology',
			'text' => 'To take a trivial example, which of us ever undertakes laborious physical exercise except some advantage from it.'
		),
		array(
			'title' => 'Professional Team',
			'text' => 'Denouncing pleasure & praising pain was born and we will give you a complete account expound actual teachings.'
		),
	);
	
	$i = 0; 
	foreach($areasDataArr as $arr){
		$areasArr[] = array_merge($areas[$i],$arr); $i++;
	}
	
	$lang['index']['container'] = array(
		'title' => 'We are leading <br/> gear service provider',
		'areas' => $areasArr,
	);
		
	$lang['index']['clients'] = array(
		'title' => 'Valuable clients',
		'img' => $clients
	);
	
	$silderDataArr = array(
		array(
			'text' => 'On the other hand, we denounce with work righteous indignations dislike men we are beguiled demoralize that all charms our moments is to be welcomed.',
			'position' => 'Engineer'
		),
		array(
			'text' => 'On the other hand, we denounce with work righteous indignations dislike men we are beguiled demoralize that all charms our moments is to be welcomed.',
			'position' => 'Engineer'
		),
		array(
			'text' => 'On the other hand, we denounce with work righteous indignations dislike men we are beguiled demoralize that all charms our moments is to be welcomed.',
			'position' => 'Engineer'
		),
	);
	
	$i = 0; 
	foreach($silderDataArr as $arr){
		$sliderArr[] = array_merge($slider[$i],$arr); $i++;
	}
		
	$lang['index']['words'] = array(
		'title' => 'Words From Customers',
		'slider' => $sliderArr
	);
	
	$eventsDataArr = array(
		array(
			'title' => 'Application of analytics, amplify its power, and steer companies away from risky outcomes....',
			'text' => 'We won best factory award of the year 2017 & 18.',			
			'date' => '08 AUG',			
		),
		array(
			'title' => 'Application of analytics, amplify its power, and steer companies away from risky outcomes....',
			'text' => 'We won best factory award of the year 2017 & 18.',			
			'date' => '08 AUG',			
		),
		array(
			'title' => 'Application of analytics, amplify its power, and steer companies away from risky outcomes....',
			'text' => 'We won best factory award of the year 2017 & 18.',			
			'date' => '08 AUG',			
		)
	);
	
	$i = 0; 
	foreach($eventsDataArr as $arr){
		$eventsArr[] = array_merge($events[$i],$arr); $i++;
	}
	
	$lang['index']['events'] = array(
		'title' => 'Latest From Events',
		'slider' => $eventsArr
	);
	
	
?>