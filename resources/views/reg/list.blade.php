<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Teams</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>

<body class="container mt-5">

    <h2 class="bg-success text-white p-2 text-center rounded">Approved Teams</h2>

    <div class="container mt-5 w-80 mx-auto">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Team Name</th>
                    <th>University</th>
                    <th>Payment Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $index => $team)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $team->team_name }}</td>
                    <td>{{ $team->institution }}</td>
                    <td>
                        @if($team->payment == 0)
                        <span class="badge bg-warning">Pending</span>
                        @else
                        <span class="badge bg-success">Done</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('registration') }}" class="btn btn-primary mt-3">Back to Registration</a>
    </div>

</body>

</html>