<div class="container max-w-full mt-[5rem] min-h-screen    ease-in-out  ">
    <?php include 'sidebar.php'; ?>
    <div id="scrollbar" class="scrollbar  lg:max-w-[80%] max-w-[100%] lg:ml-[20rem]"> 
        
                <div class="filmslide  ">
                   
                    <div class="slidecontainer top-4 z-0 swiper ">
                        <div class="swiper-wrapper mb-8 w-[100%] ">
                        <?php 
                            if (isset($mVideo)) {
                                foreach($mVideo as $key => $myVideo){
                        ?>
                          <div class="swiper-slide">
                            <div class="videocontainer ">
                                    <div class="imag  h-[170px] rounded  overflow-hidden">
                                    <a href="<?= base_url() ?>/Watch?v=<?=$myVideo->ID?>">
                                        <img src="<?= base_url() ?>/Thumbnails/<?=$myVideo->Image?>" class="w-full img-fluid  h-[100%] object-cover">
                                    </a>
                                </div>
                                <a href="<?= base_url()?>/Profile?channel=<?= $myVideo->User ?>">
                                    <div class="flex  justify-start mb-4">
                                        <?php 
                                        if($myVideo->Photo){
                                            echo '<img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " src="'.base_url().'/Thumbnails/'.$myVideo->Photo.'">';
                                        }else{
                                            echo '<img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " src="'.base_url().'/img/logo.png">';
                                        }
                                        ?>
                                    <div class="flex flex-col  space-y-2">
                                        <div class="right-1">
                                            <h10 class="text-sm font-medium"><?= substr($myVideo->Title, 0, 20) ?></h10><br>
                                            <span class="text-sm"><?= $myVideo->Nom?> <?= $myVideo->Prenom?></span>
                                        </div>
                                    </div>
                                    </div>
                                </a>
                            </div>
                          </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
                <div class="filmcontainer mt-3 gap-[1rem] ">
                
                <?php 
                    foreach($video as $key => $video){
                ?>  
                <div class="videocontainer ">
                    <div class="imag w-[100%] h-[170px] rounded  overflow-hidden">
                        <a href="<?= base_url() ?>/Watch?v=<?=$video->ID?>">
                        <img src="<?= base_url()?>/Thumbnails/<?=$video->Image?>" class="w-[100%]  h-[100%] object-cover" alt="">
                        </a>
                    </div>
                    <a href="<?= base_url()?>/Profile?channel=<?= $video->User ?>">
                        <div class="flex  justify-start mb-4">
                            <?php 
                            if($video->Photo){
                                echo '<img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " src="'.base_url().'/Thumbnails/'.$video->Photo.'">';
                            }else{
                                echo '<img class="lg:w-10 w-12 lg:h-10 h-8 my-1 ml-15 rounded-full " src="'.base_url().'/img/logo.png">';
                            }
                            ?>
                        <div class="flex flex-col  space-y-2">
                            <div class="right-1">
                                <h10 class="text-sm font-medium"><?= substr($video->Title, 0, 20) ?></h10><br>
                                <span class="text-sm"><?= $video->Nom?> <?= $video->Prenom?></span>
                            </div>
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
    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            
        </script>
        