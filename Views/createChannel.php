<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <style>
        *{
            box-sizing: border-box;
            margin:0;
            padding: 0;
        }
        body{
            background: #999798;
        }
        
    </style>
</head>
<body>
<div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
        <h1 class="display-8">Create your Page</h1>
    </header>
</div>
<section class="container mt-5 bg-dark w-50 text-light p-2 rounded-3">
<form action="<?= base_url('createPage'); ?>" method="POST" class="row g-3 p-3" enctype="multipart/form-data">
<?= csrf_field()  ?>
        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
        <div><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>

        <?php if(!empty(session()->getFlashdata('Success'))) : ?>
       <div><?= session()->getFlashdata('Success'); ?></div>
       <?php endif ?>
  <div class="col-md-6">
    <label class="form-label">Nom de la Page</label>
    <input type="text" class="form-control" name="NomPage" value="<?= set_value('NomPage'); ?>">
    <span><?= isset($validation) ? display_error($validation,'NomPage'): '' ?></span>
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Photo du Page</label>
    <input type="file" class="form-control" name="Photo" value="<?= set_value('Photo'); ?>">
    <span><?= isset($validation) ? display_error($validation,'Photo'): '' ?></span>
  </div>
  <div class="col-12">
    <label for="" class="form-label">Déscription du Page</label>
    <textarea class="form-control" name="Description" placeholder="Description" value="<?= set_value('Description'); ?>">
</textarea>
<span><?= isset($validation) ? display_error($validation,'Description'): '' ?></span>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Categorie de Page</label>
    <select name="Categorie" class="form-control" >
                    <option value="Films">Films</option>
                    <option value="Series">Series</option>
                    <option value="Animes">Animes</option>
                    <option value="Demande">Demande</option>
                </select>
        <div class="invalid-feedback">Categorie is required</div>
  </div>
  <!-- <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div> 
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Créer</button>
  </div>
</form>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>      
</html>