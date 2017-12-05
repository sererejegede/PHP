<?php


$dir_path = 'file:///C:/Users/oluwatosin/Music/';
$music = array();

function scanMyDir($dir){
	global $music;
	$files = scandir($dir);
	foreach ($files as $file){
		if($file == '.' or $file == '..' or $file == 'desktop.ini')
			continue;
		if(strpos($file, '.jpg'))
			continue;
		/* if(strpos($file, '.mp3')){
			$music[] = $file;
		} */
		elseif(is_dir($dir.'\\'.$file)){
			print '<hr>';
			scanMyDir($dir.'\\'.$file);
		}
		print '<div style= "border: 1px solid black; width:300px; padding: 5px;">'.$file.'</div><br>';


	}
}
scanMyDir($dir_path);

/* scanMyDir($dir_path);
print '<ol>';
foreach ($music as $music_file){
	$fullpath = urlencode($dir_path.'\\'.$music_file);
	print '<li>{$music_file}</li>;
	<a href='play.php?file={$fullpath}'>Play</a>
}
print </ol>;
print '<div style= "border: 1px solid black";>'.$music[$file].'</div><br>';
} */