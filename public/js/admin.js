var locationHref = $(location).attr('href');
var path = locationHref.slice(0 , locationHref.indexOf('admin'));

$('.slider.round').on('click', function(event) {
    var userId = $(this).attr('data-userId');
    $.ajax({
        url: `${path}admin/user/change-state/` + userId,
        type: 'get',
        success: function( _response ){
            console.log('thành công');
        },
        error: function( _response ){
            console.log('thất bại');
        }
    });
})

$('.slider1.round1').on('click', function(event) {
    var id = $(this).attr('data-id');
    $.ajax({
        url: `${path}admin/comment/change-state/` + id,
        type: 'get',
        success: function( _response ){
            console.log('thành công');
        },
        error: function( _response ){
            console.log('thất bại');
        }
    });
})

$('.admin-reply-comment-btn').on('click', function() {
    var parentID = $(this).attr('data-parentID');
    var commentID = $(this).attr('data-id');
    var articleID = $(this).attr('data-articleID');
    var commentContent = $(`.admin-comment-content.${commentID}`).html();
    $("input[name='articleID']").val(articleID);
    $('.modal-comment-content').html(commentContent)
    var urlAction = `${path}admin/reply-comment/${parentID}`;
    $('#reply-comment-form').attr('action', urlAction);
});

$('.reply-comment-confirm').on('click', function() {
    $('#reply-comment-form').submit();
})


