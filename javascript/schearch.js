
jQuery.noConflict();
(function($) {
    $(document).ready(function(){
        $("#recherche").keyup(function(){

            var recherche = $(this).val();
            var data = 'motclef='+ recherche;

            if (recherche.length>2){
    
                $.ajax({
                    type : "GET",
                    url :"?page=result",
                    data : data,
                    success: function(server_response){
                        console.log(server_response);
                        $("#result").html(server_response).show();
                    }
                });
            }
        });
    });
})(jQuery);
