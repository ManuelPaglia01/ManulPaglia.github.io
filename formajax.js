$(document).ready(function(){
    $("#submit-but").click(function(){
    //Get all fields value using jQury
    var nome_debitore = $("#nome_debitore").val();
    var somma_debito = $("#somma_debito").val();
    var data_debito = $("#data_debito").val();

    //create a datastring
    var dataString = 'nome_debitore='+ nome_debitore + '&somma_debito='+ somma_debito +'&data_debito=' + data_debito;
    
    // validation for enter all fields in HTML form
    $.ajax({
        type: "POST",
        url: "formsubmit.php",
        data: dataString,
        cache: false,
        success: function(result){
            Swal.fire(
                'Confermato',
                'Debito inserito correttamente $$',
                'success'
              )
        }
        
        });

    return false;
    });
    });