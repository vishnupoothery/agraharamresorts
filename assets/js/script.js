
$(document).ready(function () {
    $("#contactForm").submit(
        function () {
            $.post('assets/php/sendMessageEmail.php',{
                Name        : $("#name").val(),
                Email       : $("#email").val(),
                PhoneNumber : $("#phone").val(),
                Message     : $("#message").val()
            },function ( data )
            {
                if( data === 'Success')
                {
                    alert("Email has been sent successfully");
                    $('#contactForm').clearForm();
                }else
                {
                    alert(data);
                }
            });
        }
    );

    $("#reservationForm").submit(
        function () {
            $.post('assets/php/sendRegistrationEmail.php',{
                Name            : $("#name").val(),
                Email           : $("#email").val(),
                PhoneNumber     : $("#phone").val(),
                CheckInDate     : $("#checkindate").val(),
                CheckOutDate    : $("#checkoutdate").val(),
                RoomType        : $("#roomtype").val()
            },function ( data )
            {
                if( data === 'Success')
                {
                    alert("Email has been sent successfully");
                    $('#reservationForm').clearForm();
                }else
                {
                    alert(data);
                }
            });
        }
    );
});