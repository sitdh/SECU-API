<?php namespace App\Http\Modules;

class CheckerModule {

	public static function complie($lang, $sourceCode, $input="")
	{	
		$checker = new CheckerModule();
		$milliseconds = round(microtime(true) * 1000);
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

	public static function checkTestCase()
	{
		# next sprint
	}

	private function createFile($fileName, $content)
	{
		$myfile = fopen($fileName, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}

}
