$(document).ready(function showResults() {
  let search = '1';
  $.ajax({
    url: '../PHP/saveSearch.php',
    type: 'POST',
    data: { search },
    success: function (response) {
      let information = JSON.parse(response);
      let template = ' ';
      information.forEach(data => {
        $('#salasInfo').html('');
        template += `
        <div id='${data.nombresala}'>
            <div class='showReservaciones';'>
            <div>Lugar: ${data.nombresala}</div>
            <div>Reservado para: ${data.fecha}</div>
            <div>a las: ${data.hora}</div>
            <button class='btnCancelar'>CANCELAR RESERVACION</button>
            </div>
             <div>"${data.des}"</div>
             </div>
            `;
      });
      $('#showReservaciones').html(template);
    }
  });

  $(document).on('click', '.btnCancelar', function () {
    let element = $(this)[0].parentElement.parentElement;
    let nombre = $(element).attr('id');
    $.post('../PHP/saveDelete.php', { nombre }, function (response) {
      showResults();
    });
  });

});



