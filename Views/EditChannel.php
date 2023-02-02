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
        *{
            box-sizing: border-box;
            margin:0;
            padding: 0;
        }
        /* body{
            background: #999798;
        } */
        .image{
          margin-left: 460px;
        }
        .image img{
            width: 150px;
            height:140px;
            border-radius:50% 50% 50% 50%
        }
    </style>
</head>
<body>
<div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
        <h1 class="display-8">Edit my Page</h1>
    </header>
</div>
<section class="container mt-5 text-light p-2 rounded-3">
<div class="row">
<div class=" col-md-12 image">
    <a href="">
    <img src="/TeramaFlix/channelImage/<?= $pageInfo['Photo']?>" class="img-fluid justify-content-center" />
    </a></div>
</div>
<i class="fa-thin fa-camera"></i>
<div class="row">
<div class=" col-md-12"><h2 class="text-dark text-center"><?= $pageInfo['PageName'] ?></h2></div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>      
</html>