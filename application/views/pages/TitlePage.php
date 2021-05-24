<div id="panel-11" class="panel d-flex justify-content-center" style="width: 50%; heigth: auto; margin: auto; margin-top: 100px;">
    <div class="panel-hdr">
        <div class="panel-container show"  style="width: 100%;height: auto;">
            <div class="panel-content">
                <div class="panel-tag">
                   <i>Subject Items</i>
                </div>
                <!-- datatable start -->
                <table id="dt-basic-example" class="table table-bordered table-hover w-100" style="width: 100%;height: 100%; ">
                    <thead class="bg-warning-500">
                        <tr>
                            <th style="display:none;"></th>
                            <th>Title</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($title as $row){?>
                    
                        <tr>
                            <td style="display:none;"><input type="text" value="<?= $row['title_id'];?>"></td>
                            <td><?= $row['title'];?></td>
                            <td style="max-width: 20px;"> 

                            <a href="<?= base_url();?>files/<?= $row['title'];?>" id="view" class="btn btn-primary waves-effect waves-themed">View</a>
                            
                            
                            <a href="<?= base_url();?>files/<?= $row['title'];?>" id="view" type="submit" class="btn btn-primary waves-effect waves-themed" download>Download</a>

                            </td>
                        </tr>
                        <!-- <iframe class="tabContent" name="myIframe" src="<?= base_url();?>files/pdf.pdf" marginheight="8" marginwidth="8" style="margin:0; padding:0; width:100%; height:800px; border:none; overflow:hidden;' scrolling='no';"></iframe> -->

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

