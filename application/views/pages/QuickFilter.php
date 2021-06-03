<div id="panel-11" class="panel d-flex justify-content-center" style="width: 80%; heigth: auto; margin: auto; margin-top: 50px;">
    <div class="panel-hdr">
        <div class="panel-container show"  style="width: 100%;height: auto;">
            <div class="panel-content">
                <!-- <div class="panel-tag">
               <a href="<?= base_url();?>home" class="btn btn-primary waves-effect waves-themed"> <i class="fal fa-arrow-circle-left"></i> </a>
                   <i style="float: right;">
                    Subject Items
                   </i>
                </div> -->
                <!-- datatable start -->
                <table id="dt-basic-example" class="table table-bordered table-hover w-100" style="width: 100%;height: 100%; ">
                    <thead class="">
                        <tr>
                            <th style="display:none;"></th>
                            <th>Name</th>
                            <th>Last Update</th>
                            <th>File Size</th>
                            <th>Folder</th>
                        </tr>
                    </thead>
                    <tbody>

            <!--FILTER FILES PATH-->
            <!-- <?php   $x = 0; ?>
                <?php while($x != count($filteredFiles['filesList'])) { ?>
           
                        <td><?= $filteredFiles['filesList'][$x];?></td>
                  
                    <?php $x++ ?>
                    <?php } ?> -->

        <!--LOOP THROUGH TAGGED TITLES-->
        <?php if(!empty($subjects)){?>
            <!--FILTER FILES TITLE-->
            <?php   $i = 0; ?>
            <?php  while($i != count($arrayFiles['filesList'])) { $filePath = $arrayFiles['filesList'][$i]; $explodeFile = explode("/", $arrayFiles['filesList'][$i]);?>
                <tr>
       
          
                    <td> 
                   
                    <?php if($filePath = key($arrayFiles['fileTypes']) == 'pdf') { ?>

                    <i class="fas fa-file-pdf fa-2x"  id="pdf"></i> <?php } elseif($filePath = key($arrayFiles['fileTypes']) == 'txt') {?> 
                    <i class="fas fa-file-word fa-2x"  id="docs"></i> <?php } elseif($filePath = key($arrayFiles['fileTypes']) == 'image') { ?>
                    <i class="fas fa-file-image fa-2x"  id="image"></i> <?php } elseif($filePath = key($arrayFiles['fileTypes']) == 'powerpoint') { ?>
                    <i class="fas fa-file-image fa-2x"  id="powerpoint"></i> <?php } elseif($filePath = key($arrayFiles['fileTypes']) == 'video') { ?>
                    <i class="fas fa-file-imavideoge fa-2x"  id="video"></i> <?php } ?>
                    &nbsp;&nbsp;&nbsp;<?= end($explodeFile);?>
            
                    </td>
                    <td> <?=date( "Y/m/d H:i:s", filemtime( $arrayFiles['filesList'][$i] ));?> </td>
                    <td> <?= round((filesize( $arrayFiles['filesList'][$i] )) / 1024, 2);?>.kb </td>
                    <td><?= md5($filePath);?> </td>

                </tr>
            <?php $i++ ?>
            <?php } ?>

        <?php } ?>  
            

                    </tbody>
                    <tfoot class="thead-themed">
                        <!-- <tr>
                            <th colspan="4">Name</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr> -->
                    </tfoot>
                </table>

                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>

