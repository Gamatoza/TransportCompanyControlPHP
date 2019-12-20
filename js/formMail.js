$("#sendMail").on("click", function () {
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();


    if (email === "") {
        $("#errorMessage").text("Введите email");
        return false;
    } else if (name == "") {
        $("#errorMessage").text("Введите имя");
        return false;
    } else if (phone == "") {
        $("#errorMessage").text("Введите телефон");
        return false;
    } else if (message.length < 5) {
        $("#errorMessage").text("Введите сообщение не менее 5 символов");
        return false;
    }

    $("#errorMessage").text("");
    $.ajax({
        url: 'check/SendMailCheck.php',
        type: 'POST',
        cache: false,
        data: {
            'email': email,
            'name': name,
            'phone': phone,
            'message': message
        },
        dataType: 'html',
        beforeSend: function () {
            $("sendMail").prop("disabled", true);
        },
        success: function (data) {
            alert(data);
            if (data != null) {
                $("#mailform").trigger("reset");
                $("sendMail").prop("disabled", false);
            } else
                alert("Ошибка, сообщение не отправлено!"); //TODO: отправка сообщения
        }
    });
});