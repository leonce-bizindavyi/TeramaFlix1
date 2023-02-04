<div class="userHead flex flex-row justify-between items-center px-6 w-full h-[60px] md:h-[70px] bg-white rounded-3xl">
                <div class="flex flex-row items-center  space-x-2">
                    <div class="menuCloser cursor-pointer z-50 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 md:w-10 md:h-10 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>                      
                    </div>
                    <h1 class="font-bold text-[#9442FE] text-[1.2rem] md:text-[1.5rem]">Dashboard</h1>
                </div>
                <div class="profil w-9 h-9 md:w-12 md:h-12 rounded-full overflow-hidden">
                <?php
                    if($admin['Photo']){
                        echo '<img src="'.base_url().'/Thumbnails/'.$admin['Photo'].'" class="" alt="profil">';
                    }else{
                    echo '<img src="'.base_url().'/img/logo.png" class="" alt="profil">';
                    }
                ?>
                </div>
            </div>