@extends('layouts.admin') {{-- تأكد أن هذا هو اسم ملف الليأوت الرئيسي للوحة التحكم --}}

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-layers"></i>
        </span> Gestion du Slider
    </h3>
</div>

<div class="row">
    @foreach($sliders as $slider)
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Slide #{{ $slider->order }}</h4>
                <p class="card-description">Modifier les informations du slide</p>
                
                <form class="forms-sample" action="{{ route('admin.sliders.update', $slider->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="image{{ $slider->id }}">Lien de l'image</label>
                        <input type="text" name="image" class="form-control" id="image{{ $slider->id }}" value="{{ $slider->image }}">
                    </div>

                    <div class="form-group">
                        <label for="title{{ $slider->id }}">Titre Principal (title_fr)</label>
                        <input type="text" name="title_fr" class="form-control" id="title{{ $slider->id }}" value="{{ $slider->title_fr }}">
                    </div>

                    <div class="form-group">
                        <label for="subtitle{{ $slider->id }}">Sous-titre (subtitle_fr)</label>
                        <input type="text" name="subtitle_fr" class="form-control" id="subtitle{{ $slider->id }}" value="{{ $slider->subtitle_fr }}">
                    </div>

                    <div class="form-group">
                        <label for="desc{{ $slider->id }}">Description (Ligne par ligne)</label>
                        <textarea name="description_fr" class="form-control" id="desc{{ $slider->id }}" rows="4">{{ $slider->description_fr }}</textarea>
                        <small class="text-info">Chaque retour à la ligne (Entrée) créera une nouvelle ligne dans le slider.</small>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection