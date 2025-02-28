<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html">HSTU_RDPC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="services.html" class="nav-link">Schedule</a></li>
				<li class="nav-item"><a href="{{ route('registration') }}" class="nav-link">Registration</a></li>
				<li class="nav-item"><a href="{{ route('payment_create') }}" class="nav-link">Payment</a></li>
				<li class="nav-item"><a href="{{ route('registration_list') }}" class="nav-link">Teams</a></li>
				<li class="nav-item"><a href="blog.html" class="nav-link">Gallery</a></li>
				<li class="nav-item"><a href="{{ route('teams.index') }}" class="nav-link">Approve</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->