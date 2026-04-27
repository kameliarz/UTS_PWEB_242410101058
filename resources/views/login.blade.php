@extends('layouts.app')

@section('content')
    <div class="m-20 flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-10 rounded-3xl shadow-md border border-neutral-300">
            <h1 class="text-xl text-center mb-4">Login</h1>
            <form method="POST" action="/login" class="flex flex-col gap-4">
                @csrf
                <input type="text" name="username" placeholder="Masukkan username" class="border p-2 rounded-xl">
                <input type="password" name="password" placeholder="Masukkan password" class="border p-2 rounded-xl">
                <button type="submit" class="bg-neutral-900 text-white p-2 rounded-full">Login</button>
            </form>
        </div>
    </div>
@endsection
