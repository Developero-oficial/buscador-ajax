<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exportar informe Excel</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="page-header text-left">
    <h1>Buscador en tiempo real <small>con Jquery(ajax), Php y Mysql</small></h1>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></span>
        <input type="text" class="form-control" id="search" placeholder="Search video">
      </div>
    </div>
    <div class="col-md-3 col-md-offset-3" id="result">
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>