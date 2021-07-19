@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            
            <strong>{{ $message }}</strong>
        </div>
    @endif

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal" action="{{ route('registerbook') }}"  enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Book Information</h4>
                    
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 text-end control-label col-form-label"> Title
                            </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="eg. c programming">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"
                            class="col-sm-3 text-end control-label col-form-label">Author</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cono1"
                               name="author" placeholder="Author Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname"
                            class="col-sm-3 text-end control-label col-form-label">publisher</label>
                        <div class="col-sm-9">
                            <input type="text" name="publisher" class="form-control" id="fname"
                                placeholder="publisher Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="booknumber"
                            class="col-sm-3 text-end control-label col-form-label">Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="booknumber"
                                name= "bookNumber" placeholder="SSN Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image"
                            class="col-sm-3 text-end control-label col-form-label">image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image"
                                name= "img_src" placeholder="SSN Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descrption"
                            class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    
                </div>             
               
            </form>
        </div>
    </div>
   
   
</div>
@endsection