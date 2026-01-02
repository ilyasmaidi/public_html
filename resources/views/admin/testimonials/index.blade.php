@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-comment-account"></i>
        </span> Gestion des Témoignages
    </h3>
</div>

<div class="row">
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-primary">Textes de la Section</h4>
                <form action="{{ route('admin.testimonials.update_settings') }}" method="POST">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label>Sous-titre (FR)</label>
                        <input type="text" name="subtitle_fr" class="form-control" value="{{ $settings->subtitle_fr }}">
                    </div>
                    <div class="form-group">
                        <label>Titre Principal (FR)</label>
                        <input type="text" name="title_fr" class="form-control" value="{{ $settings->title_fr }}">
                    </div>
                    <div class="form-group">
                        <label>Description (FR)</label>
                        <textarea name="desc_fr" class="form-control" rows="5">{{ $settings->desc_fr }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary btn-block">Enregistrer les textes</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-success">Ajouter un Témoignage</h4>
                <form action="{{ route('admin.testimonials.store_item') }}" method="POST" enctype="multipart/form-data" class="mb-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom / Fonction</label>
                                <input type="text" name="name" class="form-control" placeholder="Ex: Directeur Qualité" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Photo du Client</label>
                                <input type="file" name="img_file" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Le Témoignage (Texte)</label>
                        <textarea name="text_fr" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-success btn-sm">Ajouter le témoignage</button>
                </form>

                <hr>
                <h4 class="card-title">Témoignages Actuels</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ $item->img ? asset($item->img) : asset('assets/images/testimonial/default.jpg') }}" alt="image" class="mr-2">
                                    {{ $item->name }}
                                </td>
                                <td class="text-wrap" style="max-width: 200px;">{{ Str::limit($item->text_fr, 60) }}</td>
                                <td>
                                    <form action="{{ route('admin.testimonials.destroy_item', $item->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ce témoignage ?')">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection