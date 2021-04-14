<x-layout>
  <x-slot name="title">
    Nouvelle critique de {{ $anime->title }}
  </x-slot>

<div class="newreview">
  <form action="/anime/{id}/new_review" enctype="multipart/form-data" method="get">
@csrf

<div class="critiques">
  <h1>Nouvelle Critique de {{ $anime->title }}</h1>
</div>

<div class="input-group">
  <label for="rating">Notes</label>
  <input id="rating" name="rating" value="{{ old('rating') }}" required>
  @error('rating')
  <p class="erreur">{{ $message }}</p>
  @enderror
</div>

<div class="input-group">
  <label for="comment">Commentaires</label>
  <input id="comment" name="comment" value="{{ old('comment') }}" required>
  @error('comment')
  <p class="erreur">{{ $message }}</p>
  @enderror
</div>

<div class="bouton">
  <button class="ajoutreview">Ajouter un commentaire</button>
</div>

  </form>
</div>

</x-layout>
