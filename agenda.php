<html>
  <head>
    <title>Agendamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center">Agendamento</h1>
      <form method="post" action="Agendado.php" class="mx-auto w-50">
        <div class="form-group">
          <div class="form-group">
          <label for="data">Data:</label>
          <input type="date" id="data" name="data" class="form-control">
          </div>
          <div class="form-group">
        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" class="form-control">
         </div>
          <div class="form-group">
          <label for="descricao">Descrição:</label>
          <textarea id="descricao" name="descricao" class="form-control"></textarea>
        </div>
        <form action="/Agendado.php" method="POST">
        <input type="submit" id="submit" name="submit" value="Agendar" class="btn btn-primary">
      
  </body>
</html>

