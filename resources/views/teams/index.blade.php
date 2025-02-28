<!DOCTYPE html>
<html lang="en">

<head>
    <title>HSTU-RDPC</title>
    @include('home.css')
</head>

<body>

    <!-- navbar -->
    @include('home.navigation')

    <div class="container">
        <h2 class="mb-4">Team Approval List</h2>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Team Name</th>
                    <th>Institution</th>
                    <th>Approve</th>
                    <th>Payment</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                <tr>
                    <td>{{ $team->team_name }}</td>
                    <td>{{ $team->institution }}</td>
                    <td>{!! $team->approve ? '✅' : '❌' !!}</td>
                    <td>{!! $team->payment ? '✅' : '❌' !!}</td>
                    <td><a href="{{ route('teams.show', $team->id) }}" class="btn btn-primary">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>