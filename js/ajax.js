$('#btn').click(function () {
  if (checkInputs()) {
    $.post(
      'ajax.php', // адрес обработчика
      $("#form").serialize(), // отправляемые данные
      function (msg) { // получен ответ сервера
        // $('#form').hide('slow');
        $('#result').html(msg);
      }
    );
  }
});
