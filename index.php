<?php 

include_once('Parsedown.php');

$page = isset($_GET['page']) ? $_GET['page'] : false;
$baseDir =  $_SERVER['HTTP_HOST'] .  dirname($_SERVER['PHP_SELF']);

$file = 'error.php';
$title = 'Page Not Found';
$subtitle = 'Oooooops';
$backgroundImage = '404.jpg';

$contentVars = array(
	'title' => 'Page Not Found',
	'subtitle' => 'Oooooops',
	'backgroundImage' => '404.jpg',
	'baseDir' => $baseDir
	);

if($page)
{	
	$page = preg_replace('/\.\.\//', '', $page);
	
	$params = explode('/', $page);
	$lastUrl = end($params);
	array_pop($params);
	$page = implode('/', $params);	
	
	$requestedFile = $page . '/' . $lastUrl . '.html';

	if(file_exists($requestedFile = $page . '/' . $lastUrl . '.html'))
	{
		$file = $requestedFile;		
	}
	else if(file_exists($requestedFile = $page . '/index.html'))
	{
		$file = $requestedFile;
	}
	
}

$parseDown = new ParseDown();

$header = file_get_contents('includes/header.php');

$content = file_get_contents($file);
$footer = file_get_contents('includes/footer.php');

preg_match_all('/(@__)(.*)(__)/', $content, $varArray);

$vars = $varArray[2];

foreach ($vars as $key => $var) {
	$start = strpos($content, "@__". $var)+strlen("@__". $var."__");
	$end = strpos($content, PHP_EOL, $start) - $start;
	$contentVars[$var] = trim(substr($content, $start, $end));	
}

foreach($contentVars as $key => $var)
{			
	$header = str_replace('__'.$key.'__', $var, $header);	
	$content = str_replace('__'.$key.'__', $var, $content);
	$footer = str_replace('__'.$key.'__', $var, $footer);
}	



echo $header;		
echo $parseDown->text($content);
echo $footer;

?>

<script>
	window.onload = function()
	{

		var containerContext = document.querySelector('article .container');
		var tables = containerContext.querySelectorAll('table');
		for(k = 0; k<tables.length;k++)
		{
			tables[k].classList.add('table');			
			tables[k].classList.add('table-striped');
		}

		var links = containerContext.querySelectorAll('a');
		for(k = 0; k<links.length;k++)
		{
			//var linksClasses = ["btn", "btn-default", "col-xs-12", "col-xs-10", "col-xs-offset-1", "col-lg-6", "col-lg-offset-3"];
			
			if (links[k].hostname != window.location.hostname) {
				links[k].target = '_blank';
			}

			// linksClasses.forEach(function(cls)
			// {
			// 	links[k].classList.add(cls);

			// });
		}

		var images = containerContext.querySelectorAll('img');
		for(k = 0; k<images.length;k++)
		{
			var imagesClasses = ["img-responsive"];
			imagesClasses.forEach(function(cls)
			{
				images[k].classList.add(cls);			
			});
		}

		
	}
</script>