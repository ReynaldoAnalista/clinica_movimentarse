@extends('adminlte::page')

@section('content')
    <div id='calendar'></div>  
@stop

@section('js')
    <script>
        $(function(){
            $('#calendar').fullCalendar({
              dayClick: function() {
                alert('a day has been clicked!');
              }
            });
        });
    </script>
@stop