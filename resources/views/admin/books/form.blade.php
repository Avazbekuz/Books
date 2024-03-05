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
        <label for="exampleInputCity1">Categriyalar</label>
        <select name="category" class="form-select" id="inputGroupSelect01">
            <option value="0" disabled selected>Categriy</option>
            @foreach($categorys as $category)
                @if(isset($book) && $category->id===$book->category_id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputCity1">Aftorlar</label>
        <select name="author" class="form-select" id="inputGroupSelect01">
            <option value="0" disabled selected>Aftor</option>
            @foreach($authors as $author)
                @if(isset($book) && $author->id===$book->author_id)
                    <option value="{{$author->id}}" selected>{{$author->name}}</option>
                @else
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputCity1">Janrlar</label>
        <select name="genre" class="form-select" id="inputGroupSelect01">
            <option value="0" disabled selected>Janr</option>
            @foreach($genres as $genre)
                @if(isset($book) && $genre->id===$book->genres_id)
                    <option value="{{$genre->id}}" selected>{{$genre->name}}</option>
                @else
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputCity1">Name</label>
        <input class="form-control" type="text" name="name" value="{{ old('name', $book->name ?? '') }}" required>
    </div>
    <div class="form-group">
        <label for="exampleInputCity1">Text</label>
        <input class="form-control" type="text" name="text" value="{{ old('text', $book->text ?? '') }}" required>
    </div>
    <div class="form-group">
        <label for="exampleInputCity1">Yil</label>
        <input class="form-control" type="date" name="years" value="{{ old('years', $book->year ?? '') }}" required>
    </div>
    <div class="form-group">
        <label for="exampleInputCity1">Photo</label>
        <input type="file" name="photo" class="form-control" accept="image/png, image/jpeg, image/svg">
    </div>
    <div class="form-group">
        <label for="exampleInputCity1">Book pdf</label>
        <input type="file" name="book_pdf" class="form-control" accept="application/pdf">
    </div>
    <div class="gap-2 d-md-block" style="margin-bottom: 50px;">
        <a href="/admin/books" class="btn btn-light">Chiqish</a>
        <button class="btn btn-success">Saqlash</button>
    </div>
</div>
