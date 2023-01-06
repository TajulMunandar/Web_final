

@extends('template.main')

@section('sale')

    <div class="row">
        <h4 class ="sale-h4">Choose Your Product</h4>
        <p class="sale-p">You can see our best product in this section</p>
  <div class="col">
    <div class="card" >
        <img src="img/sawit2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <hr>
            <p class="card-text">Lorem ipsum</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card" >
        <img src="img/sawit2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <hr>
            <p class="card-text">Lorem ipsum</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card" >
        <img src="img/sawit2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <hr>
            <p class="card-text">Lorem ipsum</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card" >
        <img src="img/sawit2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <hr>
            <p class="card-text">Lorem ipsum</p>
            <div class="row-text">
                <div class="col-text">
                    <a href="#">beli</a>
                </div>
                <div class="col-text">
                    <p>19$</p>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Other Product
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>

</div>

@endsection

