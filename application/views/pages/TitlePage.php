<div id="panel-11" class="panel d-flex justify-content-center" >
    <div class="panel-hdr">
        <div class="panel-container show"  >
            <div class="panel-content">
                <!-- <div class="panel-tag">
                    <a href="<?= base_url();?>home" class="btn btn-primary waves-effect waves-themed"> <i class="fal fa-arrow-circle-left"></i> </a>
                   <i style="float: right;">
                    Subject Items
                   </i>
                </div> -->
                    <!-- datatable start -->
                <div class="row col-lg-12 table-responsive-lg table-responsive table-responsive-md table-responsive-sm">
                    <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100 table-sortable" style="">
                        <thead class="">
                            <tr>
                                <th ></th>
                                <th>Title</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($titles as $row){?>
                        
                            <tr>
                                <td><?= $row['title'];?></td>
                                <td style="max-width: 20px; "> 
                                    <form id="title_id" name="title_id" action="<?= base_url();?>viewTitle" method="post">
                                        <input style="display:none;" id="title_id" name="title_id" type="text" value="<?= $row['title_id'];?>">
                                        <input style="display:none;" id="title" name="title" type="text" value="<?= $row['title'];?>">
                                        <button style="" type="submit" id="view" class="btn btn-primary waves-effect waves-themed">View</button>
                                        <a style="" href="<?= base_url();?>files/<?= $row['title'];?>" id="view" type="submit" class="btn btn-primary waves-effect waves-themed" download>Download</a>
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
                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>

