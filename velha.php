<?php require "receive.php" ?>
<?php require "layout/_header.php" ?>


<ul class="nav nav-pills pull-right">
  <li role="presentation"><form method="POST"><input type="submit" value="Novo Jogo" name="new" id="new" class="btn btn-lg btn-primary"></form></li>
</ul>

<h3 class="text-muted">Jogo da Velha</h3>

<span class='help-block alert-danger'><?= @$ganhador=="1" ?" O Jogador $jogador Venceu!" :""; ?></span>
<span class='help-block alert-danger'><?= @$ganhador=="2" ?" O Jogo empatou" :""; ?></span>

<div class="jumbotron">
  
  <form method="POST">
   
    <table class="velha">
      <tr>
        <td id="A"><button class="<?= @$field[0]=="X"?"X":"O"; ?>" name="botoes" value="0" <?= @$field[0]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[0] ?></button> <input type="hidden" name="field[0]" value="<?= @$field[0];  ?>"></td>
        <td id="B"><button class="<?= @$field[1]=="X"?"X":"O"; ?>" name="botoes" value="1" <?= @$field[1]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[1] ?></button> <input type="hidden" name="field[1]" value="<?= @$field[1];  ?>"></td>
        <td id="C"><button class="<?= @$field[2]=="X"?"X":"O"; ?>" name="botoes" value="2" <?= @$field[2]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[2] ?></button> <input type="hidden" name="field[2]" value="<?= @$field[2];  ?>"></td>
      </tr>
      <tr>
        <td id="D"><button class="<?= @$field[3]=="X"?"X":"O"; ?>" name="botoes" value="3" <?= @$field[3]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[3] ?></button> <input type="hidden" name="field[3]" value="<?= @$field[3];  ?>"></td>
        <td id="E"><button class="<?= @$field[4]=="X"?"X":"O"; ?>" name="botoes" value="4" <?= @$field[4]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[4] ?></button> <input type="hidden" name="field[4]" value="<?= @$field[4];  ?>"></td>
        <td id="F"><button class="<?= @$field[5]=="X"?"X":"O"; ?>" name="botoes" value="5" <?= @$field[5]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[5] ?></button> <input type="hidden" name="field[5]" value="<?= @$field[5];  ?>"></td>
      </tr>
      <tr>
        <td id="G"><button class="<?= @$field[6]=="X"?"X":"O"; ?>" name="botoes" value="6" <?= @$field[6]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[6] ?></button> <input type="hidden" name="field[6]" value="<?= @$field[6];  ?>"></td>
        <td id="H"><button class="<?= @$field[7]=="X"?"X":"O"; ?>" name="botoes" value="7" <?= @$field[7]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[7] ?></button> <input type="hidden" name="field[7]" value="<?= @$field[7];  ?>"></td>
        <td id="I"><button class="<?= @$field[8]=="X"?"X":"O"; ?>" name="botoes" value="8" <?= @$field[8]!="" | @$ganhador!=""?"disabled" :"";?> > <?= @$field[8] ?></button> <input type="hidden" name="field[8]" value="<?= @$field[8];  ?>"></td>
      </tr>
    </table>
    <input type="hidden" name="jogador" value="<?= @$jogador;  ?>"></td>
    <input type="hidden" name="jogada" value="<?= @$jogada;  ?>"></td>

    <h3>Jogador Atual: <?= @$jogada; ?></h3>
    
  </form>

  <?php require "layout/_footer.php" ?>