@extends('layouts.master')

@section('title')
    Signup
@endsection

@section('content')
@include('includes.message-block')
	<div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">

            <div class="panel-info">
                <div class="panel-heading">
                    <h3>Sign Up</h3>
                </div>
                <div class="panel-body">
			        <form action="{{ route('signup') }}" method="post">
			            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}"><!---->
			                <label for="email">Your E-mail</label>
			                <input class="form-control"  type="text" name="email" id="email" value="{{ Request::old('email') }}"> <!--"-->
			            </div>
			            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}"><!---->
			                <label for="first_name">Your First Name</label>
			                <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}"> <!---->
			            </div>
			            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}"><!---->
			                <label for="last_name">Your Last Name</label>
			                <input class="form-control" type="text" name="last_name" id="last_name" value="{{ Request::old('last_name') }}"> <!---->
			            </div>
			            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}"><!---->
			                <label for="phone">Your Phone Number</label>
			                <input class="form-control" type="text" name="phone" id="phone" value="{{ Request::old('phone') }}"> <!---->
			            </div>
			            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			                <label for="password">Your Password</label>
			                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}"> <!---->
			            </div>
			           
			    </div>  
			    	<div class="panel-footer">  
                        <div class="form-actions text-center forms">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('home') }}">Back</a>
			            	<input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>      
                    </div>  
			    </form>
				
		</div>
	</div>
@endsection