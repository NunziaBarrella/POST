<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">n</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roleRequests as $user)
        <tr>
            <th scoper ="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @switch($role)
                @case('amministratore')
                <form action="{{route('admin.setAdmin', compact('user')) }}" method="POST">
                    @csrf
                    @method('patch')

                <button type="submit" class="btn bg-info test-black">Attiva {{$role}}</button>

                </form>
                @break

                @case('revisore')
                <form action="{{route ('admin.setRevisor', compact('user')) }}" method="POST">
                    @csrf
                    @method('patch')

                <button type="submit" class="btn bg-info test-black">Attiva {{$role}}</button>

                </form>
                @break
                @case('writer')
                <form action="{{route ('admin.setWriter', compact('user')) }}" method="POST">
                    @csrf
                    @method('patch')

                <button type="submit" class="btn bg-info test-black">Attiva {{$role}}</button>

                </form>
                @break
                @endswitch
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
