@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-handshake"></i>
        </span> Gestion des Partenaires
    </h3>
</div>

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nouveau Partenaire</h4>
                <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nom du Partenaire</label>
                        <input type="text" name="name" class="form-control" placeholder="Ex: ISO Certification" required>
                    </div>
                    <div class="form-group">
                        <label>Logo (Image)</label>
                        <input type="file" name="logo_file" class="form-control" required onchange="previewLogo(this)">
                        <img id="logo-preview" src="#" class="mt-3 d-none rounded border" width="100%">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary btn-block">Ajouter le partenaire</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des Logos</h4>
                <div class="row">
                    @forelse($partners as $partner)
                    <div class="col-md-3 col-sm-6 mb-4 text-center">
                        <div class="border rounded p-2 position-relative bg-light h-100">
                            <img src="{{ asset($partner->logo) }}" class="img-fluid mb-2" style="max-height: 60px; object-fit: contain;">
                            <p class="small mb-2 font-weight-bold">{{ $partner->name }}</p>
                            
                            <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs py-1 px-2" onclick="return confirm('Supprimer ce partenaire ?')">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center text-muted py-5">
                        <i class="mdi mdi-alert-circle-outline mdi-36px"></i>
                        <p>Aucun partenaire trouvé.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('logo-preview').src = e.target.result;
                document.getElementById('logo-preview').classList.remove('d-none');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection