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
                            <th>Title</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($title as $row){?>
                    
                        <tr>
                            <td><?= $row['title'];?></td>
                            <td style="max-width: 20px;"> <button id="js-login" type="submit" class="btn btn-primary waves-effect waves-themed">View</button>
                            <button id="js-login" type="submit" class="btn btn-primary waves-effect waves-themed">Download</button></td>
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
                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>