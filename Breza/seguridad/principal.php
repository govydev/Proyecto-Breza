<?php
class Principal{
    public function formPrincipal($path){
        foreach ($path as $value) {?>
            <a href="<?=$value[1]?>"><?=$value[0]?></a>
            
            <br>
        <?}
    }
}

?>