<div id="panel-11" class="panel d-flex justify-content-center" style="width: 80%; heigth: auto; margin: auto; margin-top: 50px;">
    <div class="panel-hdr">
        <div class="panel-container show"  style="width: 100%;height: auto;">
            <div class="panel-content">
                <!-- <div class="panel-tag"> -->

                <ol class="breadcrumb breadcrumb-lg mb-0">

                    <li class="breadcrumb-item">
      
                    <?php foreach($titles as $row){ ?>
                        <a href="<?= base_url();?>home" class="text-info"><?= $row['subject'];?>&nbsp;</a><span style="font-weight: bold;">></span>
                        <?php break; } ?>
                    </li>
                </ol>
                <!-- </div> -->
                <br>
                    <!-- datatable start -->

                <div class="row col-lg-12 table-responsive-lg table-responsive table-responsive-md table-responsive-sm">
                    <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100 table-sortable" style="">
                        <thead class="">
                            <tr>
                              
                                <th>Name</th>
                                <th style="">Last Update</th>
                                <th style="">File Size</th>
                        
                            </tr>
                        </thead>
                        <tbody>

                        <style>
                            #title-view:hover 
                            {
                            cursor: pointer;
                            }
                        </style>

                        <?php foreach($titles as $row){?>
                        
                            <tr id="title-view">
                                <td><i class="fa fa-folder fa-1x" style="color: #808080;">&nbsp;</i><?= $row['title'];?></td>
                                <td style="max-width: 20px;"> 
                                    <form id="open_folder" name="open_folder" action="<?= base_url();?>open_dir" method="post">
                                        <input style="" id="title_id" name="title_id" type="text" value="<?= $row['title_id'];?>">
                                        <input style="" id="title_dir" name="title_dir" type="text" value="<?= $row['title'];?>">
                                        <input style="" id="open_dir" name="open_dir" type="text" value="<?= $row['subject'];?>\<?= $row['title'];?>">
                                        <input style="" id="dir" name="dir" type="text" value="<?= $row['title'];?>">
                                        <?= $row['last_update'];?>
                                        <button style="display:none;" type="submit" id="view" class="btn btn-primary waves-effect waves-themed">View</button>
                                        <!-- <a style="" href="<?= base_url();?>files/<?= $row['title'];?>" id="view" type="submit" class="btn btn-primary waves-effect waves-themed" download>Download</a> -->
                                    </form>

                                </td>
                                <td>
                                 --
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
                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>


    <!--DOUBLE CLICK FUNCTION-->
    <script>
    $("td").dblclick(function() {
    $(this).parent().find("#open_folder").submit();
    });
    </script>