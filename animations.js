/**
 * Created by jpitl on 7/1/2016.
 */
$('form > div').hover(function () {
    $(this).animate({top: '20%', bottom: '0'});
}, function () {
    $(this).animate({top: '90%', bottom: '-100%'});
});