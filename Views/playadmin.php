<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url()?>/dist/output.css">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <?php 
    if(isset($new)){
    foreach($new as $key=>$new){
     ?>
      <title><?=$new->Title?></title>
   
</head>
<body>
    <div class="wrapper w-full h-full flex flex-row px-6 bg-gray-100">
         <div class="aside hide w-[20%] h-full  fixed bg-white flex flex-col ">
            <div class="logo w-[250px] h-[150px] flex flex-col justify-center  items-center overflow-hidden ">
                <div class="w-11 h-11"><img src="<?= base_url()?>/logo/TeramaFlixpic.png" alt="logo" class=""></div>
                <img src="<?= base_url()?>/logo/TeramaFlixnam.png" alt="nameLogo" class="w-40 h-5 ">
            </div>
            <div class="links">
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                      </svg>
                      
                      <a href="<?=base_url()?>/dashboard"><span >Dashboard</span></a>
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" clip-rule="evenodd" />
                      </svg>
                      
                    <span>Categories</span>
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                      </svg>

                    <a href="<?=base_url()?>/video"><span >Video</span></a>
                    <!-- <span >Video</span>                       -->
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                      </svg>
                      
                    <span >Users</span>                      
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                      </svg>
                      
                    <span >Inbox</span>                      
                </div>
            </div>
         </div>
         <div class="container w-[80%] h-[100%] ml-[350px] space-y-6 px-6 mt-6 bg-gray-100 flex flex-col justify-center ">
            <div class="dashHead flex flex-row justify-between items-center px-6 w-full h-[90px] bg-white rounded-3xl">
                <div class="flex flex-row items-center  space-x-1">
                    <div class="menuCloser  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>                      
                    </div>
                    <h1 class="font-bold text-[#9442FE] text-[2rem]">Dashboard</h1>
                </div>
                <div class="profil w-12 h-12 rounded-full overflow-hidden">
                    <img src="<?= base_url()?>/img/logo.png" alt="" class="" >
                </div>
            </div>
                <div class=" flex flex-row justify-between ">
                <div class="Uploads flex flex-col px-3 w-[30%] h-[500px] bg-white rounded-3xl">
                    <h1 class="font-bold text-xl p-6">Recent Uploads</h1>
                    <div class=" uploadsContai ner w-full h-full pt-6 overflow-y-auto ">
                       <?php 
                          foreach($video as $upload){
                            ?>

                      <div class="video1  justify-between px-6 mb-6 cursor-pointer py-1 border-2 border-gray-200 rounded-lg bg-gray-50 ">
                                <div class=" w-[25%] h-[150px] rounded-2xl   overflow-hidden">
                                    <a href="<?=base_url()?>/info_video/<?=$upload->ID?>">
                                    <img src="<?=base_url()?>/Thumbnails/<?=$upload->Image ?>" class="h-[100%] w-full imb-fluid" alt="profil">
                                    </a>
                                </div>
                                <div>
                                <h1 class="font-semibold text-[1.5rem]"><?= $upload->Title ?></h1>
                                <p><?= substr($upload->Body,0,40) ?></p>
                                <span><?= $upload->Created_at ?></span>
                               </div>
                        
                      </div>

                        <?php  }  ?>

                        </div>
                    </div>
                
                <div class="Videos flex flex-col  w-[65%] h-[500px] bg-white rounded-3xl">
                <div id="played" class="video     w-full  p-5    "> 
                <div class="video-container paused w-full lg:w-[90%] rounded" data-volume-level="high">
                  <img class="thumbnail-img">
                  <div class="video-controls-container">
                    <div class="timeline-container">
                      <div class="timeline">
                        <img class="preview-img">
                        <div class="thumb-indicator"></div>
                      </div>
                    </div>
                    <div class="controls">
                      <button class="play-pause-btn">
                        <svg class="play-icon" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                        </svg>
                        <svg class="pause-icon" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M14,19H18V5H14M6,19H10V5H6V19Z" />
                        </svg>
                      </button>
                      <div class="volume-container">
                        <button class="mute-btn">
                          <svg class="volume-high-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M14,3.23V5.29C16.89,6.15 19,8.83 19,12C19,15.17 16.89,17.84 14,18.7V20.77C18,19.86 21,16.28 21,12C21,7.72 18,4.14 14,3.23M16.5,12C16.5,10.23 15.5,8.71 14,7.97V16C15.5,15.29 16.5,13.76 16.5,12M3,9V15H7L12,20V4L7,9H3Z" />
                          </svg>
                          <svg class="volume-low-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5,9V15H9L14,20V4L9,9M18.5,12C18.5,10.23 17.5,8.71 16,7.97V16C17.5,15.29 18.5,13.76 18.5,12Z" />
                          </svg>
                          <svg class="volume-muted-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,4L9.91,6.09L12,8.18M4.27,3L3,4.27L7.73,9H3V15H7L12,20V13.27L16.25,17.53C15.58,18.04 14.83,18.46 14,18.7V20.77C15.38,20.45 16.63,19.82 17.68,18.96L19.73,21L21,19.73L12,10.73M19,12C19,12.94 18.8,13.82 18.46,14.64L19.97,16.15C20.62,14.91 21,13.5 21,12C21,7.72 18,4.14 14,3.23V5.29C16.89,6.15 19,8.83 19,12M16.5,12C16.5,10.23 15.5,8.71 14,7.97V10.18L16.45,12.63C16.5,12.43 16.5,12.21 16.5,12Z" />
                          </svg>
                        </button>
                        <input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
                      </div>
                      <div class="duration-container">
                        <div class="current-time">0:00</div>
                        /
                        <div class="total-time"></div>
                      </div>
                      <button class="captions-btn">
                        <svg viewBox="0 0 24 24">
                          <path fill="currentColor" d="M18,11H16.5V10.5H14.5V13.5H16.5V13H18V14A1,1 0 0,1 17,15H14A1,1 0 0,1 13,14V10A1,1 0 0,1 14,9H17A1,1 0 0,1 18,10M11,11H9.5V10.5H7.5V13.5H9.5V13H11V14A1,1 0 0,1 10,15H7A1,1 0 0,1 6,14V10A1,1 0 0,1 7,9H10A1,1 0 0,1 11,10M19,4H5C3.89,4 3,4.89 3,6V18A2,2 0 0,0 5,20H19A2,2 0 0,0 21,18V6C21,4.89 20.1,4 19,4Z" />
                        </svg>
                      </button>
                      <button class="speed-btn wide-btn">
                        1x
                      </button>
                      <button class="mini-player-btn">
                        <svg viewBox="0 0 24 24">
                          <path fill="currentColor" d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-10-7h9v6h-9z"/>
                        </svg>
                      </button>
                      <button class="theater-btn">
                        <svg class="tall" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M19 6H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H5V8h14v8z"/>
                        </svg>
                        <svg class="wide" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M19 7H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm0 8H5V9h14v6z"/>
                        </svg>
                      </button>
                      <button class="full-screen-btn">
                        <svg class="open" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/>
                        </svg>
                        <svg class="close" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                      <video id="playing" class="rounded" src="<?=base_url()?>/videos/<?=$new->Video?>" autoplay></video>       
                </div>
                <div class="description  pb-4 px-[3%] lg:px-0 w-full border-b-[2px] ">
                    <div class="p-[2%] pl-0 lg:text-[22px] text-[18px] font-semibold"></div>
                    <div class="reaction flex flex-col justify-between  space-y-2  text-white">
                       <div class="vuesAndDate flex flex-row space-x-2">
                        <div class="vues  text-black space-x-1 lg:text-base text-[13px] flex flex-row justify-center">
                            <div class="nbrVues ">600</div>
                            <div class="">vues</div>
                        </div>
                        <div class="dateSortie  text-black lg:text-base text-[13px]">
                            sortie le <span class="date lg:text-base text-[13px]">6/6/2022</span>
                        </div>
                       </div>
                       <div class="reaction flex flex-row justify-between">
                        <div class="jaime bg-gray-200 p-2 rounded-3xl h-[45px] text-black flex lg:flex-row flex-col justify-center items-center lg:space-x-2 lg:text-[18px] font-semibold lg:text-base text-[13px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                              </svg>
                              <span class="">j'aime</span>
                            </div>
                           <div class="jaimepas bg-gray-200 p-2 rounded-3xl h-[45px] text-black flex lg:flex-row justify-center items-center  lg:space-x-2 lg:text-[18px] lg:text-base text-[13px] font-semibold flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                              </svg>
                              <span class="">j'aime pas</span>
                        </div>
                        <div class="partager bg-gray-200 p-2 rounded-3xl h-[45px] text-black flex lg:flex-row justify-center items-center lg:space-x-2 text-[18px] font-semibold flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                              </svg>
                              <span class="lg:text-base text-[13px]">tranferer</span>
                              
                        </div>
                        <div class="telecharger p-[10px] h-[45px] text-white bg-blue-500 rounded-[50%] lg:text-base text-[13px] " >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                              </svg>
                            </div>
                       </div>
                         
                    </div>
                </div>
      

                <?php include 'action_dash.php';?>
                <div class="reaction flex flex-col justify-between  space-y-2  text-white">
                       <div class="reaction flex flex-row justify-between">
                           <div class="jaime bg-gray-200 p-2 rounded-3xl h-[45px] text-black flex lg:flex-row flex-col justify-center items-center lg:space-x-2 lg:text-[18px] font-semibold lg:text-base text-[13px]">
                                <ul>
                                <li id='<?=$new->ID ?>'class="del">Delete</li>
                                </ul>      
                            </div>
                            <div>
                            <form action="">
                                <?php 
                                $visiblite=$new->Visible;
                                if( $visiblite=="0"){ ?>
                                    <input type="radio" id='<?=$new->ID ?>' value="Masquer" checked name="masquer/demasquer"/><label>Masquer</label>
                                    <input type="radio" id='<?=$new->ID ?>' value="Demasquer" name="masquer/demasquer"/><label>Demasquer</label>
                                <?php }else{?>
                                    <input type="radio" id='<?=$new->ID ?>' value="Masquer" name="masquer/demasquer"/><label>Masquer</label>
                                    <input type="radio" id='<?=$new->ID ?>' value="Demasquer" checked name="masquer/demasquer"/><label>Demasquer</label>
                                <?php }?>
                                </form>
                        </div>
                        </div>
        
                </div>
                   
                     
                       <div class="inputComment flex flex-row w-[80%]  h-10 border mb-3 rounded-full bg-gray-300">
                        <input type="text"  id="" placeholder="Envoyer lui un message" class="Commentinput w-[83%] pl-2 rounded-l-full bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-[1%] text-slate-800 cursor-pointer1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="<?=$new->ID ?>" class=" sendButton w-6 h-6 m-[1%] text-slate-800 cursor-pointer2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                          </svg>      
                    </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
          
            </div>
         </div>
    </div>
     <?php }}?>
 <script id="script" src="<?= base_url() ?>/playeradmin.js">
 </script>
 <script>
  let radioButton=document.querySelectorAll("input[name='masquer/demasquer']");
  let id=document.querySelector("input[name='masquer/demasquer']:checked").id;
  let result=document.getElementById("result");
  let findselected= () =>{
  let radiosel=document.querySelector("input[name='masquer/demasquer']:checked").value;
  if(`${radiosel}`=="Masquer"){
    $.ajax({
      method: "post",
      url: '<?= base_url('post/masquer') ?>',
      //data: `${id}`,
      data: {query:`${id}`},
      success: function (data) {
        alert(data['status']);
      }
    });
  }
 else{
    $.ajax({
    method: "post",
    url: '<?= base_url('post/demasquer') ?>',
    data: {query:`${id}`},
    success: function (data) {
      alert(data['status']);
    }
  });
 }
}
 radioButton.forEach(element => {
    element:addEventListener("change", findselected);
  });
findselected();
</script>
</body>
</html>