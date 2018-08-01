setInterval(function () {
    $.ajax({
        url: "return.php", 
        success:
            function(retour){
                console.log(retour);
            $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
        }
    });

    }, 2000) // Répète la fonction toutes les 2 sec
    
    function storeMessage(event, form) {
        //N'envoie pas le formulaire
        event.preventDefault();
        console.log($('form').serialize());
        $('form').find('.btn').text('En cours..');
    
        console.log($('form').attr('action'))
        $.post('send.php', $('form').serialize(),  function (error) {
                if (error) {
                    alert(error);
                }
                //working
                $('form').find('.btn').text('Envoyer');
                document.getElementById("message").value="";
            });
    }
