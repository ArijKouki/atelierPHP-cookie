
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Evaluation</title>
</head>
<body>
<div class="container py-3" >
      <h1>Que pensez vous du cours ?</h1>
      <hr>
      
      <form action="evaluationProcess.php" method="post" enctype="multipart/form-data">  

      <div class="form-check">
      <input class="form-check-input" type="radio" name="avis" value="bon" id="flexRadioDefault1" checked>
      <label class="form-check-label" for="flexRadioDefault1">Bon</label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="avis" value="moyen" id="flexRadioDefault2" >
      <label class="form-check-label" for="flexRadioDefault2">Moyen</label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="avis" value="mauvais" id="flexRadioDefault2" >
      <label class="form-check-label" for="flexRadioDefault2">Mauvais</label>
      </div>
          
      
    
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Voter</button>
      </form>
      
</div>

</body>
</html>