<!DOCTYPE html>
<html lang="en">

<head>
  <title>HSTU-RDPC Schedule</title>
  @include('home.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      padding-top: 80px;
      background-color: #f8f9fc;
      /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    }

    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      border-radius: 1rem;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 2rem;
    }

    .icon-square {
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-size: 1.5rem;
    }

    .border-left-primary {
      border-left: 5px solid #4e73df;
    }

    .border-left-success {
      border-left: 5px solid #1cc88a;
    }

    .border-left-warning {
      border-left: 5px solid #f6c23e;
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: 600;
      color: #2c3e50;
    }

    .schedule-dates h5 {
      font-size: 1rem;
      font-weight: 500;
    }

    .schedule-dates p {
      font-size: 0.9rem;
    }

    @media (max-width: 767px) {
      .icon-square {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
      }

      .card-title {
        font-size: 1.1rem;
      }

      .card-body {
        padding: 1.5rem;
      }
    }
  </style>
</head>

<body>
  @include('home.navigation')

  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="display-5 fw-bold text-dark">Event Schedule</h1>
      <p class="text-muted">All Important dates and Deadlines for CSE Fest</p>
    </div>

    <div class="row g-4">
      <!-- Programming Contest -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-left-primary shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4">
              <div class="icon-square bg-primary text-white me-3">
                <i class="fas fa-code"></i>
              </div>
              <h3 class="card-title mb-0">Programming Contest</h3>
            </div>
            <div class="schedule-dates">
              <h5 class="text-primary"><i class="far fa-calendar-alt me-2"></i>Registration</h5>
              <p class="text-muted">25 May - 2 June</p>

              <h5 class="text-info"><i class="fas fa-clipboard-check me-2"></i>Mock</h5>
              <p class="text-muted">29 June</p>

              <h5 class="text-success"><i class="fas fa-flag-checkered me-2"></i>Final</h5>
              <p class="text-muted">30 June</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Showcase -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-left-success shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4">
              <div class="icon-square bg-success text-white me-3">
                <i class="fas fa-project-diagram"></i>
              </div>
              <h3 class="card-title mb-0">Project Showcase</h3>
            </div>
            <div class="schedule-dates">
              <h5 class="text-primary"><i class="far fa-calendar-alt me-2"></i>Registration</h5>
              <p class="text-muted">25 May - 2 June</p>

              <h5 class="text-success"><i class="fas fa-presentation me-2"></i>Final</h5>
              <p class="text-muted">30 June</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Quiz Competition -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-left-warning shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4">
              <div class="icon-square bg-warning text-white me-3">
                <i class="fas fa-question-circle"></i>
              </div>
              <h3 class="card-title mb-0">Quiz Competition</h3>
            </div>
            <div class="schedule-dates">
              <h5 class="text-primary"><i class="far fa-calendar-alt me-2"></i>Registration</h5>
              <p class="text-muted">25 May - 2 June</p>

              <h5 class="text-success"><i class="fas fa-trophy me-2"></i>Final</h5>
              <p class="text-muted">30 June</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('home.footer')
  @include('home.jss')
</body>

</html>