$(document).ready(function() {
    $('#contact-form').submit(function() {
        var buttonWidth=$('#contact-form button').width();
        
        var buttonCopy = $('#contact-form button').html(),
            errorMessage = $('#contact-form button').data('error-message'),
            sendingMessage = $('#contact-form button').data('sending-message'),
            okMessage = $('#contact-form button').data('ok-message'),
            hasError = false;
        var sendingMessageStyles = {
            fontSize: "1em",
            padding: "15px 50px"
        };
        var normalMessageStyles = {
            fontSize: "1.5em",
            padding: "15px 90px"
        };
        $('#contact-form button').width(buttonWidth);
        $('#contact-form .error-message').remove();
        
        $('.requiredField').each(function() {
            if($.trim($(this).val()) == '') {
                var errorText = $(this).data('error-empty');
                $(this).parent().append('<span class="error-message">'+errorText+'.</span>');
                $(this).addClass('inputError');
                hasError = true;
            } else if($(this).is("input[type='email']") || $(this).attr('name')==='email') {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if(!emailReg.test($.trim($(this).val()))) {
                    var invalidEmail = $(this).data('error-invalid');
                    $(this).parent().append('<span class="error-message">'+invalidEmail+'.</span>');
                    $(this).addClass('inputError');
                    hasError = true;
                }
            }
        });
        
        if(hasError) {
            $('#contact-form button').html('<i class="fa fa-remove"></i>'+errorMessage);
            setTimeout(function(){
                $('#contact-form button').html(buttonCopy);
                $('#contact-form button').width('auto');
            },2000);
        }
        else {
            $('#contact-form button').html('<i class="fa fa-refresh fa-spin"></i>'+sendingMessage);
            
            var formInput = $(this).serialize();
            $.post($(this).attr('action'),formInput, function(data){
                $('#contact-form button').html('<i class="fa fa-check"></i>'+okMessage).css(sendingMessageStyles);
                setTimeout(function(){
                    $('#contact-form button').html(buttonCopy).css(normalMessageStyles);
                    $('#contact-form button').width('auto');
                },2000);
                
            });
        }
        
        return false;   
    });
});