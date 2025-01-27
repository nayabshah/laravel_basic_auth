@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

            <h1>Looking for an employee?</h1>
            <h1>Please create an account</h1>
        </div>
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Employer Registration
            </div>

            <form action="#" method='post'>@csrf

                <div class="card-body">
                    <div class="form-group mt-3">
                        <label for="">Company name</label>
                        <input type="text" name='name' class='form-control' />
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Email</label>
                        <input type="text" name='email' class='form-control' />
                        @if($errors->has('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Password</label>
                        <input type="text" name='password' class='form-control' />
                        @if($errors->has('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                        @endif
                    </div>
                    <br/>
                    <div class="form-group">
                       <button class="btn btn-primary" type='submit'>Register</button>
                    </div>
                </div>
            </form>
        </div>
        </div>

    </div>
</div>

@endsection