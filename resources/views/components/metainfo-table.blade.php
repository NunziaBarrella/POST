<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">n</th>
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
                <button type="submit" class="btn text-black fa-regular fa-circle-check"></button>
            </form>
            </td>
            <td>
            <form action="{{route('admin.deleteTag' , ['tag' => $metaInfo])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn text-black"><i class="fa-regular fa-trash-can"></i></button>
            </form>
            </td>
            @else
            <td>
            <form action="{{route('admin.editcategory' , ['category' => $metaInfo])}}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="Nuova categoria" class="form-control w-50 d-inline">
                <button type="submit" class="btn text-black"><i class="fa-regular fa-circle-check"></i></button>
            </form>
            </td>
            <td>
            <form action="{{route('admin.deleteCategory', ['category' =>$metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn text-black fa-regular fa-trash-can"></button>
                </form>
            </td>


            @endif

        </tr>
        @endforeach
    </tbody>
</table>
