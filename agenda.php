<html>
  <head>
    <title>Agendamento</title>
  </head>
  <body>
    <h1>Agendamento</h1>
    <form method="post" action="processa_agendamento.php">
      <label for="data">Data:</label><br>
      <input type="date" id="data" name="data"><br>
      <label for="hora">Hora:</label><br>
      <input type="time" id="hora" name="hora"><br>
      <label for="descricao">Descrição:</label><br>
      <textarea id="descricao" name="descricao"></textarea><br>
      <button type="submit" id="submit" name="submit" value="Agendar"> 
      <a href="Agendado.php">Clique aqui para ir para a próxima página</a>
    </form> 
    
  </body>
</html>

