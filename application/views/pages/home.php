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

<div class="containter">
    <div class="row">
    <div class="col-sm-9 col-md-9 col-lg-9">
            <div id="panel-11" class="panel d-flex justify-content-center" style="width: 100%; height: auto; margin: auto; margin-top: 70px;">
                <div class="panel-hdr">
                    <h2>
                       Quick <span class="fw-300"><i>Filter</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn waves-effect waves-themed" style="color: #FF7800; " data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse">Hide</button>
                    </div>
                </div>

                <div class="panel-container show">
                    <div class="panel-content">
                
                        <div class="card-deck">

                        <div class="card text-center" style="width: 50%; background-color: #F5F5F5;">
                            <div class="card-body">
                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                <i class="fas fa-file-pdf fa-6x" style="color: red;"></i>
                                <p class="card-text" style="margin-top: 15px;"><small class="font-weight-bold text-danger">PDF</small></p>
                            </div>
                        </div>

                        <div class="card text-center" style="width: 50%; background-color: #F5F5F5;">
                            <div class="card-body">
                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                <i class="fas fa-file-image fa-6x" style="color: #7FFF00;"></i>
                                <p class="card-text" style="margin-top: 15px;"><small class="font-weight-bold" style="color:#7FFF00;">Image</small></p>
                            </div>
                        </div>

                        <div class="card text-center" style="width: 50%; background-color: #F5F5F5;">
                            <div class="card-body">
                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                <i class="fas fa-file-video fa-6x" style="color: #4B0082;"></i>
                                <p class="card-text" style="margin-top: 15px;"><small class="font-weight-bold" style="color:#4B0082;">Video</small></p>
                            </div>
                        </div>

                        <div class="card text-center" style="width: 50%; background-color: #F5F5F5;">
                            <div class="card-body">
                                <h5 class="card-title" style="visibility: hidden;"></h5>
                                <i class="fas fa-file-word fa-6x" style="color: #0000FF;"></i>
                                <p class="card-text" style="margin-top: 15px;"><small class="font-weight-bold" style="color:#0000FF;">DOCS</small></p>
                            </div>
                        </div>

                                
                        </div>
                    </div>
                </div>
            </div>
            
            <br>

            <table id="dt-basic-example" class="table table-bordered table-hover w-100" style="width: 100%;height: auto; ">
                <thead class="bg-warning-500">
                    <tr>
                        <th style="display:none;"></th>
                        <th>Name</th>
                        <th>Last Update</th>
                        <th>File size</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($subjects as $row){?>
                
                    <tr>
                         
                        <td><i class="fa fa-folder fa-1x" style="color: #808080;">&nbsp;</i> <?= $row['subject'];?></td>
                        <td> <?= $row['last_update'];?></td>
                        <td>--</td>
                        <td style=""> 
                            <form id="title_id" name="title_id" action="<?= base_url();?>title" method="post">
                                <input style="display:none;" id="subject_id" name="subject_id" type="text" value="<?= $row['subject_id'];?>">
                                <!-- <input style="display:none;" id="title" name="title" type="text" value="<?= $row['subject'];?>"> -->
                                <button type="submit" id="view" class="btn btn-primary waves-effect waves-themed">View</button>
                            </form>

                        </td>
                    </tr>

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
        <div class="col-sm-" style="">
        </div>
        <div class="col-sm-3" style="height: 100vh; background-color: #F5F5F5; padding-right: 0;">
        <h4 class="nav-link-text resources pt-5 pl-2 pb-3" style="color: #808080;" data-i18n="nav.theme_settings"><i class="fas fa-folder folder" style="color: #808080;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resources&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>x</span></h4>
        <div class="panel-content">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-1" role="tab" aria-selected="true"><i class="fal fa-folder-open mr-1"></i> Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-2" role="tab" aria-selected="false"><i class="fal fa-align-right mr-1"></i> Activity</a>
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
  