@extends('template.main')

@section('baner')
        
            <div class="row">
                <div class="col-md-6">
                    <h1 class="promo-title" style="font-size:60px;">BEST <br>SAWIT AGENCY</h1>
                    <p style="font-size:20px;">Sawitku merupakan sebuah website yang menyediakan bibit-bibit Sawit pilihan</p>
                        <button type="button" class="btn btn-outline-success" onclick ="location.href='/sale'">TELUSURI</button>
                </div>
                <div class="col-md-6">
                    <img src="img/wa.png" alt="" class="icon-img">
                </div>
               
            </div>
            <img src="img/wave1.png" alt="" width="100%"> 
     
@endsection

@section('landing')
    <div class="row-landing">
        <div class="col-lg-5">
        <img src="img/sawit4.jpg" width="75%" class="img-sawitorg">   
        </div>
        <div class="col-lg-5">
        <br><br>
        <h2 class="h2-landing">Kami Adalah Agen Sawit Terpercaya </h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        <p>
        <img src="img/check.svg" alt="" width="5%">  22k Partner bekerja sama dengan kami
            </p>
            <p>
        <img src="img/check.svg" alt="" width="5%">  10 tahun lebih sudah berpengalaman
            </p>
            <p>
        <img src="img/check.svg" alt="" width="5%">  Memberikan pelayanan terbaik
            </p>
            <p>
        <img src="img/check.svg" alt="" width="5%">  Testimonial pelanggan
            </p>
            <p>
        <img src="img/check.svg" alt="" width="5%">  Salah satu pusat perdagangan biji sawit Terpercaya
            </p>
        <button class="btn btn-learn"> Learn more </button>
        </div>
    </div>

@endsection

@section('sale')

<div class="container">
    <div class="row">
    <h4 class ="sale-h4">Kami Melayani</h4>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <center><img src="img/dollar.svg" alt="" width="70px" class="img-icons"></center>
                <h5 class="card-title" style="text-align: center;">Jual Beli Bibit</h5>
                <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <center><img src="img/tree.svg" alt="" width="70px" class="img-icons"></center>
                <h5 class="card-title" style="text-align: center;">Perawatan </h5>
                <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <center><img src="img/basket2.svg" alt="" width="70px" class="img-icons"></center>
                <h5 class="card-title" style="text-align: center;">Panen Sawit</h5>
                <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <center><img src="img/person.svg" alt="" width="70px" class="img-icons"></center>
                <h5 class="card-title" style="text-align: center;">Personal Education</h5>
                <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    

</div>
@endsection
