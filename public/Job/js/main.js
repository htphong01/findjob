var $userToGetInfor = $('.comment-user-infor');
var userId = $userToGetInfor.data('id');
var userName = $userToGetInfor.data('name');
var userImage = $userToGetInfor.data('image');
var commentId= '';
var locationHref = $(location).attr('href');
var path = locationHref.slice(0 , locationHref.indexOf('article-details'));

$(".customer-more").hide();

$(".customer_name").on('mouseover', function() {
    $(".customer-more").show();
});

$(".customer-more").on('mouseover', function() {
    $(this).show();
})

$(".customer-more").on('mouseout', function() {
    $(this).hide();
});

$(".cpw-error").hide();

$('#re-newPassword').on('keyup', function() {
    if($("#newPassword").val() == $(this).val()) {
        $(".cpw-error").hide();
        $("#cpw-btn").prop('disabled', false);
    } else {
        $(".cpw-error").show();
        $("#cpw-btn").prop('disabled', true);
    }
});

$(".forgot-error").hide();


$(".bar-icon").on('click', function() {
	$(".bar-icon").toggleClass('change');
	$(".mobile-menu").slideToggle();
});

$(".forgot-password-error").hide();
$('#forgot-repassword').on('keyup', function() {
    if($("#forgot-password").val() == $(this).val()) {
        $(".forgot-password-error").hide();
        $("#forgot-btn").prop('disabled', false);
    } else {
        $(".forgot-password-error").show();
        $("#forgot-btn").prop('disabled', true);
    }
});

$('.article-your-sub-comments-block').hide();
$('.user-comment-reply').on('click', function(event) {
    event.stopPropagation();
    event.stopImmediatePropagation();
    commentId = $(this).attr('data-id');
    $(`.article-your-sub-comments-block.${commentId}`).toggle();
    $(`.article-your-sub-comments-block`)
        .not(`.article-your-sub-comments-block.${commentId}`)
        .hide();
})

$('.article-your-comments-block').submit(function( event ) {
    event.preventDefault();
    $.ajax({
        url: `http://localhost/FindJob/public/api/comment`,
        type: 'post',
        data: $('.article-your-comments-block').serialize(),
        success: function( _response ){
            var content = $('.article-your-comments-area').val();
            var html = `<div class="article-user-comments-wrap">
                        <div class="user-comments">
                            <div class="user-comments-ava">
                                <img src="${path}/${userImage}" class="user-comments-img">
                            </div>
                            <div class="user-comments-details">
                                <div class="user-comments-head">
                                    <div class="user-comment-name">
                                        ${userName}
                                    </div>
                                    <div class="user-comment-time">
                                        Vừa xong
                                    </div>
                                </div>
                                <div class="user-comment-content">
                                    ${content}
                                </div>
                                <div class="user-comment-action">
                                    <div class="user-comment-liked">
                                        <i class="far fa-thumbs-up"></i> 0
                                    </div>
                                    <div class="user-comment-reply" data-id="${commentId}">
                                        <i class="fas fa-reply"></i> Trả lời
                                    </div>
                                    <div class="user-comment-action-more">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
            $('.article-user-comments-wrap').prepend(html);
            $('.article-your-comments-area').val('');
            console.log(_response.status);
        },
        error: function( _response ){
            console.log(_response.json());
        }
    });
});

$('.article-your-sub-comments-block').submit(function( event ) {
    event.preventDefault();
    var CurrentForm = $(this);
    $.ajax({
        url: 'http://localhost/FindJob/public/api/comment',
        type: 'post',
        data: CurrentForm.serialize(),
        success: function( _response ){
            var content = $(`.article-your-comments-area.${commentId}`).val();
            var html = `<div class="user-comments user-comments-sub">
                            <div class="user-comments-ava">
                                <img src="${path}/${userImage}" class="user-comments-img">
                            </div>
                            <div class="user-comments-details">
                                <div class="user-comments-head">
                                    <div class="user-comment-name">
                                        ${userName}
                                    </div>
                                    <div class="user-comment-time">
                                        <?php
                                            Vừa xong
                                        ?>
                                    </div>
                                </div>
                                <div class="user-comment-content">
                                        ${content}
                                </div>
                                <div class="user-comment-action">
                                    <div class="user-comment-liked">
                                        <i class="far fa-thumbs-up"></i> 0
                                    </div>
                                    <div class="user-comment-reply" data-id="${commentId}">
                                        <i class="fas fa-reply"></i> Trả lời
                                    </div>
                                    <div class="user-comment-action-more">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
            $(`.user-comments-sub-block.${commentId}`).prepend(html);
            $(`.article-your-comments-area.${commentId}`).val('');
        },
        error: function( _response ){
            console.log(JSON.stringify(_response));
        }
    });
});

$('.user-comment-action-more').hide();

$('.user-comment-more-icon').on('click', function() {
    commentId = $(this).data('id');
    $(`.user-comment-action-more.${commentId}`).toggle();
    $(`.user-comment-action-more`)
        .not(`.user-comment-action-more.${commentId}`)
        .hide();
});

$('.user-comment-delete').on('click', function() {
    commentId = $(this).data('id');
    url = $(this).data('url');
    if(confirm('Bạn có thực sự muốn xóa ?')) {
        var data = {
            "_token": $('#token').val()
        };
        $.ajax({
            url: url,
            type: 'delete',
            data: data,
            success: function( _response ){
                $(`.user-comments.${commentId}`).remove();
            },
            error: function( _response ){
                console.log(JSON.stringify(_response));
            }
        });
    }
});

$('.user-comment-report').on('click', function() {
    commentId = $(this).data('id');
    url = `${path}user/report-comment/` + commentId;
    if(confirm('Bạn có thực sự muốn báo cáo bình luận này ?')) {
        var data = {
            "_token": $('#token').val()
        };
        $.ajax({
            url: url,
            type: 'get',
            data: data,
            success: function( _response ){
                $(`.user-comment-action-more`).hide();
                $('#article-modal-btn').click();
            },
            error: function( _response ){
                console.log(JSON.stringify(_response));
            }
        });
    }
});

$('.user-comment-liked').on('click', function() {
    commentId = $(this).data('id');
    url = `${path}user/like-comment/` + commentId;
    var likeElement= $(`.user-comment-liked.${commentId} > i`);
    var data = {
        "_token": $('#token').val()
    };
    $.ajax({
            url: url,
            type: 'get',
            data: data,
            success: function( _response ){
                var likes = $(`.user-comment-liked.${commentId} > span`).html();
                if(likeElement.hasClass('fas')) {
                    likes = parseInt(likes) - 1;
                    $(`.user-comment-liked.${commentId} > span`).html(likes);
                } else {
                    likes = parseInt(likes) + 1;
                    $(`.user-comment-liked.${commentId} > span`).html(likes);
                }
                likeElement.toggleClass('fas');
            },
            error: function( _response ){
                console.log(JSON.stringify(_response));
            }
        });
})

