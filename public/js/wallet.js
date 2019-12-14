$(document).ready(function()
{
    var dataurl,baseurl,url,id,address;
    $('#wallet').click(function()
    {
        baseurl=$(this).attr('base-url');
        dataurl=$(this).attr('data-url');
        id=$(this).attr('data-id');
    });
    $('.btn-outline-light').click(function()
    {
        address=$('#address').val();
        url=baseurl+dataurl+'/'+id+'/'+address;
        $('.withdraw-form').attr("action",url);

        $('body').find('.withdraw-form').append('<input type="hidden" value="'+id+'">');
    });
});