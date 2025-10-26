
@extends('includes.header')
@section('title','Forgot Password')
<body>
<div>
    <h2 class=" fw-normal m-3 pb-3" style="letter-spacing: 1px;">Forgot Password</h2>
    <div class="card justify-items-center align-items-center text-center " style="background-color: rgb(247, 238, 238); ">
        <div>
            <img  src="{{ asset('assets/pictures/bookLogo.jpg') }}" width="100px">
        </div>
        <div class="card-body">
            <h5 class="card-title" style="color: #0b8f96">Enter your email to reset your password</h5>
            <form method="post" action="{{route('verification_code')}}">
                @csrf

                <div class="form-outline mb-4">
                    <label class="form-label" for="email" >Email address</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
{{--                    @if(session('status'))--}}
{{--                        <span>--}}
{{--                            {{session('status')}}--}}
{{--                        </span>--}}
{{--                    @endif--}}
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-dark">Send Reset Link</button>
                </div>
            </form>
        </div>

    </div>
</div>

</body>

