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
                        <th>Title</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($subjects as $row){?>
                
                    <tr>
                         
                        <td><i class="fa fa-folder fa-1x" style="color: #808080;">&nbsp;</i> <?= $row['subject'];?></td>
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
        </div>
    </div>
</div>
  

        
      

 



<table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline" role="grid" aria-describedby="dt-basic-example_info" style="width: 988px; position: relative;">
    <thead class="bg-info-600">
        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dt-basic-example" rowspan="1" colspan="1" style="width: 55px;" aria-label="Seq.: activate to sort column descending" aria-sort="ascending">Seq.</th><th class="sorting" tabindex="0" aria-controls="dt-basic-example" rowspan="1" colspan="1" style="width: 150px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="dt-basic-example" rowspan="1" colspan="1" style="width: 230px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="dt-basic-example" rowspan="1" colspan="1" style="width: 110px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="dt-basic-example" rowspan="1" colspan="1" style="width: 101px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="dt-basic-example" rowspan="1" colspan="1" style="width: 85px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
    </thead>
    <tbody>
    <tr role="row" class="odd">
            <td class="sorting_1" tabindex="0">1</td>
            <td class="">Shou Itou</td>
            <td>Regional Marketing</td>
            <td>Tokyo</td>
            <td>2011/08/14</td>
            <td>$163,000</td>
        </tr><tr role="row" class="even">
            <td tabindex="0" class="sorting_1">2</td>
            <td class="">Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr><tr role="row" class="odd">
            <td class="sorting_1" tabindex="0">3</td>
            <td class="">Bruno Nash</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>2011/05/03</td>
            <td>$163,500</td>
        </tr><tr role="row" class="even">
            <td class="sorting_1" tabindex="0">4</td>
            <td class="">Olivia Liang</td>
            <td>Support Engineer</td>
            <td>Singapore</td>
            <td>2011/02/03</td>
            <td>$234,500</td>
        </tr><tr role="row" class="odd">
            <td class="sorting_1" tabindex="0">5</td>
            <td class="">Gavin Joyce</td>
            <td>Developer</td>
            <td>Edinburgh</td>
            <td>2010/12/22</td>
            <td>$92,575</td>
        </tr><tr role="row" class="even">
            <td tabindex="0" class="sorting_1">6</td>
            <td class="">Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>2009/01/12</td>
            <td>$86,000</td>
        </tr><tr role="row" class="odd">
            <td class="sorting_1" tabindex="0">7</td>
            <td class="">Fiona Green</td>
            <td>Chief Operating Officer (COO)</td>
            <td>San Francisco</td>
            <td>2010/03/11</td>
            <td>$850,000</td>
        </tr><tr role="row" class="even">
            <td class="sorting_1" tabindex="0">8</td>
            <td class="">Martena Mccray</td>
            <td>Post-Sales support</td>
            <td>Edinburgh</td>
            <td>2011/03/09</td>
            <td>$324,050</td>
        </tr><tr role="row" class="odd">
            <td class="sorting_1" tabindex="0">9</td>
            <td class="">Hermione Butler</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>2011/03/21</td>
            <td>$356,250</td>
        </tr><tr role="row" class="even">
            <td class="sorting_1" tabindex="0">10</td>
            <td class="">Finn Camacho</td>
            <td>Support Engineer</td>
            <td>San Francisco</td>
            <td>2009/07/07</td>
            <td>$87,500</td>
        </tr></tbody>
    <tfoot>
        <tr><th rowspan="1" colspan="1">Seq.</th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
    </tfoot>
</table>

<script>
            var events = $('#app-eventlog');
            var clearlogText = function()
            {
                events.empty();
            }

            $(document).ready(function()
            {
                var table = $('#dt-basic-example').DataTable(
                {
                    responsive: true,
                    rowReorder:
                    {
                        selector: 'tr td:not(:first-child)'
                    },
                    filter: false, //for demo purpose only
                    lengthChange: false //for demo purpose only
                });

                /* log events - demo purpose only */
                table.on('row-reorder', function(e, diff, edit)
                {
                    var result = '<div class="mt-2 mb-1"><span class="badge badge-primary">Reorder</span> started for row <span class="text-info">' + edit.triggerRow.data()[1] + '</span></div>';
                    for (var i = 0, ien = diff.length; i < ien; i++)
                    {
                        var rowData = table.row(diff[i].node).data();

                        result += '<div class="my-1"><span class="text-info">' + rowData[1] + '</span> updated to be in position ' +
                            diff[i].newData + ' ( <span class="font-italic">was ' + diff[i].oldData + '</span> )</div>';
                    }
                    events.prepend(result);
                });

            });

        </script>