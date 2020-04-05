<?php

namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes
{
    use TraitUrlParser;
    private $Rota;
    #Método de retorno da rota
    public function getRota()
    {
        $Url = $this->parseurl();
        $I = $Url[0];
        $this->Rota = array(
            "" => "",
            "home" => "ControllerHome",
            "sistemap" => "ControllerSitemap"
        );
        if (array_key_exists($I, $this->Rota)) {
            if (file_exists(DIRREQ . "app/controller/{$this->Rota[$I]}.php")) {
                return $this->Rota[$I];
            } else {
                return "ControllerHome";
            }
        } else {
            return "ControllerHome";
        }
    }
}
