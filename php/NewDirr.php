<?php

class NewDirr{
public function CrearDire ($Directorio)
{

    if (!file_exists($Directorio))
    {
    mkdir($Directorio,0777,true);
    }
    return 1;
}
};

?>