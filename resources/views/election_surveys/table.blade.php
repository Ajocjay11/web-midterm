<div class="table-responsive">
    <table class="table" id="electionSurveys-table">
        <thead>
            <tr>
                <th>President</th>
        <th>Senator</th>
        <th>Mayor</th>
        <th>Congressman</th>
        <th>Barangay Captain</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($electionSurveys as $electionSurvey)
            <tr>
                <td>{{ $electionSurvey->president }}</td>
            <td>{{ $electionSurvey->senator }}</td>
            <td>{{ $electionSurvey->mayor }}</td>
            <td>{{ $electionSurvey->congressman }}</td>
            <td>{{ $electionSurvey->barangay_captain }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['electionSurveys.destroy', $electionSurvey->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('electionSurveys.show', [$electionSurvey->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('electionSurveys.edit', [$electionSurvey->id]) }}" class='btn btn-default btn-xs'>
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
