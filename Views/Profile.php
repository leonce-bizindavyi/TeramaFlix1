<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/logo/TeramaFlixpic.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title><?= $channel['Nom'].' '.$channel['Prenom'] ?></title>
    <script>
        tailwind.config = {
           
        theme: {
            extend: {},
            screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
            break: { max: '768px' },
            }
  },
  plugins: [],
}
</script>
<style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
        
*{
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;
}
.sidebar ul li a ,.sidebar h1{
    color : #334155;
}
.sidebar ul li a:hover {
    color: #3a82f5;
    margin-left: 10px; 
    transition:  ease-in-out .4s ;
}
.populaires {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    height: 350px;
    overflow: hidden;
    padding: 0px 30px 0px 0px;
}
.populaires div video {
    height: 140px;
    margin-bottom: 10px;
    overflow: hidden;
    position: relative;

} 
.scrollbar {
    padding-left: auto;
    padding-right: auto;
}
.filmcontainer {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(180px, auto));
    margin-left: auto;
    margin-right: auto;
    border-top: 3px solid #3a82f5;
    padding-top: 30px;
    
}
.filmcontainer .videocontainer {
    width: 100%;

}
.imag img:hover {
    transform: translateY(-10px);
    transition: 0.2s all linear;
}
#searchedprop{
    position: fixed;
}
.special a.active{
  background-color: aqua;
}
</style>
</head>
<body >
    <div class="wrapper max-w-screen px-6 overflow-x-hidden">
         <!--                                            header navBar                                               -->
         <?php include 'header2.php' ?>
       <!--                                               fin header navBar                                               -->

       <div class="container max-w-full mt-[5rem] min-h-screen    ease-in-out  ">
       <?php include 'sidebar.php'; ?>
             <div class="scrollbar  lg:max-w-[80%] max-w-[100%] lg:ml-[20rem]"> 
              <div id="channel">
                    <div class=" px-12 py-1">
                      <div class="relative h-40 w-full rounded-md overflow-hidden">
                        <?php
                        if($channel['Cover']){
                          echo '<img src="'.base_url().'/Thumbnails/'.$channel['Cover'].'" alt="" class="  w-full  rounded-md" />';
                        }
                        ?>
                      </div>
                    </div>
                    <div class=" relative bottom-9 flex items-center justify-center space-y-1  space-x-12 ">
                      <div class=" break:hidden relative bottom-0 left-4 z-20 h-40 w-40 rounded-full border border-gray-100 bg-white p-2">
                      <?php
                        if($channel['Photo']){
                          echo '<img src="'.base_url().'/Thumbnails/'.$channel['Photo'].'" alt="" class="h-36 w-36 rounded-full" />';
                        }else{
                          echo '<img src="'.base_url().'/img/logo.png" alt="" class="h-36 w-36 rounded-full" />';
                        }
                        ?>
                       </div>
                      <div >
                        <div class=" break:relative break:bottom-12 flex  px-4 justify-start sm:flex-col md:flex-row lg:flex-row flex-col  ">
                          <div class=" visible  md:hidden lg:hidden   relative bottom-0 left-4 z-20 h-40 w-40 rounded-full border border-gray-100 bg-white p-2">
                            <img src="https://cdn.moviefone.com/admin-uploads/posters/goodevil-movie-poster_1663183537.jpg?d=360x540&q=80" alt="" class="h-36 w-36 rounded-full" />
                          </div>
                          <div class="flex space-x-3">
                            <span class="text-3xl font-normal text-blue-600 "><?= $channel['Nom'].' '.$channel['Prenom'] ?></span>
                            <?php
                            if($user['ID'] != $channel['ID']){
                              echo '<span id="'.$channel['ID'].'" class="rounded sabonner border bg-blue-400 border-gray-400 p-1 py-2 px-2 text-white hover:bg-blue-700 "> s\'abonner </span>';
                            }
                            ?>
                          </div>
                        </div>
                        <div class="flex justify-between px-7 pt-2 space-x-6">
                          <span class="text-sm font-semibold text-blue-600"> 1k Posts</span>
                          <span class="text-sm font-semibold text-blue-600 "> 10k Abonnés </span>
                          <span class="text-sm font-semibold text-blue-600 "> 1k Likes </span>
                        </div>
                        
                        <div class="pt-1"></div>
                      </div> 
                    </div>
                    <hr style="width:100%;height:8px;text-align:center;color:#3a82f5">
                         <div class="flex items-center  justify-center ">
                           <div class="flex flex-row  xl:space-x-16  break:space-x-4 space-x-8  ml-2    text-xs">
                              <span class="flex justify-self-center  bg-gray-500  text-white   font-semibold p-2  rounded-lg transform translate-y-1 hover:translate-y-0 duration-500 ease-in-out hover:bg-blue-600 hover:rounded-lg hover:text-white cursor-pointer lg:w-20 justify-center " id="pst" onclick="Select('pst')"> HOME </span>
                              <span class="flex justify-self-center  bg-gray-500  text-white   font-semibold p-2  rounded-lg transform translate-y-1 hover:translate-y-0 duration-500 ease-in-out hover:bg-blue-600 hover:rounded-lg hover:text-white cursor-pointer lg:w-20 justify-center "  id="vid" onclick="Select('vid')">  VIDEOS </span>
                              <span class="flex justify-self-center  bg-gray-500  text-white   font-semibold p-2  rounded-lg transform translate-y-1 hover:translate-y-0 duration-500 ease-in-out hover:bg-blue-600 hover:rounded-lg hover:text-white cursor-pointer lg:w-20 justify-center "  id="tg"  onclick="Select('tg')">  ABOUT</span>
                           </div>
                      </div>
                    <div class="flex flex-col items-center justify-center space-y-4  pt-6 ">
                      <div class="grid lg:grid-cols-3 xl:grid-cols-4  2xl:grid-cols-4 gap-4 sm:grid-cols-3 ">
                        <?php 
                          if(isset($video)){
                            foreach($video as $video){
                        ?>
                        <a href="<?=base_url() ?>/Watch?v=<?=$video->ID?>">
                        <div id="items" class="flex flex-col">
                          <div id="content w-52" >
                            <img src="<?= base_url()."/Thumbnails/".$video->Image ?>" class="h-40 w-52 rounded-lg cursor-pointer sm:w-60" alt="" />
                          </div>
                          <div class="sm:w-45 lg:w-53 details bg-gray-200 text-gray-700 relative bottom-2  flex flex-col rounded-b-xl">
                            <div class="flex justify-center"><h3 class=" h-8 overflow-hidden py-2 text-base "><?= $video->Title ?></h3></div>
                            <div class="flex flex-row justify-between p-1 px-4 pb-3">
                            <span class=" text-xs "><?=$video->Views?> vues</span>
                            <?php 
                                $datetime1 = new DateTime(date('Y-m-d H:i:s'));
                                $datetime2 = new DateTime($video->Created_at);
                                $difference = $datetime1->diff($datetime2);
                                if($difference->days== 0){
                                ?>
                                <span class=" text-xs" ><?=$video->Created_at?></span>
                                <?php
                                }else{
                                ?>
                                <span class=" text-xs" ><?=$difference->days ?> days ago</span>
                                <?php
                                }
                            ?> 
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
    </div>

    </div>
            </div>           
        </div>
        
       </div> 
        <script src="<?= base_url() ?>/assets/js/Btn_color.js"></script>
       <script src="<?= base_url() ?>/assets/js/swiper-bundle.min.js"></script>
       <script src="<?= base_url() ?>/assets/js/index.js"></script>
       <script>
        function dropDown() {
            document.querySelector('.submenu').classList.toggle('hidden')
          document.querySelector('#arrow').classList.toggle('rotate-0')
        }
         function dropDown1() {
            document.querySelector('.submenu1').classList.toggle('hidden')
          document.querySelector('#arrow1').classList.toggle('rotate-0')
        }
        function dropDown2() {
            document.querySelector('.submenu2').classList.toggle('hidden')
          document.querySelector('#arrow2').classList.toggle('rotate-0')
        }
    
        function Openbar() {
          document.querySelector('.sideMenubar-Main').classList.toggle('hidden')
        }
        function Login(){
            var overlay=document.querySelector('#Login');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');

        }
        function Menu(){
            var overlay=document.querySelector('#setMenu');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');

        }
        function Register()
        {
            var overlay=document.querySelector('#Register');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
        }
        function CloseLogging(){
            var overlay=document.querySelector('#Login');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');

        }
        function CloseRegister()
        {
            var overlay=document.querySelector('#Register');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
        }
      </script>
      <script type="text/javascript">
        $(document).ready(function () {
        $('.sabonner').on('click', function (e) {
            e.preventDefault()
            if($(this).text()=='abonné'){
              $(this).removeClass('bg-blue-800');
              $(this).addClass('bg-blue-400');
              $(this).text('S\'abonner');
            }else{
              $(this).text('abonné');
              $(this).removeClass('bg-blue-400');
              $(this).addClass('bg-blue-800');
            }
          })
          //s'abonner handle click
          $('.sabonner').on('click', function (e) {
            e.preventDefault()
            var user = $(this).attr('id');
            $.ajax({
              method: "post",
              url: "<?= base_url()?>/abonne",
              data: {user:user},
              success: function (response) {
                console.log(response.message)
                if(response.message == 0){
                  $('.sabonner').removeClass('bg-blue-800');
                  $('.sabonner').addClass('bg-blue-400');
                  $('.sabonner').text('S\'abonner');
                }else{
                  $('.sabonner').text('abonné');
                  $('.sabonner').removeClass('bg-blue-400');
                  $('.sabonner').addClass('bg-blue-800');
                }
              }
            }); 
          })
          // s'abonner check 
          abonneCheck()
            function abonneCheck(){
            var user = $('.sabonner').attr('id');
            $.ajax({
              method: "post",
              url: "<?= base_url()?>/subscribe",
              data: {user:user},
              success: function (response) {
                if(response.message == 0){
                  $('.sabonner').removeClass('bg-blue-800');
                  $('.sabonner').removeClass('bg-blue-400');
                  $('.sabonner').addClass('bg-blue-400');
                  $('.sabonner').text('S\'abonner');
                }else{
                  $('.sabonner').text('abonné');
                  $('.sabonner').removeClass('bg-blue-400');
                  $('.sabonner').removeClass('bg-blue-800');
                  $('.sabonner').addClass('bg-blue-800');
                }
              }
            }); 
            }
        });
        </script>


</body>
</html>
