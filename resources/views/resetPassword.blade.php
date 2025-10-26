<!DOCTYPE html>
<html>

@extends('includes.header')
@section('title','Reset Password')
<body>

<div style="background-color: rgb(247, 238, 238);">
    <H3 style="color: #0b8f96">Please Enter Your New Password</H3>
    <form action="{{route('reset_password')}}" method="POST">
        @csrf
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="pass">New Password</label>
            <input type="password" id="pass" class="form-control form-control-lg" min="8" required name="password"/>
            @if(session('error'))
            <span class="test-danger">{{session('error')}}</span>
            @endif

        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="Cpass">Confirm Password</label>
            <input type="password" id="Cpass" class="form-control form-control-lg" required min="8" name="Cpassword"/>
            @if(session('error'))
                <span class="test-danger">{{session('error')}}</span>
            @endif
        </div>
        <div>
            <button type="submit" class="btn btn-outline-dark m-4">Save</button>
        </div>
    </form>

</div>

</body>
</html>
