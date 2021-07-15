$(document).ready(function(){
    $("#submit-but").click(function(){
    //Get all fields value using jQury
    var nome_utente = $("#nome_utente").val();
    var password = $("#password").val();

    //create a datastring
    var dataString = 'nome_utente='+ nome_utente + '&password='+ password;
    
    // validation for enter all fields in HTML form
    $.ajax({
        type: "POST",
        url: "formsubmit.php",
        data: dataString,
        cache: false,
        success: function(result){
            Swal.fire(
                'Confermato',
                'Accesso consentito',
                'success'
              )
        }
        
        });

    return false;
    });
    });