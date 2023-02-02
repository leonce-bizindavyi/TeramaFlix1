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
    <title>Categories</title>
</head>
<body>
    <div class="wrapper relative w-full h-full flex flex-row px-2 md:px-6 bg-gray-100 overflow-x-hidden">
    <?php include "dash_aside.php" ?>
         <div class="container w-full  h-[100%]  sm:px-6 mt-6 bg-g/ray-100 flex flex-col justify-center ">
         <?php include "dash_head.php" ?>
            <div class="dashContainer mt-5 flex flex-col space-y-5 md:space-y-10 ">
                <div class="blokcontainer flex  justify-center md:flex md:flex-row space-x-2 space-y-2 md:space-x-4 h-[200px]  ">
                <div class="blok w-[45%]  md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 md:w-10 md:h-10 ">
                                <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                              </svg>
                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?php echo $Films?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Films</h2>
                    </div>
                    <div class="blok w-[45%]  md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                            <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zm1.5 0v1.5c0 .207.168.375.375.375h1.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-1.5A.375.375 0 003 5.625zm16.125-.375a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h1.5A.375.375 0 0021 7.125v-1.5a.375.375 0 00-.375-.375h-1.5zM21 9.375A.375.375 0 0020.625 9h-1.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h1.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-1.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h1.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-1.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h1.5a.375.375 0 00.375-.375v-1.5zM4.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-1.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h1.5zM3.375 15h1.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-1.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h1.5a.375.375 0 00.375-.375v-1.5A.375.375 0 004.875 9h-1.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375zm4.125 0a.75.75 0 000 1.5h9a.75.75 0 000-1.5h-9z" clip-rule="evenodd" />
                       </svg>

                              
                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?= $series ?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Series</h2>
                    </div>
                    <div class="blok w-[45%] md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z" clip-rule="evenodd" />
                        </svg>

                              
                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?= $Animations ?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Animations</h2>
                    </div>
                    <?php if(isset($Demande)){
                                foreach($Demande as $demande){
                             ?>
                    <div class="blok w-[45%] md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                          <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375z" />
                          <path fill-rule="evenodd" d="M3.087 9l.54 9.176A3 3 0 006.62 21h10.757a3 3 0 002.995-2.824L20.913 9H3.087zM12 10.5a.75.75 0 01.75.75v4.94l1.72-1.72a.75.75 0 111.06 1.06l-3 3a.75.75 0 01-1.06 0l-3-3a.75.75 0 111.06-1.06l1.72 1.72v-4.94a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                        </svg>

                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?=$demande; ?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Demandes</h2>
                    </div>
                    <?php } } ?>
                </div>
                <div class="stat flex flex-col space-y-2 px-4 md:flex-row md:justify-between overflow-hidden  ">

                <?php  
                if(isset($Estime_users)){
                    foreach($Estime_users as $estime_users){
                ?>         
                        

                        <?php }} ?>
                   
                    <div class="statView  h-max bg-white w-full lg:w-[72%] md:h-[400px] rounded-3xl overflow-hidden flex flex-col  ">
                        <div class="flex flex-col  md:flex-row md:justify-between md:space-x-5 h-[50%] space-y-5">
                            <div class=" w-full   "><canvas id="chart_film"></canvas></div>
                            <div class="w-full"><canvas id="chart_series"></canvas></div>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between md:space-x-5 h-[50%] space-y-5">
                            <div class=" w-full  "><canvas id="chart_Anime"></canvas></div>
                            <div class="w-full"><canvas id="chart_Demande"></canvas></div>
                        </div>
                    </div>
                </div>
                
                <div class="footer mt-3">
                    <span class="font-bold"><center>Admin Dashboard all right reserved teramaflix@2022</center> </span>
                </div>
            </div>
         </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
<script src="<?=base_url() ?>/assets/js/dashCommon.js"></script>

<?php if(isset($chart_series)){
              $i=0;
              $tab=[];
              foreach($chart_series as $val){
                $tab[$i]=$val->count;
                $i++;

              }
              ?>
              <script>
         var y= <?php echo json_encode($tab)  ?>;

                </script>
        
          <?php  }  ?>

          <?php if(isset($chart_film)){
              $i=0;
              $tabe=[];
              foreach($chart_film as $val){
                $tabe[$i]=$val->count;
                $i++;
              }
              ?>
              <script>
         var x= <?php echo json_encode($tabe)  ?>;
                </script>
        
          <?php  }  ?>

          <?php if(isset($chart_Anime)){
              $i=0;
              $tab=[];
              foreach($chart_Anime as $val){
                $tabl[$i]=$val->count;
                $i++;

              }
              ?>
              <script>
         var z= <?php echo json_encode($tabl)  ?>;

                </script>
        
          <?php  }  ?>
          <?php if(isset($chart_Demande)){
              $i=0;
              $tab=[];
              foreach($chart_Demande as $val){
                $tabl[$i]=$val->count;
                $i++;

              }
              ?>
              <script>
         var r= <?php echo json_encode($tabl)  ?>;

                </script>
        
          <?php  }  ?>

          <script>

const labels = [
  '1','2','3',
  '4','5','6',
  '7','8','9',
  '10','11','12',
  '13','14','15',
  '16','17','18',
  '19','20','21',
  '22','23','24',
  '25','26','27',
  '29','30','31'
];
const data = {
  labels: labels,
  datasets: [{
    label: 'Film First dataset',
    borderColor: [ "#3378FF" ],
    //data: [0, 10, 5, 12, 20, 30, 33],
    data: x,
  
  }]
};
const db = {
  labels: labels,
  datasets: [{
    label: 'serie First dataset',
    borderColor: [ "#3378FF" ],
    //data: [0, 10, 5, 12, 20, 30, 33],
    data: y,
  
  }]
};
const d = {
  labels: labels,
  datasets: [{
    label: 'Animation First dataset',
    borderColor: [ "#3378FF" ],
    //data: [0, 10, 5, 12, 20, 30, 33],
    data: z,
  
  }]
};

const da = {
  labels: labels,
  datasets: [{
    label: 'Demandes First dataset',
    borderColor: [ "#3378FF" ],
    //data: [0, 10, 5, 12, 20, 30, 33],
    data: r,
  
  }]
};



     const config = {
  type: 'line',
  data: data,
  options: {}
};
const conf  = {
  type: 'line',
  data: d,
  options: {}
};
const confi = {
  type: 'line',
  data: db,
  options: {}
};
const con  = {
  type: 'line',
  data: da,
  options: {}
};
var myChart = new Chart(
    document.getElementById('chart_film'),
    config
  );

  var video_Chart = new Chart(
    document.getElementById('chart_series'),
    confi
  );

  
  var video_Chart = new Chart(
    document.getElementById('chart_Anime'),
    conf
  );

  var video_Chart = new Chart(
    document.getElementById('chart_Demande'),
    con
  );
</script>  

</body>
</html>