<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/logo/TeramaFlixpic.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>login</title>
	<style>
        *{
            box-sizing: border-box;
            margin:0;
            padding: 0;
        }
        body{
            background: #999798;
        }
		form span{
            color: red;
        }
        form a{
            text-decoration: none;
        }
    </style>
</head>
<body>
 <div class="container-fluid bg-dark text-light py-3">
	<header class="text-center">
		<h4 class="display-6">Login</h4>
	</header>
 </div>
 <section class="container mt-5 bg-dark w-25 text-light p-2 rounded-3">
<form method="post" action="<?= base_url('login')?>" class="form mb-3" autocomplete="off">
<?= csrf_field(); ?>
<?php if(!empty(session()->getFlashdata('fail'))) : ?>
        <div><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
		<label for="">E-mail</label>
	 	<div class="form group mt-3">	
		<input type="email" class="form-control" name="mail" placeholder="enter your email" >
		<span class="text-danger text-sm"><?= isset($validation)? display_error($validation,'mail'): '' ?> </span>
		</div>	
			<div class="form group mt-3">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password" placeholder="enter your password" >
			<span class="text-danger text-sm"><?= isset($validation)? display_error($validation,'password'): '' ?> </span>
			</div>
        	<div class="form group mt-3">
	          <input type="submit" class="btn btn-info" name="log" value="login now" class="">
            </div>
	 	</form>
		<br>
		<a href="<?= base_url('registration')?>" class="link">haven't an account</a>
 </section>   
	 	
    </body>
</html>