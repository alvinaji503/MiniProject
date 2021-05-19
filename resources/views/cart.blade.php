@extends("utheme")
@section("content")

<h4><center>My Cart</center></h4>
 <br>
<div class="container">
<div class="row ">

@foreach($products as $item) 

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$item->pimage) }}">
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<p class="card-text"><small class="text-muted"><h6>{{$item->pid}} </h6></small></p>
<h5>{{$item->pn}}</h5> 
</div>
<br>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<h5>₹ {{$item->pp}}</h5>
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Remove</a>

</div>
<br><br>

@endforeach

</div>
<center><a href="ordernow" class="btn btn-primary">Order Now</a><center>


</div>

@endsection