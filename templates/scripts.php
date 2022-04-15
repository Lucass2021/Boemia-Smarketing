<script src="./main.js"></script>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!-- Cookies -->
<script src="./Cookies/cookiealert.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<!-- Formulário de contato -->
<script>
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var phone = $("#phone");
        var subject = $("#subject");
        var body = $("#body");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(subject) && isNotEmpty(body)) {
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    phone: phone.val(),
                    subject: subject.val(),
                    body: body.val(),
                },
                success: function(response) {
                    $('#myForm')[0].reset();
                    $('.sent-notification').text("Mensagem enviada com sucesso");
                }
            })
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == '') {
            caller.css('border', '1px solid red');
            return false;
        } else {
            caller.css('border', '');
            return true;
        }
    }
</script>
<!-- reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("myForm").submit();
   }
 </script>
 <button class="g-recaptcha d-none" 
        data-sitekey="6LfF1k0dAAAAAGKu1GGJdwQ-rVo5xRU7tRO2_m_y" 
        data-callback='onSubmit' 
        data-action='submit'></button>