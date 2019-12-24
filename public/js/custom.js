$(document).ready(function()
{
    $('.remove-record').click(function()
    {
        var url=$(this).attr('data-url');
        var id=$(this).attr('data-id');
        $('.form').attr("action",url);
        $('body').find('.form').append('<input type="hidden" value="'+id+'">');
    });
    $('.remove-form-data').click(function()
    {
        $('body').find('.form').find("input").remove();
    });

});