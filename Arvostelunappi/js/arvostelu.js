$(function () {
    $('span').hover(function () {
        var li = $(this);
        li.prevAll().andSelf().addClass('golden');
    }, function () {
        var li = $(this);
        li.prevAll().andSelf().removeClass('golden');
    });

    $('#stars li').click(function () {
        var li = $(this);
        $('#rating').text(li.data('rating'));
    });
})();