@extends('layouts.master')
@section('title')
     Welcome || {{ env('APP_NAME') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
     <div class="col-md-2">

     </div>
     <div class="col-md-8">
          <h2 class="my-5 text-center">Laravel 9 Ajax CRUD</h2>
          <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product</a>
          <div class="table-data text-center">
               <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                         <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                         <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>
          </div>
     </div>

    </div>
 </div>

 @include('partials.add-product-model')
@endsection
         