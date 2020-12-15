<?php
class Principal{
    public function formPrincipal($path){
        foreach ($path as $value) {?>
            <a href="<?php echo $value[1];?>">
            <?php  
                echo $value[0]; 
            ?>
            </a>
            <br>
        <?php
        }
    }
}

?>