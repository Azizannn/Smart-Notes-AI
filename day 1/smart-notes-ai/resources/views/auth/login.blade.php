@extends('layouts.auth')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-slate-100">
        <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6"> Smart Notes AI </h1>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-4">
                    <label class="block mb-2">Username</label>
                    <x-forminput type="text" name="username"/>
                </div>
                <div class="mb-4">
                    <label class="block mb-2">Password</label>
                    <x-forminput type="password" name="password"/>
                </div>
                <x-button type="submit" class="w-full">Login</x-button>
            </form>
        </div>
    </div>
@endsection