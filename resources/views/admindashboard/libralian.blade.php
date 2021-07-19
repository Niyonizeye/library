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
            <form class="form-horizontal" action="{{ route('newLibrianManager') }}" method="POST">
                @csrf

                <div class="form-group row">
                    <label class="col-md-3">Select Libralian</label>
                    <div class="col-md-9">
                        @foreach ($users as $item)
                            <div class="col-md-9">
                                <input type="radio" class="form-check-input"
                                value="{{ $item->id }}" name="userId" required>
                                <label class="form-check-label mb-0" for="customControlValidation1">
                                    {{ $item->name }}</label>
                            </div>
                        @endforeach
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