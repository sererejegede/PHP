<?php


class FileOpener
{
    public $nameOfFile;                                 //CLASS PROPERTY

    public function __construct($fileName)
    {
        $this->nameOfFile = $fileName;                  //CONSTRUCTOR
    }

    public function fileOpeners()
    {
        $another = fopen($this->nameOfFile, "a+");
        return $another;
    }

    public function writeToFile($whatToWrite)
    {
        fwrite($this->fileOpeners(), $whatToWrite);
    }

    public function fileReader()
    {
        return file_get_contents($this->nameOfFile);
    }

    public function fileCloser()
    {
        $whereToWriteTo = $this->fileOpeners();
        if (is_file($this->nameOfFile))
            fclose($whereToWriteTo);
    }
    public static function fileList($path){
        $anArray = array();
        $files = scandir($path);
        foreach ($files as $file){
            if( $file == "." || $file == ".."){
                continue;}
            if (substr($file, -4, 4) == ".txt")
                $anArray[] = $file;


        }
        return $anArray;
    }

    public function deleteFile()
    {
        if(is_file($this->nameOfFile))
        unlink($this->nameOfFile);
        else echo "File doesn't exist";
    }

    /**
     * @return mixed
     */
    public function getNameOfFile()
    {
        return $this->nameOfFile;
    }
    //        $fileArray = array();
    //            if ((substr($file, -4, -4)) == ".mp3") {
//                $fileArray[] = $file;
}


