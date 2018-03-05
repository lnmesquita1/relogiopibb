<?php require_once ("util/QuadroHorariosUtil.php");?>

              <?php 
                $quadroUtil = new QuadroHorariosUtil();
                             
                
              ?>
              <?= $quadroUtil->drawQuadro() ?>