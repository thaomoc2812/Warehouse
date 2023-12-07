<?php include 'header.html'; ?>
                
                            <h2>Lịch làm việc</h2>

                <div id="calendar"></div>

                <script>
                  $(document).ready(function () {
                      $('#calendar').fullCalendar({
                        header: {
                          left: 'prev,next today',
                          center: 'title',
                          right: 'agendaWeek'
                      },
                      events: [
                      { title: '   Kiều Phương Thảo', start: '2023-11-18T08:00:00', end: '2023-11-18T14:00:00' },
                      { title: '   Trần Văn A', start: '2023-11-18T14:00:00', end: '2023-11-18T17:00:00' },
                      ],
                      eventRender: function (event, element) {
                          element.find('.fc-title').append('<br/>');
                      }
                      });
                  });
              </script>
                
              </div>
          


</body>
</html>
   