
$('.nav-tabs>li').on('click', function(){

    $('.nav-tabs').children().removeClass('active');
    $(this).addClass('active');
});


$('.nav-tabs>li>a').on('click', function(){

    var link = $(this).first('a').attr('href');
    var input_search = $('#input-search');

    (link=='#noticias')? input_search.attr('placeholder','Busca noticias y novedades'):link;
    (link=='#lugares')? input_search.attr('placeholder','Busca lugares y sitios'):link;
    (link=='#estadisticas')? input_search.attr('placeholder','Busca datos y estadisticas'):link;
});


//Typeahead Initializer
$('.typeahead1').typeahead({
    source: ['Mitra1','Ranfis1','Juan1']
});

$('.typeahead2').typeahead({
    source: ['Mitra2','Ranfis2','Juan2']
});

$('.typeahead3').typeahead({
    source: ['Mitra3','Ranfis3','Juan3']
});

$('.txt').keypress(function(e){
    if(e.keyCode == '32' || e.keyCode == '0'){
        alert('hey');
    }
    $(this).addClass('deletable');
});


//Chosen Initializer
//$(".chzn-select").chosen();