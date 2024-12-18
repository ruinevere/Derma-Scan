<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Optionally, add FontAwesome CDN if using the globe icon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>Skin Disease Prediction</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .prediction-result {
            margin-top: 20px;
        }
        .prediction-result p {
            font-size: 1rem;
        }
        .description-container {
            background-color: white;
            padding: 20px;
            border-radius: 20px;
            border: 1px solid #ddd;
            margin-bottom: 30px;
            text-align: left;
            margin-top: 20px;
        }
        .description-title {
            font-weight: bold;
        }
        .icon {
            width: 50px;
            height: 50px;
            margin-bottom: 15px;
        }
        .preview-image {
            max-width: 200px;
            margin-top: 10px;
        }
        .progress {
            height: 25px;
            margin-top: 10px;
        }
        .progress-bar {
            background-color: #153ba9;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .carousel-caption h5 {
            font-size: 2rem;
            font-weight: bold;
        }
        .carousel-caption p {
            font-size: 1.2rem;
        }
        .prediction-result {
            margin-top: 20px;
        }
        #carouselExampleCaptions {
        margin-top: 0 !important;
    }
    .instruction-container {
        width: 100%;
        height: 100%; 
        margin: 0; 
        background:rgb(255, 255, 255); 
        /* background: linear-gradient(to bottom,rgb(37, 102, 142), #00c6ff); */
        padding: 20px;
        border-radius: 0;
        box-shadow: none; 
        display: flex; 
        flex-direction: column; 

}

        .instruction-container h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            margin-top: 20px;
        }
        .instruction-container h3 {
            color: #333;
            text-align: center;
            margin-bottom: 60px;
            margin-top: 20px;
        }
        .step {
            display: flex;
            align-items: flex-start;
            margin-top:20px;
            margin-bottom: 20px;
            margin-left:380px;
        }
        .step-icon {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            background-color: #007bff;
            /* background-color:rgb(255, 255, 255); */
            /* background: linear-gradient(to bottom,rgb(37, 102, 142), #00c6ff); */
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            margin-right: 15px;
        }
        .step-content {
            flex-grow: 1;
        }
        .step-content h4 {
            margin: 0 0 5px;
            color:rgb(8, 9, 10);
        }
        .step-content p {
            margin: 0;
            color: #555;
        }
        .example-image {
            text-align: center;
            margin-top: 30px;
        }
        .example-image img {
            width: 30%;
            height: auto;
            border-radius: 8px;
            border: 2px solid #ddd;
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
          <a class="nav-link active" aria-current="page" href="#">{{ __('messages.home') }}</a>
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

<div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('image/18613.jpg') }}" class="d-block w-100" alt="Check your skin">
      <div class="carousel-caption d-none d-md-block">
        <h5>Check Your Skin</h5>
        <p>Regular skin checks are essential to monitor changes and ensure health.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('image/15001.jpg') }}" class="d-block w-100" alt="Know what your skin needs">
      <div class="carousel-caption d-none d-md-block">
        <h5>Know What Your Skin Needs</h5>
        <p>Identify your skin's specific needs and find the right care solutions.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('image/19366.jpg') }}" class="d-block w-100" alt="Protect your skin health">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: #153ba9">Protect Your Skin Health</h5>
        <p style="color: #153ba9">Take proactive steps to safeguard your skin against potential issues.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="instruction-container">
        <h1>How to Take a Skin Photo</h1>
        
        <div class="step">
            <div class="step-icon">1</div>
            <div class="step-content">
                <h4>Good Lighting</h4>
                <p>Take the photo in a well-lit environment to avoid shadows or overexposure. Natural daylight is ideal.</p>
            </div>
        </div>
        
        <div class="step">
            <div class="step-icon">2</div>
            <div class="step-content">
                <h4>Focus on the Affected Area</h4>
                <p>Ensure the affected skin area is clearly visible and in focus. Avoid blurriness.</p>
            </div>
        </div>

        <div class="step">
            <div class="step-icon">3</div>
            <div class="step-content">
                <h4>Remove Obstructions</h4>
                <p>Remove any makeup, jewelry, or other objects that may cover the skin.</p>
            </div>
        </div>

        <div class="step">
            <div class="step-icon">4</div>
            <div class="step-content">
                <h4>Neutral Background</h4>
                <p>Take the photo against a plain background, such as a white or light-colored wall.</p>
            </div>
        </div>

        <div class="example-image">
            <h5>Example of a Good Photo:</h5>
            <img src="{{ asset('image/example.jpg') }}" alt="Example of Good Skin Photo">
        </div>
    </div>

<!-- Main Container -->
<div class="container mt-5">
    <h3 class="text-center" style="font-weight: bold; color: #153ba9;">{{ __('messages.h3prediction') }}</h3>
    <!-- Image Upload Form with Preview -->
    <div class="text-center mt-4">
        <form action="/WebProg/predict" method="POST" enctype="multipart/form-data" class="form-inline">
            @csrf
            <div class="mb-3">
                <input type="file" name="image" id="imageUpload" class="form-control" required onchange="previewImage(event)">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" style="background-color: #153ba9; border-color: #153ba9;">{{ __('messages.predict') }}</button>
            </div>
        </form>
        <div id="imagePreview" class="mt-3">
        </div>
    </div>

    <!-- Display Prediction Result if Available -->
    @if (isset($result))
        <div class="prediction-result text-center mt-5">
            <p style="text-align: left"><strong>{{ __('messages.prediction') }}</strong></p>
            <p style="text-align: center; font-size: 20; color:#153ba9"><strong>{{ $result['prediction'] }}</strong></p>
            
            <!-- Progress Bar for Confidence -->
            <p style="text-align: left"><strong>{{ __('messages.accuracy') }}:</strong></p>
            <div class="progress" role="progressbar" aria-label="Prediction Confidence" aria-valuenow="{{ number_format($result['confidence'] * 100, 2) }}" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: {{ number_format($result['confidence'] * 100, 2) }}%;">
                    {{ number_format($result['confidence'] * 100, 2) }}%
                </div>
            </div>

            <!-- Disease Icons and Detailed Descriptions in a Styled Container -->
            <div class="description-container">
                @if ($result['prediction'] == 'Acne and Rosacea')
                    <img src="{{ asset('image/acne.png') }}" alt="Acne Icon" class="icon" style="display: block; margin-left: auto; margin-right: auto;">
                    <p class="description-title">Disease Description:</p>
                    <p>Acne is a common skin condition that often appears as pimples, cysts, and nodules. Rosacea is a chronic skin condition that leads to facial redness, visible blood vessels, and sometimes acne-like bumps.</p>
                    <p class="description-title">Why It Happens:</p>
                    <p>Acne is often caused by blocked hair follicles due to oil, dead skin, and bacteria. Rosacea may result from genetic factors, environmental triggers, or abnormalities in blood vessels.</p>
                    <p class="description-title">What Should We Do:</p>
                    <p>For acne, maintain a gentle skincare routine, avoid harsh products, and consider seeing a dermatologist for persistent issues. Rosacea may require lifestyle changes to avoid triggers, like extreme temperatures and spicy foods, along with topical treatments prescribed by a doctor.</p>

                @elseif ($result['prediction'] == 'Actinic Keratosis')
                    <img src="{{ asset('image/acne (1).png') }}" alt="Actinic Icon" class="icon">
                    <p class="description-title">Disease Description:</p>
                    <p>Actinic Keratosis (AK) is a rough, scaly patch that often develops on sun-exposed areas, such as the face and hands. It is a precancerous lesion that can progress to skin cancer if untreated.</p>
                    <p class="description-title">Why It Happens:</p>
                    <p>Actinic Keratosis is primarily caused by long-term exposure to ultraviolet (UV) radiation from the sun. People with fair skin and a history of frequent sun exposure are at higher risk.</p>
                    <p class="description-title">What Should We Do:</p>
                    <p>It's important to have AKs evaluated by a dermatologist. Preventative measures include wearing sunscreen, protective clothing, and avoiding direct sun exposure during peak hours.</p>

                @elseif ($result['prediction'] == 'Melanoma')
                    <img src="{{ asset('image/skin-cancer.png') }}" alt="Melanoma Icon" class="icon">
                    <p class="description-title">Disease Description:</p>
                    <p>Melanoma is a dangerous form of skin cancer that originates in melanocytes, the pigment-producing cells. It often appears as an unusual mole or dark spot on the skin.</p>
                    <p class="description-title">Why It Happens:</p>
                    <p>Melanoma is often linked to DNA damage in skin cells caused by UV radiation. Genetic factors and history of sunburns or tanning increase the risk of developing melanoma.</p>
                    <p class="description-title">What Should We Do:</p>
                    <p>Early detection is key to treating melanoma. Regular skin checks, using sunscreen, and avoiding tanning can reduce risk. Any suspicious spots should be examined by a dermatologist promptly.</p>
                @endif
            </div>
        </div>
    @endif
</div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.createElement('img');
            output.src = reader.result;
            output.className = 'img-fluid rounded shadow preview-image';
            document.getElementById('imagePreview').innerHTML = '';
            document.getElementById('imagePreview').appendChild(output);
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>



<script>
function changeLanguage(lang) {
    // Redirect to change the language
    window.location.href = '/change-lang/' + lang;
}
</script>

</body>
</html>
