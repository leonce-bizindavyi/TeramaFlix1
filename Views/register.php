<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/logo/TeramaFlixpic.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://cdn.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" >
    <title>register</title>
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
        <h1 class="display-6">Registration</h1>
    </header>
</div>
<section class="container mt-4 bg-dark w-50 text-light p-2 rounded-3">
<form action="<?= base_url('/signup')?>" class="row g-3 p-3" method="post" autocomplete="off">
    <?= csrf_field()  ?>
        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
        <div><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>

        <?php if(!empty(session()->getFlashdata('Success'))) : ?>
       <div><?= session()->getFlashdata('Success'); ?></div>
        <?php endif ?>
            <div class="col-md-6">
             <label for="">lastName</label>
			<input type="text" name="nom" class="form-control" placeholder="enter your lastname" value="<?= set_value('nom'); ?>" >
            <span class="span"><?= isset($validation) ? display_error($validation,'nom'): '' ?></span>
             </div>
             <div class="col-md-6">
             <label for="">firstname</label>
			<input type="text" name="prenom" class="form-control" placeholder="enter your firstname" value="<?= set_value('prenom'); ?>" >
            <span class=""><?= isset($validation) ? display_error($validation,'prenom'): '' ?></span>    
            </div>
            <div class="col-md-6">
            <label for="">Date of birth</label>
			<input type="text" name="datenaissance" id="datePicker" class="form-control" placeholder="00/00/1900" value="<?= set_value('datenaissance'); ?>" >
            <script>
                $(document).ready(function(){
                    $("#datePicker").datepicker({dateFormat:"dd.mm.yy"});
                });
            </script>   
              <span class=""><?= isset($validation) ? display_error($validation,'datenaiss'): '' ?></span>
          </div>
          <div class="col-md-6">
            <label for="">Phone</label>
			<input type="text" name="phone"  class="form-control" placeholder="(+257)77777777" value="<?= set_value('phone'); ?>" >    
            <span class=""><?= isset($validation) ? display_error($validation,'phone'): '' ?></span>  
        </div>
        <div class="col-md-6">
            <label for="">Genre</label><br>
			<label>
                <input type="radio" name="gender"  value="M" id="male" value="<?= set_value('gender'); ?>" >
           Male </label> 
           <label> 
            <input type="radio" name="gender"  value="F" id="Female" value="<?= set_value('gender'); ?>" >    
            Female 
        </label>  
            <span class=""><?= isset($validation) ? display_error($validation,'gender'): '' ?></span>
        </div>
        <div class="col-md-6">
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="mail" placeholder="enter your email" value="<?= set_value('mail'); ?>" >
            <span class=""><?= isset($validation) ? display_error($validation,'mail'): '' ?></span>
        </div>
        <div class="col-md-6">
            <label for="">Password</label>
             <input type="password" name="password" class="form-control" placeholder="enter your password" value="<?= set_value('password'); ?>">
             <span class=""><?= isset($validation) ? display_error($validation,'password'): '' ?></span>
            </div> 
              <div class="col-md-6">
              <label for="">Confirm your Password</label>
              <input type="password" class="form-control " name="cpassword" placeholder="confirm your password" value="<?= set_value('cpassword'); ?>">
              <span class=""><?= isset($validation) ? display_error($validation,'cpassword'): '' ?></span>  
            </div>
            <div class="col-12">
			<input type="submit"class="btn btn-info"  name="register" value="register now">
            </div>
	    	</form>
            <br>
            <a href="<?= base_url('/')?>">I have already an account</a>
</section>   
	 	
</body>
</html>