    <?= validation_errors();?> 

        <?php if($this->session->password === md5('phoenix927')){?>
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
     
        <div class="containter">
            <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-9">
                    <div id="panel-11" class="panel d-flex justify-content-center" style="width: 100%; height: auto; margin: auto; margin-top: 70px;">
                        <div class="panel-hdr">
                            <h2>
                            Quick <span class="fw-300"><i>Filter</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn waves-effect waves-themed" style="color: #FF7800;" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse">Hide</button>
                            </div>
                        </div>

                        <div class="panel-container show">
                            <div class="panel-content">
                        
                                <div class="card-deck ">
                            
                                <div class="card text-center" style="background-color: #F5F5F5; height: 150px;">
                                    <form action="<?= base_url();?>filter" method="post">
                                        <button type="submit" class="btn" style="width: auto; margin: auto; ">
                                            <!--TYPE OF FILE-->
                                            <input style="display: none;" type="text" value="pdfs" name="type" id="type">
                                            <div class="card-body">
                                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                                <i class="fas fa-file-pdf fa-4x" id="pdf" style=""></i>
                                                <p class="card-text" id="pdf-text" style="margin-top: 15px;"><small class="font-weight-bold">PDF</small></p>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            
                                <div class="card text-center" style="background-color: #F5F5F5; height: 150px;">
                                    <form action="<?= base_url();?>filter" method="post">
                                        <button type="submit" class="btn">
                                            <!--TYPE OF FILE-->
                                            <input style="display: none;" type="text" value="images" name="type" id="type">
                                            <div class="card-body">
                                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                                <i class="fas fa-file-image fa-4x" id="image" style=""></i>
                                                <p class="card-text" id="image-text" style="margin-top: 15px;"><small class="font-weight-bold" style="">Image</small></p>
                                            </div>
                                        </button>
                                    </form>
                                </div>

                                <div class="card text-center" style="background-color: #F5F5F5; height: 150px;">
                                    <form action="<?= base_url();?>filter" method="post">
                                        <button type="submit" class="btn">
                                            <!--TYPE OF FILE-->
                                            <input style="display: none;" type="text" value="videos" name="type" id="type">
                                            <div class="card-body">
                                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                                <i class="fas fa-file-video fa-4x" id="video" style=""></i>
                                                <p class="card-text" id="video-text" style="margin-top: 15px;"><small class="font-weight-bold" style="">Video</small></p>
                                            </div>
                                        </button>
                                    </form>
                                </div>

                                <div class="card text-center" style="background-color: #F5F5F5; height: 150px;">
                                    <form action="<?= base_url();?>filter" method="post">
                                        <button type="submit" class="btn">
                                            <!--TYPE OF FILE-->
                                            <input style="display: none;" type="text" value="documents" name="type" id="type">
                                            <div class="card-body">
                                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                                <i class="fas fa-file-word fa-4x" id="docs" style=""></i>
                                                <p class="card-text" id="docs-text" style="margin-top: 15px;"><small class="font-weight-bold" style="">DOCS</small></p>
                                            </div>
                                        </button>
                                    </form>
                                </div>

                                <div class="card text-center" style="background-color: #F5F5F5;">
                                    <form action="<?= base_url();?>filter" method="post">
                                            <button type="submit" class="btn">
                                            <!--TYPE OF FILE-->
                                            <input style="display: none;" type="text" value="presentations" name="type" id="type">
                                            <div class="card-body">
                                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                                <i class="fas fa-file-powerpoint fa-4x " id="ppt" style=""></i>
                                                <p class="card-text" id="ppt-text" style="margin-top: 15px;"><small class="font-weight-bold" style="">PPT</small></p>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>

            
                    <table id="dt-basic-example" class="table table-bordered table-hover w-100" style="width: 100%;height: auto; ">
                        <thead class="">
                            <tr>
                                <th style="display:none;"></th>
                                <th>Name</th>
                                <th>Last Update</th>
                                <th col-spa>File size</th>
                                <th style="display:none;" >Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <style>
                            #title_view:hover 
                            {
                            cursor: pointer;
                            }
                            </style>
                
                        <?php foreach($subjects as $row){?>

                            <form id="title_id" name="title_id" action="<?= base_url();?>title" method="post">
                                <tr id="title_view" ondblclick="myFunction()" value="<?= $row['subject_id'];?>">     
                                    <td id="td_value" name="td_value" value="<?= $row['subject_id'];?>"><i class="fa fa-folder fa-1x" style="color: #808080;">&nbsp;</i> <?= $row['subject'];?></td>
                                    <td > <?= $row['last_update'];?> </td>
                                    <td >--</td>
                    
                                    <td style=""> 
                                        <input style="display:none;" id="subject_id" name="subject_id" type="text" value="<?= $row['subject_id'];?>">
                                        <!-- <input style="display:none;" id="subject" name="subject" type="text" value="<?= $row['subject'];?>"> -->
                                        <!-- <input style="display:none;" id="title" name="title" type="text" value="<?= $row['subject'];?>"> -->
                                        <button style="display:none;" type="submit" id="view" class="btn btn-primary waves-effect waves-themed">View</button>
                                    </td >
                            </form> 

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
            
                </div>

                <style>
                @media (max-width: 480px) {
                    .side-icon {
                        width: 120px !important;
                    }
                }
                </style>
        
                <div class="" style="">
                </div>
                <div class="col-sm-3" style="height: 100vh; background-color: #F5F5F5; padding-right: 0;">
                <h4 class="nav-link-text resources pt-5 pl-2 pb-3" style="color: #808080;" data-i18n="nav.theme_settings"><i class="fas fa-folder folder" style="color: #808080;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resources</h4>
                <div class="panel-content"  style="width: 100% !important;">
                
                    <ul class="nav nav-tabs" role="tablist" style="width: 100% !important;">
  
                        <li class="nav-item text-center side-icon" style="width: 80px;">
                            <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-1" role="tab" aria-selected="true"><i class="fal fa-info-circle mr-1"></i></a>
                        </li>
     
   
                        <li class="nav-item text-center side-icon" style="width: 80px;">
                            <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-2" role="tab" aria-selected="false"><i class="fal fa-clock"></i></a>
                        </li>
     
           
                        <li class="nav-item text-center side-icon" style="width: 80px;">
                            <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-2" role="tab" aria-selected="false">
                        <i class="fal fa-comments"></i></a>
                        </li>
           
                    </ul>
            
                    <div class="tab-content border border-top-0 p-3">
                        <div class="tab-pane fade active show" id="tab_borders_icons-1" role="tabpanel">
                            No details to view.
                        </div>
                        <div class="tab-pane fade" id="tab_borders_icons-2" role="tabpanel">
                            No details to view.
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>


        <!--DOUBLE CLICK FUNCTION-->
        <script>
        $("td").dblclick(function() {
        var set_subject = $(this).parent().find("input").val();
        $("input#subject_id:text").val(set_subject);
        $("#title_id").submit();
        });
        </script>