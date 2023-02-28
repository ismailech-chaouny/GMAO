<!DOCTYPE html>
<html>

<head>
  <title>Ajouter Etat</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.css"
    rel="stylesheet">

  <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.js"></script>
</head>

<body>
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer un etat</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
    <form class="form form-vertical" method="post" action="{{route('Etat.store')}}" >
        @csrf

    <label for="etat">etat: </label>
    <input type="text" class="form-control" name="etat" value="">
    <label for="etat">color: </label>
    <div id="cp-component" class="input-group">
      <input type="text" name="color" value="#269faf" class="form-control" />
      <span class="input-group-addon"><i></i></span>
    </div>
  <button type="submit"
  class="btn btn-primary me-1 mb-1">Créer un etat</button>
</form>
                </div>
            </div>
        </div>
    </div>
  <script type="text/javascript">
    $(function () {
      $('#cp-component').colorpicker();
    });
  </script>
</body>

</html>