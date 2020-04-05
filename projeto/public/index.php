<?php
header("Content-Type: text/html; charset-utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

//echo "<b> Diretório da página:</b> " . DIRPAGE . "<br>";
//echo "<b> Diretório físico do servidor:</b> " . DIRREQ . "<br>";
//echo "<b> Diretório de imagens:</b> " . DIRIMG;
//use App\teste;
//$teste = new teste();

use Src\Classes\ClassRoutes;

class Teste extends ClassRoutes
{
    public function __construct()
    {
        $v = $this->getRota();
        var_dump($v);
    }
}
$new = new Teste();
