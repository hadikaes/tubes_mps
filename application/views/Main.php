<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
      
      body {
        background: #007bff;
        background: linear-gradient(to right, #0062E6, #33AEFF);
      }

      h1, h5, h3, p {
        color: white;
      }

  </style>
</head>
<body>

<div class="text-center">
  <h1>Mesin Penerjemah berbasis Statistik</h1>
  <p>Terjemahan Bahasa Sunda - Bahasa Indonesia</p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Bahasa Sunda</h3>
      <form>
        <div class="form-group">
          <textarea rows="10" class="form-control" id="bahasa_asal">
          </textarea>
        </div>
        <button type="input" class="btn btn-default">translate</button>
      </form>
    </div>
    <div class="col-sm-6">
      <h3>Bahasa Indonesia</h3>
      <textarea rows="10" class="form-control" id="bahasa_asal" disabled="true">
          </textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-6">
    <h5><b>Bleu Score :</b> 130</h5>      
    </div>
  </div>
  <br>
</div>
</body>
</html>
