<!DOCTYPE html>
<html lang="en">

<head>
    <title>HSTU-RDPC Team List</title>
    @include('home.css')
    <style>
        .pt-5,
        .py-5 {
            padding-top: 1rem !important;
            padding-bottom: 0rem !important;
        }
    </style>
</head>

<body>

    @include('home.navigation')

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark">Selected Teams</h1>
            <p class="text-muted">Selected for final competition</p>
        </div>
    </div>

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

        <a href="{{ route('payment_create') }}" class="btn btn-primary mt-3">Back to Payment</a>
    </div>
    <p></p>
    <p></p>



    <!-- footer -->
    @include('home.footer')
    <!-- end footer -->


    <!-- loader -->
    <!-- js -->
    @include('home.jss')
    <!-- end js -->


</body>

</html>