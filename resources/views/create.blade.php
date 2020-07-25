@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing <span class="float-right"><a href='/home' class="btn btn-secondary">Back</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="post" action="/listings">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="addres" id="address" placeholder="Enter address">
                    </div> 
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Enter website">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>  
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                    </div>  
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input type="text" class="form-control" name="bio" id="bio" placeholder="Enter bio">
                    </div>                       
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
