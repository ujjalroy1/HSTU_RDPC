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
    
     <!-- upperslider -->
	   @include('home.upper_slider')
	 <!-- end upperslider -->
		
    <!-- about -->
     @include('home.about')
	<!-- end about -->

	 <!-- slot -->
	  @include('home.slot_list')

	 <!-- slot end -->


     <!-- footer -->
	    @include('home.footer')
	  <!-- end footer -->
  

  <!-- loader -->
  <!-- js -->
   @include('home.jss')
  <!-- end js -->

    
  </body>
</html>