<!DOCTYPE html>
<html>
@extends('includes.header')
@section('title',' Forgot Password  Code')
<body>
<h2>Hello, {{ $user->name }}</h2>
<p>You requested to reset your password.</p>
<p>Your verification code is:</p>

<h1 style="letter-spacing: 5px; color: #2b6cb0;">{{ $verification_code }}</h1>

<p>This code will expire in 15 minutes.</p>
<p>If you didn’t request this, please ignore this email.</p>

<br>
<p>— The Support Team</p>
</body>
</html>
