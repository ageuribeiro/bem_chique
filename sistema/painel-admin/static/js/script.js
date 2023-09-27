
/* Modal Profile Open*/
$('.settingsProfile').click(function(){
    $('#modalProfile').modal('show');
});

/* Modal Profile Close */
$('.btn-close, #btn-fechar-perfil').click(function(){
    $('#modalProfile').modal('hide');
});

/* Para fechar o panel-admin*/
$('#log_out').click(function() {
    $.ajax({
        url: '../logout.php',
        method: 'POST',
        success: function(response){
            alert('Logout realizado com sucesso');
            location.reload();
        },
        error: function(error){ 
            alert('Ocorreu um erro durante o logout. Por favor tente novamente.');
        }
    });
});

$('input[type="checkbox"]').click(function() {
    var isChecked = $(this).prop('checked');
    var row = $(this).closest('tr');
    var id = row.data('id');

    if(isChecked){
        
        console.log('ID selecionado: ' + id);
    }else{
        console.log('ID não selecionado: ' + id);
    }
});

/*Transisão de efeito da tela do admin */
$(document).ready(function() {
    $('#sidebar-menu, #content-pages').show();

    setTimeout(function() {
        $('#sidebar-menu').removeClass('fade-in'); 
        $('#sidebar-menu').addClass('fade-out');
    }, 250);

    setTimeout(function() {
        $('#content-pages').removeClass('fade-in'); 
        $('#content-pages').addClass('fade-out');
    }, 650);

    setTimeout(function() {
        $('#sidebar-menu').removeClass('slide-in-left');
        $('#sidebar-menu').addClass('slide-in-right');
    }, 250);

    setTimeout(function() {
        $('#content-pages').removeClass('slide-in-left');
        $('#content-pages').addClass('slide-in-right');
    }, 650);

});

/* mudar de cor ao clicar no input checkbox da linha da tabela */