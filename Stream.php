<?php

class Stream{

	public $fileName;
    public $pathFile;

	public function readFileIntoString(){
		$filesopen = fopen($this->fileName,"r") or exit("Unable to open file!"); 
        $filearray = ""; 
        while (!feof($filesopen)){ 
            $filechar = fgetc($filesopen); 
            $filearray .= $filechar;             
        } 
        
        fclose($filesopen); 
        return $filearray; 
	}

    public function createWriteFile($contentFile, $fileName){

        $file = fopen($this->pathFile . '/' . $fileName,"w");
        fwrite($file,$contentFile);
        fclose($file);

    }

}


?>