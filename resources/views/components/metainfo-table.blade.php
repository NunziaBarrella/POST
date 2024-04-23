<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome tag</th>
            <th scope="col">Q.tà articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if ($metaType == 'tags')
            <td>
            <form action="{{route('admin.editTag' , ['tag' => $metaInfo])}}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                <button type="submit" class="btn bg-info text-black">Aggiorna</button>
            </form>
            </td>
            <td>
            <form action="{{route('admin.deleteTag' , ['tag' => $metaInfo])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn bg-danger text-black">Rimuovi tag</button>
            </form>
            </td>
            @else
            <td>
         

            @endif
       
        </tr>
        @endforeach
    </tbody>
</table>