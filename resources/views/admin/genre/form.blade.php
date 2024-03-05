<div style="width: 800px; margin-left: auto; margin-right: auto;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        <label for="exampleInputCity1">Name</label>
        <input class="form-control" type="text" name="name" value="{{ old('name', $genre->name ?? '') }}" required>
    </div>
    <div class="gap-2 d-md-block" style="margin-bottom: 50px;">
        <a href="/admin/genre" class="btn btn-light">Chiqish</a>
        <button class="btn btn-success">Saqlash</button>
    </div>
</div>
