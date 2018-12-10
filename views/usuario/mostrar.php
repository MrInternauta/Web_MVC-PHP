<h1>Mostrar</h1>


<h3>Listar Usuarios</h3>
<hr>
<?php  while($usuario = $usuarios->fetch_object()):  ?>
<b><?=$usuario->nombre ?></b> - <?=$usuario->apellidos ?> <br>
<?=$usuario->email ?>
<hr>
<br>
<?php  endwhile;  ?>