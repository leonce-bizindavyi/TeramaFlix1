
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       
    </script>
<script>
$(document).on('click','.del', function(){
     var id =$(this).attr("id");
     alert(id);
        if (id != '') {
                    $.ajax({
                    url: '<?= base_url('post/bloquer') ?>',
                    method: 'post',
                    data: {query:id},
                    success: function(data){
                        alert(data['status']);
                    }
                })
            }
             else {
                alert("Le video est déja supprimé");
            }
     });  

     $(document).on('click','.cursor-pointer2', function(){
        var id =$(this).attr("id");
        if($.trim($('.Commentinput').val()).length == 0)
        { 
            alert('Veuiller ecrire un message');
        }
        if(id == '' )
        {
            alert('Aucun video n\'est publié')
        }
        if(($.trim($('.Commentinput').val()).length != 0)&&(id != ''))
        {
           var message =$('.Commentinput').val();
           var data={
                'id':id,
                'message':message,
            };
           $.ajax({
                url: "<?= base_url('send/message') ?>",
                method: 'post',
                data: data,
                success: function(data){
                    alert(data['status']);
                    $('.Commentinput').val('');
                    }
           })
        }
       
     });

    // $(document).ready(function () {
    //     $('.etat').slideDown();
    //  });
 </script>