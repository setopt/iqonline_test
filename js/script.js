$(document).ready(function()
{
    $('#calc_res').click(function(){
        let date = $("#date").val();
        let sum =  $('#sum').val();
        let term = $('#term').val();
        let deposit_fill =  $("input[name='deposit_fill']:checked").val();
        let summadd =$('#summadd').val();
        $.ajax({

            url: "calc.php",
            method: "POST",
            data: {
                "date": date,
                "sum": sum,
                "term": term,
                "deposit_fill": deposit_fill,
                "summadd": summadd},
            success: function(response) {
                //let jsonData = JSON.parse(response);
                //alert(response);
                $('#result').empty();
                $('#result').append(response+" руб");
            }
        });
    });
});