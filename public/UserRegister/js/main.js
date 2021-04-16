$(".retype").hide();
$("#re_pass").keyup(function() {
    var $pw = $('#register_pass').val();
    var $re_pw = $("#re_pass").val();
    if($pw != $re_pw) {
        $(".retype").show();
        $("#signup").attr('disabled', true);
    } else {
        $(".retype").hide();
        $("#signup").attr('disabled', false);
    }
})