<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - HSTU-RDPC</title>
    @include('home.css')
    <style>
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .contact-container h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }
        .contact-container .section {
            margin-bottom: 30px;
        }
        .contact-container p {
            font-size: 1.1rem;
            color: #555;
            margin: 5px 0;
        }
        .contact-container strong {
            font-size: 1.2rem;
            color: #222;
        }
    </style>
</head>
<body>
    @include('home.navigation')

    <div class="contact-container">
        <h2>Contact Us</h2>
        
        <div class="section">
            <h3>Registration</h3>
            <p><strong>Ujjal Roy</strong></p>
            <p>Email: ujjalroy1011@gmail.com</p>
            <p>Phone: 01751961572</p>
            <br>
            <p><strong>Abhijite Deb Barman</strong></p>
            <p>Email: dbabhijite@gmail.com</p>
            <p>Phone: 01710597706</p>
        </div>
        
        <div class="section">
            <h3>For More Information</h3>
            <p><strong>Mehraj Mitu</strong></p>
            <p>Email: m@gmail.com</p>
            <p>Phone: 01755</p>
        </div>
        
        <div class="section">
            <h3>Teacher</h3>
            <p><strong>Pankaj Bhowmik Sir</strong></p>
            <p>Email: pankaj@gmail.com</p>
            <p>Phone: 0177</p>
        </div>
    </div>

    @include('home.footer')
    @include('home.jss')
</body>
</html>
