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

  
        <div id="panel-11" class="panel d-flex justify-content-center" style="width: 50%; heigth: auto; margin: auto; margin-top: 100px;">
            <div class="panel-hdr">
                <h2>
                    Subject <span class="fw-300"><i>Folders</i></span>
                  
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <!-- <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button> -->
                </div>
            </div>

     
         
            <div class="panel-container show">
                <div class="panel-content">
                    <!-- <div class="panel-tag">
                        Need a set of equal width and height cards that aren’t attached to one another? Use card decks.
                    </div> -->
                    <div class="card-deck">

                             <?php foreach($subjects as $row){?>
                             
                            <form id="home_folder" name="home_folder" action="<?= base_url();?>title" method="post">
                               
                                <div class="card">
                                    <div class="w-100 bg-fusion-50 rounded-top" style="padding:40px 0 40px;"></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row['subject'];?></h5>
                                        <input id="subject_id" name="subject_id" type="text" style="display: none;" value="<?= $row['subject_id'];?>">
                                        <!-- <p class="card-text ml-5"><?= $row['title'];?></p> -->
                                    </div>
                                    <div class="card-footer">
                                        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                                        <button type="submit" class="btn btn-primary waves-effect waves-themed">Open</button>
                                    </div>
                                </div>

                            </form>
                            <?php } ?>      

                            <style>
                            .card-deck{
                                    margin-top: 10px;
                                    margin-left: auto;
                                    display: grid;
                                    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                                    grid-gap: .5rem;
                                }
                            </style>

                    </div>
                </div>
            </div>
        </div>
        
    
      
     