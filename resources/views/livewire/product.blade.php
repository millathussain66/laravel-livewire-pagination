<div class="container">
    <h1 class="text-center bg-info text-white p-5">Show Dummy Content</h1>

    <div class="row">


    <div class="col-lg-6">

        <div class="form-floating mb-2">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" wire.click='sorting'>
                <option value="menu_order" selected="selected">Default sorting</option>
                <option value="date">Sort by newness</option>
                <option value="price">Sort by price: low to high</option>
                <option value="price-desc">Sort by price: high to low</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
          </div>
    </div>
    <div class="col-lg-6">
        <div class="form-floating mb-2">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" wire.click="parpage">
                <option value="6" selected="selected">12 per page</option>
                <option value="10">16 per page</option>
                <option value="14">18 per page</option>
                <option value="16">21 per page</option>
                <option value="18">24 per page</option>
                <option value="20">30 per page</option>

            </select>
            <label for="floatingSelect">Works with selects</label>
          </div>

    </div>
</div>






    @foreach ($value as $item)
    <div class="card mb-2">
        <div class="card-body">
        <h5> {{ $item->name }}</h5>
          <h5 class="card-title"> {{ $item->title }}</h5>
          <p class="card-text">{{ $item->description }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      @endforeach

     <nav aria-label="Page navigation example mt-5">
        {{ $value->links() }}
        {{-- <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul> --}}
      </nav>
    </div>
