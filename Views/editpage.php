<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <style>
        /* body{
            background: #999798;
        } */
       img{
        width: 150px;
            border-radius:25% 25% 25% 25%;
        }
        .btn {
  text-transform: unset !important;
}
    </style>
</head>
<body class="bg-light">
 <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 mt-5 pt-5">
        <a href="<?= base_url('/') ?>"> <i class="fa fa-reply" aria-hidden="true"></i>Retour à l'accueil</a>
            <form method="post" action="<?= base_url('editPagePost')?>" class="form mb-3" autocomplete="off" enctype="multipart/form-data">
            <div class="row z-depth-3">  
            <div class="col-sm-4 bg-info rounded-left">
                    <div class="card-block text-center text-white">
                    
                        <!-- <a href=""><i class="fas fa-user-tie fa-7x mt-5"></i></a> -->
                       <a href=""><img src="/TeramaFlix/channelImage/<?= $pageInfo['Photo']?>" class="img-fluid justify-content-center" /></a>
                       <!-- <h2 class="font-weight-bold mt-0"><?= $pageInfo['PageName'] ?></h2>
                        <p><?= $pageInfo['Categorie'] ?></p> -->
                        <div>
                            <label for="photo" class="button bg-black">change Photo</label>
                            <input type="file" name="photo" id="photo" hidden>
                            <span><?= isset($validation) ? display_error($validation,'photo'): '' ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 bg-white rounded-right">
                    <h3 class="mt-3 text-center">Information Of My Page</h3>
                    <hr class="badge-primary mt-0 w-100">
                    <!-- <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Name of Channel:</p>
                            <h5 class="text-muted"><?= $pageInfo['PageName'] ?></i></a></h5>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Type of Channel:</p>
                            <h5 class="text-muted"><?= $pageInfo['Categorie'] ?></h5>
                            <a href=""><i class="far fa-edit fa-2x mb-4"></i></a>
                        </div>
                    </div> -->
                       
                        <?= csrf_field()  ?>
                                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                                <div><?= session()->getFlashdata('fail'); ?></div>
                                <?php endif ?>

                                <?php if(!empty(session()->getFlashdata('Success'))) : ?>
                            <div><?= session()->getFlashdata('Success'); ?></div>
                            <?php endif ?>
                            <input type="hidden" name="old_image" value="/TeramaFlix/channelImage/<?= $pageInfo['Photo']?>">
                        <div class="row">
                        <div class="col-md-6">
                        <label class="font-weight-bold">Name of Channel:</label>
                        <div class="form group mt-3">	
                        <input type="text" class="form-control" name="NomPage"  value="<?= $pageInfo['PageName'] ?>" >
                        <span><?= isset($validation) ? display_error($validation,'NomPage'): '' ?></span>
                        </div>	
                        </div>
                        <div class="col-md-6">
                        <p class="font-weight-bold">Type of Channel:</p>
                            <div class="form group mt-3">
                            <select class="form-control" name="categorie"aria-label="Default select example">
                                    <option selected><?= $pageInfo['Categorie'] ?></option>
                                    <option value="Films">Films</option>
                                    <option value="Series">Series</option>
                                    <option value="Animes">Animes</option>
                                    <option value="Demande">Demande</option>
                                    </select>
                            </div>
                        </div>
                        </div>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" name="description" id="" cols="20" rows="5"><?= $pageInfo['Description'] ?></textarea>
                            <label for="floatingTextarea">Description</label>
                            <span><?= isset($validation) ? display_error($validation,'Description'): '' ?></span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form group mt-3">
                            <input type="submit" class="btn btn-info" name="" value="Save Change" class="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form group mt-3">
                            <a href="<?= base_url('Upload') ?>" class="btn btn-info" role="button" target="_blank">My Video</a>
                            </div>
                            </div>
                            </div>
                            </div>
	 	</form>
                
            </div>
        </div>
    </div>
 </div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>      
</html>