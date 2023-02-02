<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/newdash.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/logo/TeramaFlixpic.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <title>Message</title>
</head>
<body>
    <div class="wrapper relative w-full h-full flex flex-row px-2 md:px-6 bg-gray-100 overflow-x-hidden">
         <?php include "dash_aside.php" ?>
         <div class="container w-full  h-[100%]  sm:px-6 mt-6 bg-gray-100 flex flex-col justify-center pb-5 ">
                 <?php include "dash_head.php" ?>
                <div class="dashContainer mt-5 flex flex-col xl:flex-row   xl:space-x-5 ">
                        <div class=" sectionUsers xl:w-[40%] h-[550px] overflow-hidden     flex flex-col mb-5 bg-white rounded-3xl">
                            <br>
                            <div class="user flex flex-row justify-between items-center px-6 mb-6 cursor-pointer ">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-10 h-10 xl:w-12 xl:h-12 rounded-full overflow-hidden">
                                        <?php
                                        if($admin['Photo']){
                                            echo '<img src="'.base_url().'/Thumbnails/'.$admin['Photo'].'" class="" alt="profil">';
                                        }else{
                                            echo '<img src="'.base_url().'/img/logo.png" class="" alt="profil">';
                                        }
                                        ?>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h1 class="font-semibold"><?= $admin['Nom'].' '.$admin['Prenom'] ?></h1>
                                    </div>
                                </div>
                            </div>
                                <!-- search user -->
                            <div class="px-6">
                                <input 
                                type="text" placeholder="search user"
                                class="py-2 px-2  bg-gray-300 rounded-2xl w-full"
                                id="searchText"
                                />
                            </div>
                                <!-- end search user -->
                            <div class="usersContainer w-full h-full pt-6 overflow-y-auto ">
                                <div class="usersContainer w-full h-full pt-6 overflow-y-auto">
                                    <?php
                                    foreach($users as $users){
                                    ?>
                                    <div class="user1 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                    <a href="<?= base_url()?>/message?user=<?= $users->ID?>">
                                        <div class="flex flex-row space-x-3">
                                            <div class=" w-10 h-10 xl:w-12 xl:h-12 rounded-full overflow-hidden">
                                            <?php
                                                if(!$users->Photo){
                                                echo '<img src="img/logo.png" class="" alt="profil">';
                                                }else{
                                                echo '<img src="'.base_url().'/Thumbnails/'.$users->Photo.'" class="" alt="profil">';
                                                }
                                            ?>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h1 class="font-semibold"><?= $users->Nom.' '.$users->Prenom ?></h1>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($user != 1){
                        ?>
                        <div class="userChat xl:w-[60%] h-[550px]    bg-white xl:full flex flex-col  rounded-3xl " id="chat">
                            <!-- username -->  
                            <div class="user1 flex flex-row justify-between items-center  mb-6 cursor-pointer border-b-2 py-4 px-2">
                            <div class="flex flex-row space-x-3">
                                <div class=" w-10 h-10 xl:w-12 xl:h-12 rounded-full overflow-hidden">
                                <?php
                                if($user['Photo']){
                                        echo '<img src="'.base_url().'/Thumbnails/'.$user['Photo'].'" class="" alt="profil">';
                                    }else{
                                        echo '<img src="'.base_url().'/img/logo.png" class="" alt="profil">';
                                    }
                               ?>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h1 class="font-semibold"><?= $user['Nom'].' '.$user['Prenom'] ?></h1>
                                </div>
                            </div>
                            </div>
                        <!-- message -->
                            <div class="w-full px-5 flex flex-col h-[450px] justify-between ">
                                <div class="smsContainer flex flex-col   overflow-y-auto">
                                <?php
                                    $admin_sess = $admin['ID'];
                                    foreach($sms as $sms){
                                    if($admin_sess == $sms->FromA){
                                        ?>
                                        <div class="sendUser flex justify-end mb-4 ">
                                            <div class="flex flex-col  space-y-2">
                                                <div
                                                class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white max-w-[500px]">
                                                <?= $sms->Body ?>
                                                </div>
                                            </div>
                                            <?php
                                            if($admin['Photo']){
                                                echo '<img src="'.base_url().'/Thumbnails/'.$admin['Photo'].'" 
                                                class="object-cover h-8 w-8 rounded-full" alt="">';
                                            }else{
                                                echo '<img
                                                src="'.base_url().'/img/logo.png"
                                                class="object-cover h-8 w-8 rounded-full"
                                                alt=""
                                            />';
                                            }
                                                ?>
                                        </div>
                                        <?php } else{ ?>
                                        <div class="respondUser flex  justify-start mb-4">
                                        <?php
                                            if($admin['Photo']){
                                                echo '<img src="'.base_url().'/Thumbnails/'.$user['Photo'].'" 
                                                class="object-cover h-8 w-8 rounded-full" alt="">';
                                            }else{
                                                echo '<img
                                                src="'.base_url().'/img/logo.png"
                                                class="object-cover h-8 w-8 rounded-full"
                                                alt=""
                                            />';
                                            }
                                                ?>
                                                <div class="flex flex-col  space-y-2">
                                                <div class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white max-w-[500px]">
                                                <?= $sms->Body ?>
                                                </div>
                                            </div>
                                        
                                        </div>

                                    <?php } } ?>
                                </div>
                                <div class="flex justify-center pb-5 py-1 space-x-2">
                                    <textarea id="smsText" cols="30" rows="1" 
                                    class="w-full bg-gray-300 py-2 px-3 rounded-xl"
                                    placeholder="type your message here..."></textarea>
                                    <input type="hidden" value="<?= $user['ID'] ?>" id="userId" >
                                    <button class="">
                                        <img src="<?= base_url()?>/img/imag.png" class="object-cover sendSms h-8 w-8 rounded-full" alt=""/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                        ?>
                        <!-- end message -->
                </div>
        </div>
    </div>



<script src="<?= base_url()?>/assets/js/dashCommon.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      //handle get message text
      $(document).on('click','.sendSms',(e)=>{
        e.preventDefault();
        var sms = $(document).find('#smsText').val();
        var user = $(document).find('#userId').val()
        $.ajax({
          method: "post",
          url: '<?= base_url('message/send/sms') ?>',
          data: {sms: sms,user: user},
          success: function (response) {
            console.log(response)
             $(document).find('.smsContainer').html(response.message)
            $(document).find('#smsText').val('');  
          }
        }); 
      })
      $(document).on('keyup','#searchText', function(){
            value = $(this).val()
            $.ajax({
                url: '<?= base_url('user/search') ?>',
                method: 'post',
                data: {query:value},
                success: function(data){
                  console.log(data);
                    $('.usersContainer').html(data.message)
                }
            })
      });
      });
    </script>
</body>
</html>