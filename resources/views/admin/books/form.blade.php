    @csrf
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="form-group">
          <label for="title">Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            placeholder="Name of the book">
          @error('title')
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
          <label for="content">description</label>
          <textarea class="summernote form-control @error('description') is-invalid @enderror" name='description'
            placeholder="write your book description " rows="5"></textarea>
          @error('content')
            <span class="invalid-feedback" role="alert">
              <strong>
                {{ $message }}
              </strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="category_id">Choose a category</label>
          <select name="category_id"
            class="custom-select form-control @error('category_id') is-invalid @enderror">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
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
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>