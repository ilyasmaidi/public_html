@extends('layouts.admin')

@section('content')
<style>
    .slider-card { border-radius: 15px; overflow: hidden; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    .img-main-preview { width: 100%; height: 200px; object-fit: cover; border-radius: 10px; cursor: pointer; border: 2px dashed #ddd; transition: 0.3s; }
    .img-main-preview:hover { border-color: #b66dff; opacity: 0.8; }
    .mini-img-preview { width: 60px; height: 60px; object-fit: contain; border-radius: 50%; background: #eee; cursor: pointer; border: 2px solid #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
</style>

<div class="row">
    @foreach($sliders as $slider)
    <div class="col-12 grid-margin stretch-card">
        <div class="card slider-card">
            <div class="card-body">
                <h4 class="text-primary mb-4">Configuration Slide #{{ $slider->order }}</h4>
                <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <label>Image de Fond</label>
                            <img src="{{ asset($slider->image) }}" id="prev-bg-{{$slider->id}}" class="img-main-preview mb-3" onclick="document.getElementById('file-bg-{{$slider->id}}').click()">
                            <input type="file" name="image_file" id="file-bg-{{$slider->id}}" hidden onchange="preview(this, 'prev-bg-{{$slider->id}}')">

                            @if($slider->order == 2)
                            <label class="d-block mt-3">Éléments PNG (K1, K2, K3)</label>
                            <div class="d-flex justify-content-around">
                                @foreach(['k1','k2','k3'] as $k)
                                    <img src="{{ asset($slider->{$k.'_img'}) }}" id="prev-{{$k}}-{{$slider->id}}" class="mini-img-preview" onclick="document.getElementById('file-{{$k}}-{{$slider->id}}').click()">
                                    <input type="file" name="{{$k}}_file" id="file-{{$k}}-{{$slider->id}}" hidden onchange="preview(this, 'prev-{{$k}}-{{$slider->id}}')">
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Titre Principal</label>
                                <input type="text" name="title_fr" class="form-control" value="{{ $slider->title_fr }}">
                            </div>
                            <div class="form-group">
                                <label>Sous-titre / Badge</label>
                                <input type="text" name="subtitle_fr" class="form-control" value="{{ $slider->subtitle_fr }}">
                            </div>
                            <div class="form-group">
                                <label>Description (Multi-lignes)</label>
                                <textarea name="description_fr" class="form-control" rows="5">{{ $slider->description_fr }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary btn-block">Enregistrer les modifications</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
function preview(input, prevId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) { document.getElementById(prevId).src = e.target.result; }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection