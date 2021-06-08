<div id="panel-11" class="panel d-flex justify-content-center" style="width: 95%; heigth: auto; margin: auto; margin-top: 50px;">
    <div class="panel-hdr">
        <div class="panel-container show"  style="width: 100%;height: auto;">
            <div class="panel-content">
                <!-- <div class="panel-tag"> -->
                <ol class="breadcrumb breadcrumb-lg mb-0">

                    <li class="">
                    <?php foreach($subjects as $row){ ?>
                        <a href="<?= base_url();?>home" class="text-info"><?= $row['subject'];?></a> <span style="font-weight: bold;">></span>
                        <?php break; } ?>
                        <a href="<?= base_url();?>home" class="" style="color: orange;"><?= $subdir; ?></a> <span style="font-weight: bold;">></span>
                        <a href="<?= base_url();?>home" class="" style="color: orange;"><?php  ?></a> <span style="font-weight: bold;">></span>
                    </li>
   
                            </ol>
                            <!-- </div> -->
                            <br>
                        
                      <!--  <?= key($arrayFiles['fileTypes']) ?>
                            <?= $arrayFiles['details']['last-update'] ?>
                            <?= count($arrayFiles['fileLists']) ?> -->
                        

                            <!-- <?php 
                            $i = 0;
                            while($i != count($arrayFiles['fileLists'])){
                                $filePath = $arrayFiles['fileLists'][$i]; $explodeFile = explode("/", $arrayFiles['fileLists'][$i]);
                                $i++;
                            }
                            ?> -->
                            
                        <!-- STYLE -->
                        <style>
                            #title-view:hover 
                            {
                            cursor: pointer;
                            }
                        </style>
                        
                        <div class="row col-lg-12 table-responsive-lg">
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100 table-sortable" >
                                <thead class="">
                                    <tr>
                                        <th style="display:none;"></th>
                                        <th>Name</th>
                                        <th>Last Update</th>
                                        <th>File Size</th>
                                    
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
                            <?php  
                            
                            while($i != count($arrayFiles['fileLists'])) { $filePath = $arrayFiles['fileLists'][$i]; 
                                    $explodeFile = explode("/", $arrayFiles['fileLists'][$i]);
                                    $date = $arrayFiles['details']['last-update']  ?>
                                <tr id="title-view">
                    
                        
                                    <td > 
                                    <form id="open_folder" name="open_folder" action="<?= base_url();?>open_dir" method="post">
                                    <input style="" type="text" name="open_dir" id="open_dir" value="<?= $dir; ?>\<?= $arrayFiles['fileLists'][$i] ?>">
                                    <input style="" type="text" name="sub_dir" id="sub_dir" value="<?= $arrayFiles['fileLists'][$i] ?>">
                                    </form>
                                
                                    <?php 
                               
                                        $filepath = array();
                                        $filePath = $arrayFiles['fileTypes'];
                                        echo '<pre>';
                                        print_r($filePath);
                                        foreach($filePath as $row => $name){
                                            if($row == 'pdf') { 
                                                echo'<i class="fas fa-file-pdf fa-2x"  id="pdf"></i>';  
                                            } elseif(($row == 'txt' || ($row == 'doc') || ($row == 'docs')) ) { 
                                                echo'<i class="fas fa-file-word fa-2x"  id="docs"></i>';
                                            } elseif(($row  == 'png') || ($row == 'jpg') || ($row == 'jpeg')) { 
                                                echo'<i class="fas fa-file-image fa-2x"  id="image"></i>';
                                            } elseif(($row == 'ppt') || ($row == 'pptx')) {
                                                echo'<i class="fas fa-file-powerpoint fa-2x" style="color:  #AA3C00;" id="powerpoint"></i>';
                                            } elseif(($row  == 'mp4') ||( $row == 'mov') || ($row == 'wmv') || ($row == 'avi')) {
                                                echo'<i class="fas fa-file-video fa-2x"  id="video"></i>';
                                            } elseif(($row  == 'mp4') ||( $row == 'mov') || ($row == 'wmv') || ($row == 'avi')) {
                                                echo'<i class="fas fa-file-video fa-2x"  id="video"></i>';
                                            } elseif(($row  == 'directory' || 'dir')) {
                                                echo'<i class="fas fa-folder fa-2x"  id="folder" style="color: #808080;"></i>';
                                            } 
                            
                                        }
                                    
                                    echo '<script>
                                    $("td").dblclick(function() {
                                    $(this).parent().find("#open_folder").submit();
                                    });
                                    </script>'
                                    ?>
                                    
                                    &nbsp;&nbsp;&nbsp;<?= end($explodeFile); ?>
                                    </td>
                                    <td>  </td>
                                    <td> --
                                    </td>
                                
                                </tr>
                            <?php $i++ ?>
                            <?php } ?>
                
                    <?php } ?>  
                        
                                </tbody>
                                <tfoot class="thead-themed"> 
                            </tfoot>
                        </table>
            
                </div>

                
           
            </div>
        </div>
    </div>
</div>

