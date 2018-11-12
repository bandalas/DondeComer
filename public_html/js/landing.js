$('#homeMade, #homeMade-list').on('click', function(){  
    callAjaxFunction('comida_corrida');
});

$('#home, #home-list').on('click', function(){
    callAjaxFunction('home');
});

$('#mexican, #mexican-list').on('click', function(){
    callAjaxFunction('mexicana');
});

$('#american, #american-list').on('click', function(){
    callAjaxFunction('americana');
});

$('#asian, #asian-list').on('click', function(){
    callAjaxFunction('asiatica');
});



function callAjaxFunction(dataAction)
{
    $.ajax({
        type: 'post',
        url : '/app/controller/data.php',
        data: {action: dataAction},
        dataType: 'html',
        success: function(response){          
            $('#content').html(response);
        }
    });
}

$('#register-restaurant').on('click',function(){
    $.ajax({
        type: 'get',
        url : 'suggest.php',
        dataType: 'html',
        success: function(response){          
            $('#restaurant-list').html(response);
        }
    });
});