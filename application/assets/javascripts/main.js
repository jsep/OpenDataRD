
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