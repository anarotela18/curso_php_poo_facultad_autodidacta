<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>
  </head>
  <body>
    <form action="procesar.php" method="post">
      <label>Valor 1</label>
      <input type="text" name="valor1">
      <br><br>
      <label>Valor 2</label>
      <input type="text" name="valor2">
      <br><br>
      <select name="opcion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="division">Division</option>
        <option value="multiplicacion">Multiplicacion</option>
      </select>
      <br><br>
      <button>Calcular</button>
    </form>
  </body>
</html>
