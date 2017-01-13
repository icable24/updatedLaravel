@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    @include('includes.message-block')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">

            <div class="panel-info">
                <div class="panel-heading">
                    <h3>Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('signin')}}" method="post" >
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}"><!---->
                        <label for="email">Your E-mail</label>
                        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" placeholder="E-mail"> <!---->
                    </div>
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}"><!---->
                        <label for="password">Your Password</label>
                        <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}" placeholder="Password"> <!---->
                    </div>
                    
                </div> 
                    <div class="panel-footer">  
                        <div class="form-actions text-center forms">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('register') }}">Register</a>
                            
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>      
                    </div>
                </form>
               
                
            </div>
                
            </div>
        </div>
    </div>
    

@endsection
