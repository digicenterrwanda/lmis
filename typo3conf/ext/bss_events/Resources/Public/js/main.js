$(document).ready(function(){


    if($.bss == undefined){
        $.bss = [];
    }
    if($.bss.event == undefined){
        $.bss.event = [];
    }

    // $.bss.event.modalLoading();
    $.bss.event.modalLoading = function(title){
        title = title || "No Title found!";

        var html = '<div style="text-align: center">\n' +
            '                    <br/>\n' +
            '                    <br/>\n' +
            '                    <i class="fa fa-refresh fa-spin" style="font-size:48px; color: #343434;"></i>\n' +
            '                    <br/>\n' +
            '                    <br/>\n' +
            '                    <br/>\n' +
            '                </div>';


        $('#bssEventModal').find('.modal-body').html(html);
        //$('#bssEventModal').find('.modal-title').html(title);

        $('#bssEventModal').modal('toggle');
    };


    $('.bss-event-detail-link').on('click', function(e) {

        // stop link navigation
        e.preventDefault();

        // show loading modal
        var title = $(this).find('span,div').data('title');
        $.bss.event.modalLoading(title);

        // start ajaxing
        var request = $.ajax({
            url: $(this).attr('href'),
            method: "POST",
            data: { ajax : true },
            dataType: "html"
        });

        request.done(function( msg ) {
            $('#bssEventModal').find('.modal-body').html( msg );
        });

        request.fail(function( jqXHR, textStatus ) {
            $('#bssEventModal').modal('toggle');
        });
    })


    $('#createEvent').on('click', function(e) {

        // stop link navigation
        e.preventDefault();

        // show loading modal
        // var title = $(this).find('span,div').data('title');
        $.bss.event.modalLoading('');

        // start ajaxing
        var request = $.ajax({
            url: $(this).attr('href'),
            method: "POST",
            data: { ajax : true },
            dataType: "json"
        });

        request.done(function( msg ) {
            if(msg['error'] == true){
                $('#bssEventModal').modal('toggle');
                alert(msg['message']);
            }else{
                $('#bssEventModal').find('.modal-body').html( msg['message'] );

                var language = $("#appointment-template-container").data('language');

                tinymce.editors = [];
                tinymce.init({
                    selector:'#bodyTextarea',
                    menubar: false,
                    plugins: 'image, uploadimage, link',
                    toolbar: 'undo,redo | styleselect | fontselect fontsizeselect bold italic | alignleft aligncenter alignright | link | image uploadimage',
                    language: language,
                    paste_data_images: true,
                    images_upload_handler: function (blobInfo, success, failure) {
                        success("data:" + blobInfo.blob().type + ";base64," + blobInfo.base64());
                    }
                });
            }
        });

        request.fail(function( jqXHR, textStatus ) {
            $('#bssEventModal').modal('toggle');
        });
    });

    var appointmentCounter = 0;

    $.fn.bssEventsAddAppointment = function(target){
        ++appointmentCounter;

        var html = $("#appointment-template-container").html().replace(/%%%id%%%/g,appointmentCounter);
        if(html){

            target.prepend(html);

            var language = $("#appointment-template-container").data('language');

            $.datetimepicker.setLocale(language);

            $('#datetimepickerFrom'+appointmentCounter).datetimepicker({
                format: 'd.m.Y H:i',
                step: 15
            });

            $('#datetimepickerTo'+appointmentCounter).datetimepicker({
                format: 'd.m.Y H:i',
                step: 15
            });

            target.find('.toggle').bootstrapToggle({
                on: '✓',
                off: '✗'
            });
        }

    };

    $.fn.bssEventsAddRegistration = function(target){

        if($(target).data('appointmentid')){
            var html = $("#registration-template-container").html().replace(/new%%%id%%%/g,$(target).data('appointmentid'));

        }else{
            var html = $("#registration-template-container").html().replace(/%%%id%%%/g,appointmentCounter);
        }
        if(html){
            target.prepend(html);
            target.find('.toggle').bootstrapToggle({
                on: '✓',
                off: '✗'
            });
        }

    };


    var exceptionCounter = 0;
    $.fn.bssEventsAddException = function(target){
        ++exceptionCounter;
        var html = "";

        if($(target).data('appointmentid')){
            html = $("#exception-template-container").html().replace(/new%%%id%%%/g,$(target).data('appointmentid'));
        }else{
            html = $("#exception-template-container").html().replace(/%%%id%%%/g,appointmentCounter);
        }

        html = html.replace(/%%%exid%%%/g,exceptionCounter);

        if(html){
            target.prepend(html);

            var language = $("#appointment-template-container").data('language');

            $.datetimepicker.setLocale(language);

            console.log(exceptionCounter);

            $('#datetimepickerFromEx'+exceptionCounter).datetimepicker({
                format: 'd.m.Y H:i',
                step: 15
            });

            $('#datetimepickerToEx'+exceptionCounter).datetimepicker({
                format: 'd.m.Y H:i',
                step: 15
            });

            target.find('.toggle').bootstrapToggle({
                on: '✓',
                off: '✗'
            });
        }

    };

    $.fn.bssEventsReadFile = function() {

        if (this.files && this.files[0]) {

            var FR= new FileReader();

            var image = "<img />";

            $(image).find('img').src =

            FR.addEventListener("load", function(e) {
                $(image).find('img').src = e.target.result;
            });

            FR.readAsDataURL( this.files[0] );
        }

    };

});