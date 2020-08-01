@extends('layouts.master')
@section('movie')
</br>
<div class="container">
    <div class="row">
        <div class="card-deck">
        @foreach($movies as $movie)
            <!-- <div class="card col.md.4">
                <div class="card-header">
               
                    <h3>Movie1</h3>
                </div>
            
                <div class="card-body">
                 <p class="card-text">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, id. Consequuntur impedit, provident, placeat sunt magni culpa laudantium quos officiis, adipisci perspiciatis quo suscipit expedita et numquam facere veniam quod?
                 </p>
            </div>
            <div class="card footer">

            <a href="detail/1" class="href"> <button class="btn btn-info">Detail</button></a>
            </div>
        </div> -->
        <div class="card col.md.4">
                <div class="card-header "> 
                    <h3>{{$movie ->name}} </h3>
                </div>
            
                <div class="card-body">
                 <p class="card-text">
                 {{$movie->description}}
                 </p>
        
            </div>
            <div class="card footer">
            
            <a href="detail/1" class="href"> <button class="btn btn-warning">Detail</button></a>
            
            </div>
        </div>
        @endforeach
        
    </div>
 </div>   
 <br>
 {{$movies}}
</div>
</div>

@endsection