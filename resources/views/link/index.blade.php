<x-layout>
    <div class="row m-4">
        <div class="col-12">
            @if(session('message'))
                <div class="alert alert-secondary my-2">{{ session('message') }}</div>
            @endif

            <a href="{{ route('links.create') }}" class="btn btn-primary">Nuevo Link</a>
        </div>

        <div class="col-12 mt-4">
            <table class="table table-bordered table-striped table-hover table-responsive table-sm ">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>URL </th>
                        <th>Descripcion </th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($links as $link)
                        <tr>
                            <td>{{ $link->titulo }}</td>
                 <td>
                    {{  $categorias->where('id', $link->categoria_id)->first()->nombre ?? 'Sin categoria' }}


                 </td>
                            <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                            
                            <td>{{ $link->descripcion }}</td>
                            <td>{{ $link->status }}</td>
                            <td>
                                <a href="{{ route('links.edit', $link) }}" class="btn btn-warning">Editar</a>
                                <form method="POST" action="{{ route('links.destroy', $link) }}" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </tr>
                @endforeach
            </tbody>
            </table>

            {{ $links->links() }}


        </div>
    </div>

    
</x-layout>