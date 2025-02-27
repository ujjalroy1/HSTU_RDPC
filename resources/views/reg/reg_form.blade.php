<!DOCTYPE html>
<html lang="en">
  <head>
  <title>HSTU-RDPC</title>
  @include('home.css')
  </head>
  <body>
    
     <!-- navbar -->
	  @include('home.navigation')
	  <!-- endnavbar -->
    
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
       <p></p>
    <div>
   </div>

     <!-- footer -->
	    @include('home.footer')
	  <!-- end footer -->
  

  <!-- loader -->
  <!-- js -->
   @include('home.jss')
  <!-- end js -->

    
  </body>
</html>
