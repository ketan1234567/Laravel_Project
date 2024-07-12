<div>
    <h2> {{$title}}</h2>
    <h2> {{ $subTitle }}</h2>
    <p>{{ $description }}</p>
    
    <div>
        {{ $addNumber(10)}}
    </div>




</div>

{{-- <h1 {{ $attributes }}> Hello My Class</h1> --}}

<h1 {{ $attributes->merge(['class'=>'dclass']) }}> Hello My Class</h1>



