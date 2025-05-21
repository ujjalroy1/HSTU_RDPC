<!DOCTYPE html>
<html lang="en">

<head>
    <title>HSTU-RDPC Team List</title>
    @include('home.css')
    <style>
        .pt-5,
        .py-5 {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important;
        }
    </style>
</head>

<body>


    <!-- navbar -->
    @include('home.navigation')
    <!-- endnavbar -->
    <!-- <h2 class="bg-success text-white p-2 text-center rounded">Approved Teams</h2> -->

    <div class="container mt-5 w-80 mx-auto">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-dark">Registered Teams</h1>
                <p class="text-muted">Registration primarily approved</p>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Team Name</th>
                    <th>University</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $index => $team)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $team->team_name }}</td>
                    <td>{{ $team->institution }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('registration') }}" class="btn btn-primary mt-3">Back to Registration</a>
    </div>
    <p></p>
    <p></p>
    @include('home.footer')
    @include('home.jss')
</body>

</html>