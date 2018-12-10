<h3>Listar Nota</h3>


<h3>Listar Notas</h3>
<hr>
<?php  while($nota = $notas->fetch_object()):  ?>
<b><?=$nota->titulo ?></b> - <?=$nota->fecha ?> <br>
<?=$nota->descripcion ?>
<hr>
<br>
<?php  endwhile;  ?>