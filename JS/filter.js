$(document).ready(function(){


    var $search = $("#search").on('input',function(){
        var matcher = new RegExp($(this).val(), 'gi');
        $('.grid-item').show().not(function(){
            return matcher.test($(this).find('.name').text())
        }).hide();
        $('.grid').masonry();
    })
})
