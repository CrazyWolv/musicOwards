
{{-- Le tag blade @csrf insère automatiquement pour nous un token --}}
{{-- qui permettra de confirmer que les données arrivent de notre formulaire --}}
{{-- et ont bien été transmis par notre utilisateur --}}
{{-- https://laravel.com/docs/9.x/blade#csrf-field --}}
@csrf


<div class="mb-3">
    <label class="form-label" for="artist-name">Nom de l'artiste</label>
    <input type="text" name="name" id="artist-name" placeholder="Nom de l'artiste" value="{{ old('name', $artist->name) }}" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label" for="artist-image">Photo de l'artiste</label>
    <input type="file" name="image" id="artist-image" class="form-control">

    @if ($artist->image)
        Télécharger une nouvelle image uniquement si vous souhaitez remplacer celle-ci<br>
        <img src="{{ Storage::url($artist->image) }}" style="max-width: 100%; max-height: 100px">
    @endif

</div>
<div class="mb-3">
    <label class="form-label" for="artist-description">Description</label>
    <textarea name="description" id="artist-description" cols="30" rows="5" placeholder="Description" class="form-control">{{ old('description', $artist->description) }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">Genre</label>
    <div class="form-check">

        @foreach ($categories as $category)
        <div class="radio-item">
            <input type="radio" class="form-check-input" name="category_id" id="artist-genre-{{ $category->id }}" value="{{ $category->id }}" 
            @if (old('category_id', $artist->category_id) == $category->id) checked @endif>
            <label for="artist-genre-{{ $category->id }}" class="form-check-label">{{ $category->name }}</label>
        </div>
        @endforeach

    </div>

</div>
<div class="mb-3">
    <label class="form-label" for="artist-video">Vidéo de présentation</label>
    <input type="text" name="url_video" id="artist-video" placeholder="https://youtube.com/idvideo" value="{{ old('url_video', $artist->url_video) }}" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label" for="artist-albums">Albums</label>
    <textarea type="text" name="album" cols="30" rows="5" id="artist-albums" placeholder="Un album par ligne" class="form-control">{{ old('album', $artist->album) }}</textarea>
</div>
<div class="mb-3">
    <button class="btn btn-primary btn-icon-left" type="submit">
        <i class="bi-send"></i>
        Enregistrer
    </button>
</div>