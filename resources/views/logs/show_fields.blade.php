<!-- Userid Field -->
<div class="col-sm-12">
    {!! Form::label('userid', 'Userid:') !!}
    <p>{{ $log->userid }}</p>
</div>

<!-- Log Field -->
<div class="col-sm-12">
    {!! Form::label('log', 'Log:') !!}
    <p>{{ $log->log }}</p>
</div>

<!-- Logdetails Field -->
<div class="col-sm-12">
    {!! Form::label('logdetails', 'Logdetails:') !!}
    <p>{{ $log->logdetails }}</p>
</div>

<!-- Logtype Field -->
<div class="col-sm-12">
    {!! Form::label('logtype', 'Logtype:') !!}
    <p>{{ $log->logtype }}</p>
</div>

