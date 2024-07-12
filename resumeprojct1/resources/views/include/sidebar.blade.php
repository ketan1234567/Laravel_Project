<div class="border-end border-warning h-100">
    <div class="text-center">
        <img src="{{ asset('images/pic1.jpg') }}" alt="" class="img-fluid rounded-circle mt-5" srcset="">
        <h1 class="text-white mt-3 st-font">damini Kulkarni </h1>
    </div>
    <nav class="nav flex-column text-center mt-4">
        <a href="/" class="nav-link {{
            Request::routeIs('home')? 'active':""
        }}" >Home</a>
        <a href="{{ route('services') }}" class="nav-link {{
            Request::routeIs('services')? 'active':""
        }}" >Services</a>
        <a href="{{ route('skill') }}" class="nav-link {{
            Request::routeIs('skill')? 'active':""
        }}" >skill</a>
        <a href="{{ route('contact') }}" class="nav-link  {{
            Request::routeIs('contact')? 'active':""
        }}">contact</a>
    </nav>  

</div>    