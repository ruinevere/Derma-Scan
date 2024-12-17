<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>About Us - DermaScan</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #153ba9;
            text-align: center;
            margin-top: 30px;
        }
        .section-description {
            font-size: 1.1rem;
            text-align: center;
            margin-bottom: 30px;
            color: #555;
        }
        .content-container {
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
            max-width: 800px;
        }
        .icon {
            width: 80px;
            margin-bottom: 15px;
        }
        footer {
    background-color: #153ba9; 
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            border-top: 1px solid #0056b3;
}
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm p-3 bg-body rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-weight: bold; color: #153ba9;">
        <img src="{{ asset('image/natural.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        DermaScan
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/WebProg') }}">{{ __('messages.home') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/profile') }}">@lang('messages.profile')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about') }}</a>
        </li>
      </ul>


<!-- Language Selector -->
<div class="language-selector">
    <select onchange="changeLanguage(this.value)" class="custom-select" style="position: relative; display: inline-block; margin-top: 10px; margin-left: 10px">
        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
        <option value="id" {{ app()->getLocale() == 'id' ? 'selected' : '' }}>IDN</option>
    </select>
</div>



    </div>
  </div>
</nav>

    <!-- Hero Section -->
    <div class="container mt-4 text-center">
        <h1 class="section-title">About DermaScan</h1>
        <p class="section-description">Your trusted platform for skin disease detection and health monitoring.</p>
        <img src="{{ asset('image/natural.jpeg') }}" alt="DermaScan" class="img-fluid rounded" style="max-width: 400px;">
    </div>

    <!-- About Content -->
    <div class="content-container">
        <h3 class="text-center" style="color: #153ba9;">Our Mission</h3>
        <p>
            At <strong>DermaScan</strong>, we aim to make skin disease detection easier, faster, and more accessible for everyone. Using advanced <strong>machine learning</strong> and <strong>image recognition technology</strong>, DermaScan helps identify common skin diseases like acne, actinic keratosis, and melanoma with high accuracy.
        </p>

        <h3 class="text-center mt-4" style="color: #153ba9;">Why Choose Us?</h3>
        <ul class="mt-3">
            <li>✔ <strong>Cutting-Edge AI Technology</strong>: Our system is trained on a large dataset to deliver accurate results.</li>
            <li>✔ <strong>User-Friendly Interface</strong>: Simple image uploads and instant predictions.</li>
            <li>✔ <strong>Health Awareness</strong>: Understand your skin better and take timely actions to protect it.</li>
        </ul>

        <h3 class="text-center mt-4" style="color: #153ba9;">How It Works</h3>
        <ol class="mt-3">
            <li>Upload an image of the affected skin area.</li>
            <li>Our AI model processes the image and predicts the skin condition.</li>
            <li>Receive detailed results, including descriptions and preventive measures.</li>
        </ol>
    </div>

    <!-- Footer -->
    <footer class="mt-auto">
        <div class="container">
            <p>&copy; {{ date('Y') }} DermaScan.{{ __('messages.footer') }}</p>
            <p>Follow us on:
                <a href="https://twitter.com" target="_blank" style="color: white">Twitter</a> |
                <a href="https://facebook.com" target="_blank" style="color: white">Facebook</a> |
                <a href="https://instagram.com" target="_blank" style="color: white">Instagram</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
