<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 jumbotron mx-auto">
<form action="{{url('/')}}"method="POST">{{csrf-field()}}

    <div class="form-group">
        <h2>Enviem o seu contato</h2>
    </div>
    <div class="form-group">
       <label for="nome">Nome</label>
       <input type="text" class="form-control" placeholder="Seu nome">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" placeholder="Seu email">
     </div>
     <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" class="form-group" cols="10" rows="5" placeholder="Sua mensagem"></textarea>
     </div>
     <button type="submit" class="btn btn-warning">Enviar</button>
</form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
