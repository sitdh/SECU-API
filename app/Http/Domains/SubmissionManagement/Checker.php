<?php namespace App\Http\Domains\SubmissionManagement;

class Checker {

	public static function complie($lang, $sourceCode, $input="")
	{	
		$checker = new Checker();
		$milliseconds = round(microtime(true) * 1000);
		$milliseconds .= $checker->randomHash();
		$cmdInput = "";

		if ($lang == 'python') {
			$mainFileName = "./temp/main_".$milliseconds.".py";
			$inputFileName = "./temp/input_".$milliseconds.".txt";

			// create file			
			$checker->createFile($mainFileName, $sourceCode);
			if ($input != "") {
				$checker->createFile($inputFileName, $input);
				$cmdInput = " <".$inputFileName;
			}
			
			// complier 
			$cmd = "python ".$mainFileName.$cmdInput." 2>&1; echo $?;"; 
			$output = shell_exec($cmd);

			// delete file 
			unlink($mainFileName);
			if ($input != "") 
				unlink($inputFileName);

		}else{
			return "Complier not supported your language";
		}

		return $output;
	}

	public static function checkTestCase($lang, $sourceCode, $input="", $output="")
	{
		$checker = new Checker();
		$result = $checker->complie($lang, $sourceCode, $input);
		$result = trim(preg_replace('/\s+/', ' ', $result));

		return $result == $output ? true : false;
	}

	private function createFile($fileName, $content)
	{
		$myfile = fopen($fileName, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}

	private function randomHash()
	{
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
		                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
		                 .'0123456789'); // and any other characters
		shuffle($seed); // probably optional since array_is randomized; this may be redundant
		$rand = '';
		foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

		return $rand;
	}

}
