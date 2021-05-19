    <?= validation_errors();?> 

        <?php if($this->session->password === "phoenix927"){?>
        <?= '<script aria-hidden="true">' ?>   
                //    const show = () =>  $("document").ready(function() {
                //                 $("#js-sweetalert2-example-1").trigger('click');
                //                 Swal.fire("Change Default Password");

                //             });

            <?=  'const modal = () =>  $("document").ready(function() {' ?>
            <?=  '$("#modal1").trigger("click");' ?>
            <?=  ' });' ?>
            <?=  ' modal();' ?>
            <?=  ' </script>' ?>
        <?php } ?>
    

     