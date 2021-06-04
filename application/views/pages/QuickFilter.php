<div id="panel-11" class="panel d-flex justify-content-center">
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
            <div class="row col-lg-12 table-responsive-lg">
                <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100 table-sortable" >
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
                    <td><?= $explodeFile[6].'/'. $explodeFile[7];?> </td>
                    <!-- <td> <?= $arrayFiles['filesList'][$i]; ?> </td> -->
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
                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>

