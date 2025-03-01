<!DOCTYPE html>
<html lang="en">

<head>
  <title>HSTU-RDPC</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  @include('home.css')
</head>

<body>
  <!-- Navigation -->
  @include('home.navigation')


  <div class="container w-50 mx-auto mt-5">
    <h2 class="bg-primary text-white p-3 text-center rounded">RDCPC Team Registration</h2>

    <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <!-- Registration Form -->
    <form action="{{ route('registration_save') }}" method="POST">
      @csrf

      <!-- Institution -->
      <div class="mb-3">
        <label class="form-label">Institution</label>
        <input type="text" name="institution" class="form-control" value="{{ old('institution') }}" required>
      </div>

      <!-- Team Name -->
      <div class="mb-3">
        <label class="form-label">Team Name</label>
        <input type="text" name="team_name" class="form-control" value="{{ old('team_name') }}" required>
      </div>

      <hr>

      <!-- Member 1 -->
      <h4>Member 1</h4>
      @include('reg.member_form', ['prefix' => 'member1', 'required' => true])

      <!-- Member 2 -->
      <h4>Member 2 (Optional)</h4>
      @include('reg.member_form', ['prefix' => 'member2'])

      <!-- Member 3 -->
      <h4>Member 3 (Optional)</h4>
      @include('reg.member_form', ['prefix' => 'member3'])

      <hr>

      <!-- Coach -->
      <h4>Coach Information</h4>
      @include('reg.member_form', ['prefix' => 'coach', 'required' => true])

      <!-- Submit Button -->
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-success px-5">Register</button>
      </div>
    </form>
  </div>
  
   <p></p>
   <p></p>
   <p></p>
   <p></p>
  <!-- Footer -->
  @include('home.footer')
  @include('home.jss')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>