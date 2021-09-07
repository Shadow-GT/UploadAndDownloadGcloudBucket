<?php

require_once('../vendor/autoload.php');
require_once('ValidateFiles.php');
use Google\Cloud\Storage\StorageClient;

class ManageFilesGoogleCloud
{
    private $storage;
    private $bucket;
    private $validate;

    /**
     * @Param $routeToken ruta del json que contiene la llave de la cuenta de google.
     * 
     * @Param $bucket_name el nombre del bucket a utilizar.
     */
   

    public function __construct($routeToken, $bucket_name)
    {
        $this->validate = new ValidateFiles();
        $this->storage = new StorageClient([
            'keyFilePath' => $routeToken
        ]);

        $this->bucket = $this->storage->bucket($bucket_name);
    }

    /**
     * 
     * 
     */

    public function getFilesOfThisBucket()
    {
        $objects = $this->bucket->objects();

        foreach ($objects as $object) {
            print $object->name() . PHP_EOL . '<br>';
        }
    }

    /**
     * @Param $route ruta completa del archivo con su extencion.
     * 
     * @Param string $nameFile nombre con el que se guardara el archivo en el bucket
     */

    public function uploadFile($route, $nameFile)
    {
        $options = [
            'resumable' => true,
            'name' => $nameFile,
        ];

        if ($this->validate->isFileExist($route) && $this->validate->isNameCorrect($nameFile)) {
            $this->bucket->upload(
                fopen($route, 'r'),
                $options
            );
        } else {
            throw new Exception('The specified file does not exist or invalid Name!.');
        } 
    }

    /**
     * @Param $route nombre del archivo que se desea bajar del bucket
     * 
     * @Param $path direccion donde se colocara el archivo, siempre debe terminar con /
     * 
     * @Param string $name nombre que se le asignara al archivo con su respectiva extencion.
     */

    public function downloadFile($route, $path, $name)
    {
        if ($this->validate->isDirExist($path) && $this->validate->isNameCorrect($name)) {
            $file = $this->bucket->object($route);
            $file->downloadToFile($path . $name);
        }else {
            throw new Exception('The specified path does not exist or invalid Name!.');
        } 
       
    }

}


/*$demo = new ManageFilesGoogleCloud('../tokenjs2.json', 'siac-vdf');

try{
    //$demo->uploadFile("../public/files/demo_homas 32#!'.txt", 'cargo.txt');
    //$demo->downloadFile('demo/cargarFile', '../public/files/', 'cargo.txt');
    $demo->getFilesOfThisBucket();
} catch (Exception $e){
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}*/


