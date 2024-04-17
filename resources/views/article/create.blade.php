<x-layout>
<div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
        <h1 class="dispaly-1">The Aulab Post</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="" method="post" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title" value={{old}}>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>