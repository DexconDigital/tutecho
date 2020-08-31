function enviardetalle() {

  var name = $("input#name").val();
  var name_envia = $("input#name_envia").val();
  var email = $("input#email").val();
  var url_inm = window.location.href;
  var message = $("textarea#message").val();
  var mailasesor= localStorage.getItem("mailasesor");

  if (name.length > 0 && name_envia.length > 0 && email.length > 0 && message.length > 0) {
    $.ajax({
      url: "js/emaildetalle.php",
      type: "POST",
      data: {
        name: name,
        name_envia: name_envia,
        url_inm: url_inm,
        email: email,
        message: message,
        mailasesor: mailasesor
      },
      cache: false,
      success: function (data) {
        if (data == 1) {
          alert("Mensaje enviado");
          setTimeout(() => {
            redirect();
          });

          function redirect() {
            location.reload();
          }

        }
        $("input#name").val("");
        $("input#email").val("");
        $("input#name_envia").val("");
        $("textarea#message").val("");
      }
    });
  } else {
    alert("Llene todos los campos por favor");
  }

}
