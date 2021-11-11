<?php

		$dir    = 'data';
		$files = scandir($dir);

		$files = array_diff($files, array('.', '..'));
		$files = array_values($files);
		$arr = count($files);

        for ($x = 0; $x < $arr; $x++) {
            //echo file_get_contents("data/".$files[$x])."<br>";
            $a = trim(str_replace(".txt","",$files[$x]));
            $b = file_get_contents("data/".$files[$x]);
            $c = $x+1;

        
        echo $c." ".$a." ".$b;
?>