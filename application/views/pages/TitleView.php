<div id="panel-11" class="panel d-flex justify-content-center" style="width: 50%; heigth: auto; margin: auto; margin-top: 100px;">
    <div class="panel-hdr">
        <div class="panel-container show"  style="width: 100%;height: auto;">
            <div class="panel-content">
                <div class="panel-tag">
                   <i>Subject Items</i>
                </div>

           

                <?php foreach($title as $row){?>
                    
                    <?php $title = $row['title']; ?>
                    <?= $title ?>

                        <iframe class="tabContent" name="myIframe" src="<?= base_url();?>files/<?= $row['title'];?>" marginheight="8" marginwidth="8" style="margin:0; padding:0; width:100%; height:600px; border:none; overflow:hidden;' scrolling='no';"></iframe>  
               
                <?php } ?>  
              
                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>

