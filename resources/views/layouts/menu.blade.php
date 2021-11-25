<li class="nav-item">
    <a href="{{ route('electionSurveys.index') }}"
       class="nav-link {{ Request::is('electionSurveys*') ? 'active' : '' }}">
        <p>Election Surveys</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


