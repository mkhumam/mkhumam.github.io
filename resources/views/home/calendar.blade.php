@extends('layouts.general')
@section('judul', 'Calendar')
@section('showerhome', 'show')
@section('boldcal', 'font-weight-bolder')
@section('content')


<link href="{{ asset('manual/fullcalendar/packages/core/main.css') }} " rel='stylesheet' />
<link href="{{ asset('manual/fullcalendar/packages/daygrid/main.css') }} " rel='stylesheet' />
<link href="{{ asset('manual/fullcalendar/packages/timegrid/main.css') }} " rel='stylesheet' />
<link href="{{ asset('manual/fullcalendar/packages/list/main.css') }} " rel='stylesheet' />
<script src="{{ asset('manual/fullcalendar/packages/core/main.js') }} "></script>
<script src="{{ asset('manual/fullcalendar/packages/interaction/main.js') }} "></script>
<script src="{{ asset('manual/fullcalendar/packages/daygrid/main.js') }} "></script>
<script src="{{ asset('manual/fullcalendar/packages/timegrid/main.js') }} "></script>
<script src="{{ asset('manual/fullcalendar/packages/list/main.js') }} "></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      defaultDate: '2018-07-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'TRIP Surabaya',
          start: '2018-07-01',
          color: '#00ADA7',
          textColor: 'white'
        },
        {
          title: 'Long Trip Karimun',
          start: '2018-07-07',
          end: '2018-07-10',
          color: 'red',
          textColor: 'white'
        },
        {
          title: 'Surabaya City Tour',
          start: '2018-07-12',
          color: 'black',
          textColor: 'white'
        },
      ]
    });

    calendar.render();
  });

</script>
<style>

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
  }

</style>

                <!-- ########### +++ Konten Dimulai +++ ########### -->
                <div class="col-sm-9" title="content" style="margin-left:25px">
                    <h4>Calendar</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home fa-sm"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                    </ol>
                    <!-- Kartu Calendar -->
                    <div class="card">
                        <div class="card-body">
                                                        
                            <div id='calendar-container'>
                                <div id='calendar'></div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ########### +++ Konten Berakhir +++ ########### -->

@endsection
