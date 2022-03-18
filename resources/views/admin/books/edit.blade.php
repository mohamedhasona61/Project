@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row justify-content-center mb-2">
        <div class="col-lg-10">
          <h1>Edit Book</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{ route('books.update', [$book->id]) }}" enctype="multipart/form-data"
              method="post">
              @csrf
              @method('PUT')
              <div class="row justify-content-center">
                <div class="col-lg-8">

                  <div class="form-group">
                    <label for="title">name</label>
                    <input type="text" name="name" value="{{ $book->name }}"
                      class="form-control @error('name') is-invalid @enderror" placeholder="name of the book">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>
                          {{ $message }}
                        </strong>
                      </span>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="content">description</label>
                    <textarea class="summernote form-control @error('description') is-invalid @enderror" name='description'
                      rows="5">{{ $book->description }}</textarea>
                    @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>
                          {{ $message }}
                        </strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="category_id">Choose a category</label>
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                      <option value="">Select a category</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                          {{ $book->category_id == $category->id ? 'selected' : '' }}>
                          {{ $category->name }}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                      <span class="invalid-feedback" role="alert">
                        <strong>
                          {{ $message }}
                        </strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" style="height:100%" class="form-control @error('image') is-invalid @enderror"
                      name="image">
                    @error('image')
                      <span class="invalid-feedback" role="alert">
                        <strong>
                          {{ $message }}
                        </strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- /.content -->
@endsection