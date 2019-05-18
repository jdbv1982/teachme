$(document).ready(function(){

    alert = new Alert('#notifications');

    function VoteForm(form, button, buttonRevert){
        var ticket = button.closest('.ticket');
        var id =  ticket.data('id');
        var action = form.attr('action').replace(':id', id);
        buttonRevert = ticket.find(buttonRevert);

        button.addClass('hidden');

        $.post(action, form.serialize(), function(response){

            buttonRevert.removeClass('hidden');

            alert.success('Voto eliminado');



        }).fail(function(){
            button.removeClass('hidden');

            alert.error('ocurrio un error :(');
        });
    }

    $('.btn-vote').click(function(e){
       e.preventDefault();

       var form = $('#form-vote');

       var button = $(this);
       var ticket = button.closest('.ticket');

       var id =  ticket.data('id');

       var action = form.attr('action').replace(':id', id);

       button.addClass('hidden');

       $.post(action, form.serialize(), function(response){
           ticket.find('.btn-unvote').removeClass('hidden');

           alert.success('Gracias por tu voto');


           var voteCount = ticket.find('.votes-count');
           var votos = parseInt(voteCount.text().split(' ')[0]);
            votos++;
           voteCount.text(votos == 1 ? '1 voto' : votos + ' votos' );
       }).fail(function(){
          button.removeClass('hidden');

          alert.error('ocurrio un error :(');
       });

    })



    $('.btn-unvote').click(function(e){
        e.preventDefault();

        var form = $('#form-unvote');

        var button = $(this);
        var ticket = button.closest('.ticket');

        var id =  ticket.data('id');

        var action = form.attr('action').replace(':id', id);

        button.addClass('hidden');

        $.post(action, form.serialize(), function(response){
            ticket.find('.btn-vote').removeClass('hidden');

            alert.success('Voto eliminado');


            var voteCount = ticket.find('.votes-count');
            var votos = parseInt(voteCount.text().split(' ')[0]);
            votos--;
            voteCount.text(votos == 1 ? '1 voto' : votos + ' votos' );
        }).fail(function(){
            button.removeClass('hidden');

            alert.error('ocurrio un error :(');
        });

    });

});
