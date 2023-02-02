<header>
            <div class="headercontainer fixed hidden  lg:block shadow-lg  pl-6 min-h-min w-[100%] bg-white overflow-hidden right-0 lef-0 top-0 z-20">
            
            <nav class="flex sm:flex-row sm:sticky sm:top-0 flex-col sm:items-center sm:justify-center items-center justify-center space-y-2 pb-2 relative  ">
                <a href="<?= base_url("/") ?>">
                    <div class="logo flex-initial flex sm:items-center sm:justify-start sm:w-64 sm:h-full w-full items-center justify-center sm:static">
                        <img src="<?= base_url() ?>/logo/TeramaFlixpic.png" class="w-12 h-11 my-1  rounded-full " alt="logo">
                        <img src="<?= base_url('/logo/TeramaFlixnam.png') ?>" class="w-[9rem] h-[1rem] my-1  " alt="logo">
                    </div>
                </a>
                
                    <div class="searchDiv sm:flex flex-1  sm:justify-center sm:items-center sm:w-64 sm:h-full hidden w-full items-center justify-center  ">
                        <input id="search" type="text" class=" min-w-min h-9 border-none ring-2 ring-blue-700 rounded-l-full pl-5 pr-5 " placeholder="recherche" name="search" >
                        <button class="bg-blue-500 h-10 hover:bg-blue-900 duration-1000  px-4 py-2   sm:mr-5 font-semibold rounded-r-full text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
            <!-- <div class="modal fade" id="create_channel_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modifier une photo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data" id="ajout_photo_form" novalidate>
                    <input type="hidden" name="id" id="pid">
                    <input type="hidden" name="old_image" id="old_image">
                    <div class="modal-body p-5">
                        <div class="mb-3">
                            <label>Post Image</label>
                            <input type="file" name="file" class="form-control" >
                            <div class="invalid-feedback">Post image is required!</div>
                            <div id="post_image"></div>
                        </div>
                    </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="ajout_photo_btn">Ajouter la photo</button>
                    </div>
                </div>
            </div>
            </div> -->
  
                    <div class="buttons flex-initial sm:flex space-x-3 sm:items-center sm:justify-center items-center justify-center w-full sm:w-64 h-full  hidden">
                    <a href="<?= base_url() ?>/Upload">
                        <button id="image" class="">
                            <img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " 
                            src="<?= base_url() ?>/img/create_video.png" alt="">
                        </button>
                    </a>
                   <button id="image" class="">
                        <img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " 
                        src="<?= base_url() ?>/img/notify.png" alt="">
                   </button>
                   <button onclick="Menu();" id="image" class="">
                    <!-- <?php
                    // if($user['Photo']){
                    //     echo '<img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " 
                    //     src="'.base_url().'/Thumbnails/'.$user['Photo'].'">';
                    // }else{
                    //     if($user['Genre']=="M"){
                    //         echo '<img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " tittle="'.substr($user['Nom'],0,1).'" ".'.substr($user['Nom'],0,1).'"
                    //         alt="'.substr($user['Nom'],0,1).'" ".'.substr($user['Nom'],0,1).'" src="'.base_url().'/Thumbnails/userM.png">';
                    //     }
                    //     if($user['Genre']=="F"){
                    //         echo '<img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " 
                    //         src="'.base_url().'/Thumbnails/userF.png">';
                    //     }
                    // }
                     
                    ?> -->
                    <img class="w-10 h-15 rounded-full" title="<?= substr($user['Nom'],0,1) ?><?= " "?><?= substr($user['Prenom'],0,1) ?>"
                    src="<?php if(!empty($user['Photo'])){ echo base_url().'/Thumbnails/'.$user['Photo'];}
                               elseif(empty($user['Photo'])&&$user['Genre']=='M'){ echo base_url('/Thumbnails/userM.png'); }
                               elseif(empty($user['Photo'])&&$user['Genre']=='F'){echo base_url('/Thumbnails/userF.png');}
                               ?>"
                   alt="<?= substr($user['Nom'],0,1) ?><?= " "?><?= substr($user['Prenom'],0,1) ?>">
                   </button>
                    </div>
                </nav>
            </div>
        </header>
        <?php if($channel){?>
        <div id="setMenu" class="absolute right-0 lg:fixed top-10 z-30 mt-4 hidden w-60 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:right-0 lg:right-0" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1 w-full" role="none">
            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
            <div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 w-100 justify-start px-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <a href="<?= base_url() ?>/Profile" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-0">My Account</a>
            </div>
            <div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 justify-start px-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                </svg>
                <a href="#" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-1">Settings </a>
            </div>
            <div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 justify-start px-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                </svg>
                <a href="<?= base_url('editPage') ?>" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-1">Edit Channel</a>                <!-- <a href="#" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-2">Edit Channel</a> -->
            </div>
            <div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 justify-start px-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>
                <a href="<?= base_url('logout') ?>"><button type="submit" class="block w-full px-2 py-2 text-left text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button></a>
            </div>
            </div>
        </div>
        <?php } 
         else { ?>
<div id="setMenu" class="absolute right-0 lg:fixed top-12 z-30 mt-4 hidden w-60 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:right-0 lg:right-0" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
<div class="py-1 w-full " role="none">
<!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
<div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 w-100 justify-start px-3 ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>
    <a href="<?= base_url() ?>/Profile" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-0">My Account</a>
</div>
<div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 justify-start px-3 ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
    </svg>
    <a href="#" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-1">Settings </a>
</div>
<div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 justify-start px-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
    </svg>
<h1>
<a href="<?= base_url('createPage')?>" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-1">Create Channel</a>
    <!-- <a href="#" class="block px-2 py-2 text-sm text-gray-700" id="menu-item-2">Create Channel</a> -->
    </h1>
</div>
<div class="flex flex-row items-center hover:bg-gray-300 hover:border-1 hover:border-gray-400 justify-start px-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-blue-600">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
    </svg>
    <a href="<?= base_url('logout') ?>"><button type="submit" class="block w-full px-2 py-2 text-left text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button></a>
</div>
</div>
</div>
      <?php } ?>
         <div id="searchedprop" class="absolute z-20 left-[40%] mt-14 w-[20%] sm:top-0 fixed  h-auto  overflow-hide bg-blue-100 rounded-md"></div>
         <div id="setting" style="display:flex;margin-right:70px;background:black;">
         
         </div>  
         <script>
            var divenblock=document.querySelector('#image');
            var divenblock=document.querySelector('#setting');
            divenblock.onclick=()=>{
                divenblock.style.display('flex');
            }
             function settings(){
                
                divenblock.classList.toggle('flex');
             }
            function Menu(){
            var overlay=document.querySelector('#setMenu');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
            }
          $(Document).ready(function(){
               $(document).on('click','.logoutbtn',function(){
                   $(".logoutbtn").text("disconnect...")
                $.ajax({
                    url:'<?=base_url('logout') ?>',
                    method:'get',
                    success:function(response){
                        Swal.fire(
                                    'Logout successfully',
                                    response.message,
                                    'success'
                            )
                            $(".logoutbtn").text("Logout")
                            $(location).prop("href","<?= base_url('/login')?>"); 

                    }
                });
               });

               var value;
        $(document).on('keyup','#search', function(){
            value = $(this).val()
            if (value != '') {
                $.ajax({
                    url: '<?= base_url('post/search') ?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('#searchedprop').html(data)
                    }
                })
            } else {
                $('#searchedprop').html('')
            }
      });
          })
     
         </script>