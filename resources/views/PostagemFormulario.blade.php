<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="criador do site" content="mateus cesar">
    <title>TCC</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">


  </head>
  <body>
   
<div class= "container">



<h1>postar algo</h1>
<form action="<?php echo url('postagem/salvarpostagem');?>" method="post" enctype="multipart/form-data" >
{{ csrf_field() }}
  <div class="mb-3">
    <label for="id" class="form-label">id</label>
    <input type="text" readonly class="form-control" id="id" name="id" value="<?php echo $postagem->id?>">
  </div>

  <div class="mb-3">
    <label for="resumo" class="form-label">titulo</label>
    <input type="text" class="form-control form-control @error('nome') is-invalid @enderror" id="nome" name="titulo" value="<?php echo $postagem->titulo?>">
  </div>



  <div class="mb-3">
    <label for="resumo" class="form-label">texto</label>
    <textarea class="form-control form-control @error('texto') is-invalid @enderror" id="exampleFormControlTextarea1" name="texto" rows="10"> <?php echo $postagem->texto?> </textarea>
  </div>



  <div class="mb-3">
    <label for="resumo" class="form-label">video</label>
    <input type="text" class="form-control form-control @error('senha') is-invalid @enderror" id="senha" name="video" value="<?php echo $postagem->video?>">
  </div>

  <div class="mb-3">
    <label for="resumo" class="form-label">link</label>
    <input type="text" class="form-control form-control @error('senha') is-invalid @enderror" id="senha" name="linki" value="<?php echo $postagem->linki?>">
  </div>

  <div class="mb-3">
    <label for="resumo" class="form-label">usuario(id)</label>
    <input type="text" class="form-control form-control @error('senha') is-invalid @enderror" id="senha" name="id_usuario" value="<?php echo $postagem->id_usuario?>">
  </div>


  

  

  <button type="submit" class="btn btn-primary">salvar postagem</button>
</form>










</div>













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
  </body>
</html>
