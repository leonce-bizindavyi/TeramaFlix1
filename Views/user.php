<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/dist/output.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/newdash.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/logo/TeramaFlixpic.png">
    
    <title>Users</title>
</head>
<body>
    <div class="wrapper relative w-full h-full flex flex-row px-2 md:px-6 bg-gray-100 overflow-x-hidden">
    <?php include "dash_aside.php" ?>
         <div class="container w-full  h-[100%]  sm:px-6 mt-6 bg-gray-100 flex flex-col justify-center ">
         <?php include "dash_head.php" ?>
            <div class="dashContainer mt-5 flex flex-col-reverse xl:flex-row  xl:space-x-5 ">
                <div class=" sectionUser xl:w-[40%] h-[500px] xl:h-full flex flex-col bg-white rounded-3xl">
                    <h1 class="font-bold text-lg xl:text-xl p-4 xl:p-6">Users</h1>
                    <div class="usersContainer w-full h-[460px] pt-6 overflow-y-auto">
                    <?php if (isset($users_list)) {
                        foreach ($users_list as $user) {
                        ?>
                        <a href="<?= base_url("users?user=".$user["ID"]) ?>">
                            <div class="user1 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-10 h-10 xl:w-12 xl:h-12 rounded-full overflow-hidden">
                                    <?php
                                        if($user['Photo']){
                                            echo '<img src="'.base_url("/Thumbnails/".$user['Photo']).'" class="" alt="">';
                                        }else{
                                            echo '<img src="'.base_url("/img/logo.png").'" class="" alt="">';
                                        }
                                    ?>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold"><?= $user["Lastname"] ?></h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
                <div class="userinfo xl:w-[60%] bg-white xl:full flex flex-col mb-5  rounded-3xl" id="userINFO">
                    <div class="flex felx-row justify-center w-full mt-5">
                        <div class=" w-36 h-36  xl:w-40 xl:h-40 rounded-full overflow-hidden">
                            <?php
                            if($row['Photo']){
                                echo '<img src="'.base_url().'/Thumbnails/'. $row['Photo'].'">';
                            }else{
                                echo '<img src="'. base_url().'/img/logo.png">';
                            }
                            ?>
                        
                        </div>
                    </div>
                    <div class="userDetails p-8 xl:p-20 flex flex-row justify-between w-full ">
                        <div class="info text-lg xl:text-xl font-semibold space-y-3 w-[70%] xl:w-[40%]">
                            <div class=""><span>Username</span> : <span>
                                    <?=(isset($row)) ? $row['Lastname'] . " " . $row['Firstname'] : $row['Lastname'] . " " . $row['Firstname'] ?>
                                </span></div>
                            <div class=""><span>Channel</span> : <span>TeramaFlix</span></div>
                            <div class=""><span>Type</span> : <span><?=(isset($row)) ? $row['Categorie'] : $row['Categorie'] ?></span></div>
                            <div class=""><span>Joined at</span> : <span><?=(isset($row)) ? $row['Joined'] : $row['Joined'] ?></span></div>
                            <div class=""><span>Statut</span> : <span  class="statu ">Disable</span></div>
                        </div>
                        <div class="btn  w-[25%] xl:w-[50%] ">
                            <div class="bg-gray-100 p-4 flex flex-col xl:flex-row justify-between items-center rounded-2xl space-y-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 xl:w-10 xl:h-10 cursor-pointer">
                                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                                  </svg>                              
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 xl:w-10 xl:h-10 cursor-pointer">
                                    <path d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 00-1.032-.211 50.89 50.89 0 00-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 002.433 3.984L7.28 21.53A.75.75 0 016 21v-4.03a48.527 48.527 0 01-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979z" />
                                    <path d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 001.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0015.75 7.5z" />
                                  </svg>
                                  <button id="<?=$row['ID'] ?>" class="btnStatu text-lg xl:text-xl font-semibold cursor-pointer bg-[#3378FF] text-white shadow-xl p-1 xl:p-2 rounded-xl">Active</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
     </div>


     
<script src="<?=base_url() ?>/assets/js/dashCommon.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        verifyActive()
    });
        $('.btnStatu').on('click', function () {
            activeUser()
        });
        function verifyActive(){
            const stat = document.querySelector('.statu')
            const btnStat = document.querySelector('.btnStatu')
            let user = $('.btnStatu').attr('id');
            $.ajax({
                method: "post",
                url: "<?= base_url() ?>/verifyActive",
                data: {user:user},
                success: function (response) {
                    console.log(response);
                    if(response.etat == 1) {
                        stat.textContent = "Active"
                        stat.style.color = "rgb(34,197,94)"
                        btnStat.textContent = "Disable"
                    }
                    else {
                        stat.textContent = "Disable"
                        stat.style.color = "rgb(185,28,28)"
                        btnStat.textContent = "Active"
                    }
                }
            })
        }
        function activeUser(){
            const stat = document.querySelector('.statu')
            const btnStat = document.querySelector('.btnStatu')
            let etat;
            let user = $('.btnStatu').attr('id');
            if(stat.textContent == "Active") {
                etat = 0
            }
            else {
                etat = 1;
            }
            $.ajax({
                method: "post",
                url: "<?= base_url() ?>/desactive",
                data: {user:user, etat:etat},
                success: function (response) {
                    console.log(response);
                    if(response.etat == 1) {
                        stat.textContent = "Active"
                        stat.style.color = "rgb(34,197,94)"
                        btnStat.textContent = "Disable"
                    }
                    else {
                        stat.textContent = "Disable"
                        stat.style.color = "rgb(185,28,28)"
                        btnStat.textContent = "Active"
                    }
                }
            })
        }
</script>
</body>
</html>