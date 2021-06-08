$("td").dblclick(function() {
    var set_subject = $(this).parent().find("input").val();
    $("input#subject_id:text").val(set_subject);
    $("#title_id").submit();
    });


    
    $(document).ready(function(){
            Filter();
        $("#button").click(function(){
            let a = $(this).val();
            console.log(a);
            Filter();
        });
    });

    function Filter() {
       
        var type = $("#type").val();
        $.ajax({
            url : "<?= base_url('syncer/filter') ?>",
            data: "type=" + type,
            success:function(data){
                console.log(data);
                // $("#table_section tbody").html('<tr><td colspan="4" align="center">PATRICK</td></tr>');
                $("#dt-basic-example tbody").html(data);
            }
        });
    }