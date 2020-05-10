@extends('layouts.site')

@section('content')

    @foreach($imagenes as $imagen)
    <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
    <a href="{{ url('images/' . $imagen->url) }}" class="d-block photo-item" data-fancybox="gallery">
        <img src="{{ url('images/' . $imagen->url) }}" alt="Image" class="img-fluid">
        <div class="photo-text-more">
            <span class="icon icon-search"></span>
        </div>
        </a>
    </div>
    @endforeach
@stop