<div class="table-responsive">
    <table class="table" id="logs-table">
        <thead>
            <tr>
                <th>Userid</th>
        <th>Log</th>
        <th>Logdetails</th>
        <th>Logtype</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($logs as $log)
            <tr>
                <td>{{ $log->userid }}</td>
            <td>{{ $log->log }}</td>
            <td>{{ $log->logdetails }}</td>
            <td>{{ $log->logtype }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['logs.destroy', $log->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logs.show', [$log->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('logs.edit', [$log->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
