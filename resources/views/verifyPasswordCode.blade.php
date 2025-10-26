<!DOCTYPE html>
<html>
@extends('includes.header')
@section('title','change password')

<body>
<div class="d-flex align-items-center justify-content-center  ">

    <div class="card justify-items-center align-content-center text-center" style="background-color: rgb(247, 238, 238); ">
{{--        <div>--}}
{{--            <img  src="{{ asset('assets/pictures/bookLogo.jpg') }}" width="100px">--}}
{{--        </div>--}}
        <div class="card-body">
            <h5 class="card-title mb-4" style="color: #0b8f96">Please Check Your Email </h5>
            <form method="POST" action="{{route('verify_code')}}">
                @csrf

                <div class="form-outline mb-4 ">
                    <div class="otp-input-container ">
                        <input type="text" maxlength="1" pattern="[0-9]" name="code[]" inputmode="numeric" size="1" class="code-input" />
                        <input type="text" maxlength="1" pattern="[0-9]" name="code[]" inputmode="numeric" size="1" class="code-input" />
                        <input type="text" maxlength="1" pattern="[0-9]" name="code[]" inputmode="numeric" size="1" class="code-input" />
                        <input type="text" maxlength="1" pattern="[0-9]" name="code[]" inputmode="numeric" size="1" class="code-input" />
                        <input type="text" maxlength="1" pattern="[0-9]" name="code[]" inputmode="numeric" size="1" class="code-input" />
                        <input type="text" maxlength="1" pattern="[0-9]" name="code[]" inputmode="numeric" size="1" class="code-input" />
                    </div>
                </div>
                <div>
                    @if (isset($error))
                    <span class="text-danger">{{$error}}</span>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-dark m-4">Verify</button>
                </div>
            </form>
        </div>

    </div>
</div>
</body>
</html>

