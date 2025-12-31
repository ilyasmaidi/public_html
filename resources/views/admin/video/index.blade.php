@extends('layouts.admin')

@section('content')
<div class="card shadow-sm border-0" style="border-radius: 15px;">
    <div class="card-body">
        <h4 class="text-primary mb-4"><i class="mdi mdi-video"></i> Gestion de la Section Vidéo</h4>
        
        <form action="{{ route('admin.video.update') }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-5">
                    <label>Image de Couverture (Thumbnail)</label>
                    <div class="mb-3 position-relative" onclick="document.getElementById('v_img').click()" style="cursor:pointer;">
                        <img id="prev-v-img" src="{{ asset($video->video_img) }}" class="w-100 rounded shadow-sm" style="height:200px; object-fit:cover;">
                        <input type="file" name="video_img_file" id="v_img" hidden onchange="preview(this, 'prev-v-img')">
                    </div>

                    <div class="form-group">
                        <label>Lien Vidéo (YouTube/Vimeo)</label>
                        <input type="text" name="video_url" class="form-control" value="{{ $video->video_url }}" placeholder="https://www.youtube.com/watch?v=...">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="form-group">
                        <label>Titre de la Section</label>
                        <input type="text" name="title_fr" class="form-control" value="{{ $video->title_fr }}">
                    </div>
                    <div class="form-group">
                        <label>Description Longue</label>
                        <textarea name="text_fr" class="form-control" rows="6">{{ $video->text_fr }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary btn-block btn-lg">Mettre à jour le contenu</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function preview(input, id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) { document.getElementById(id).src = e.target.result; }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection