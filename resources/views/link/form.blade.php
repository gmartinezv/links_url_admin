<x-layout>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" action="{{ $link->exists ? route('links.update', $link) : route('links.store') }}">
                @csrf
                @if($link->exists) @method('PUT') @endif

                <div class="form-group">
                    <label>Título</label>
                    <input name="titulo" class="form-control" value="{{ old('titulo', $link->titulo) }}">
                    @error('titulo') <div>{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label>Url</label>
                    <input name="url" class="form-control" value="{{ old('url', $link->url) }}">
                    @error('url') <div>{{ $message }}</div> @enderror
                </div>


                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" class="form-control">{{ old('descripcion', $link->descripcion) }}</textarea>
                    @error('descripcion') <div>{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria_id" class="form-control">
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" @selected(old('categoria_id', $link->categoria_id) == $categoria->id)>{{ $categoria->nombre }}</option>
                        @endforeach
                        
                    </select>
                    @error('categoria_id') <div>{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="draft" @selected(old('status', $link->status) === 'draft')>Borrador</option>
                        <option value="published" @selected(old('status', $link->status) === 'published')>Publicado</option>
                    </select>
                    @error('status') <div>{{ $message }}</div> @enderror
                </div>


                <button class="btn btn-primary mt-2">{{ $link->exists ? 'Actualizar' : 'Crear' }}</button>
            </form>
        </div>
    </div>
</x-layout>