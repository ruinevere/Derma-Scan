<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Profile - DermaScan</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .profile-container {
            background-color: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
        }
        .btn-custom {
            background-color: #153ba9;
            color: #fff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #102e7a;
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
          <a class="nav-link active" aria-current="page" href="{{ url('/WebProg')}}">{{ __('messages.home') }}</a>
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

<!-- Profile Section -->
<div class="container">
    <div class="profile-container">
        <div class="profile-header">
            <img src="{{ asset('image/profile.jpeg') }}" alt="Profile Picture" class="profile-image" id="profileImage">
            <h3>{{ __('messages.profile') }}</h3>
            <p>Manage your profile and account settings.</p>
        </div>

        <!-- Profile Form -->
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="John Doe" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="john.doe@example.com" required>
            </div>

        </form>


    
    </div>
</div>

<!-- Footer -->
<footer class="fixed-bottom">
    <div class="container">
        <p>&copy; {{ date('Y') }} DermaScan.{{ __('messages.footer') }}</p>
        <p>Follow us on:
            <a href="https://twitter.com" target="_blank" style="color: white">Twitter</a> |
            <a href="https://facebook.com" target="_blank" style="color: white">Facebook</a> |
            <a href="https://instagram.com" target="_blank" style="color: white">Instagram</a>
        </p>
    </div>
</footer>

</body>
</html>
