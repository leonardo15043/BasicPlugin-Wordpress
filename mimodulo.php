<h1>Configuración de mi modulo</h1>
<form method="post">
  <p>
    Texto: <input type="valor_texto" name="valor_texto" value="<?php echo ($valor_option = get_option('valor_texto'))? $valor_option : ''; ?>">
  </p>
  <p>
    <input type="submit" value="Guardar">
  </p>
</form>
