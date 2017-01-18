$(document).ready(function(){

    $("#form").submit(function(){
        $.ajax({type:"POST", data: $(this).serialize(), url:"post.php",
        success: function(data) {
            $("#post").html(data);
        },
            error: function() {
                $("#post").html('Une erreur est survenue');
            }
        });
        return false;
    });

});