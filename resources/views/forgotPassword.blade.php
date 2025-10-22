@include('includes.header')
<body>
<div>
    <h2 class=" fw-normal m-3 pb-3" style="letter-spacing: 1px;">Forgot Password</h2>
    <div class="card justify-items-center align-items-center text-center ">
        <div>
            <img  src="{{ asset('assets/pictures/bookLogo.jpg') }}" width="100px">
        </div>
        <div class="card-body">
            <h5 class="card-title">Enter your email to reset your password</h5>
            <form method="POST" action="{{route('verification_code')}}">
                @csrf

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                </div>

            </form>
        </div>
        <div>
            <button type="submit" class="btn btn-outline-dark">Send Reset Link</button>
        </div>
    </div>
</div>

</body>

