<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Team</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>

<body class="container mt-4">


    <div class="container w-50 mx-auto">

        <h2 class="bg-primary text-white p-2 text-center rounded">RDCPC Team Registration</h2>


        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="container mt-4"></div>
        <form action="{{ route('registration_save') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Institution</label>
                <input type="text" name="institution" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Team Name</label>
                <input type="text" name="team_name" class="form-control" required>
            </div>
            <div class="container mt-4"></div>

            <h4>Member 1</h4>
            @include('reg.member_form', ['prefix' => 'member1', 'required' => true])
            <div class="container mt-4"></div>

            <h4>Member 2 </h4>
            @include('reg.member_form', ['prefix' => 'member2'])
            <div class="container mt-4"></div>

            <h4>Member 3 </h4>
            @include('reg.member_form', ['prefix' => 'member3'])
            <div class="container mt-4"></div>

            <h4>Coach Information</h4>
            @include('reg.member_form', ['prefix' => 'coach', 'required' => true])

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

</body>

</html>