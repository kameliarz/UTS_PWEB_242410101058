@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center px-4 m-10 md:20">

    <div class="w-full max-w-3xl bg-white border border-neutral-300 shadow-md rounded-3xl p-8 md:p-10 relative">

        <div class="flex flex-col md:flex-row md:items-start gap-8">
            <div class="flex justify-center md:justify-start">
                <img src="{{ asset('images/profile-default.jpg') }}" alt="Foto Profil" class="w-40 rounded-full object-cover  bg-neutral-300 border ">
            </div>

            <div class="flex-1 space-y-4">
                <div class="space-y-2">
                    <p class=" font-semibold text-neutral-800">Nama Pelanggan</p>
                    <h1 class="text-neutral-900 p-2 px-4 border rounded-2xl">
                        {{ session('username') }}
                    </h1>
                </div>
                <div class="space-y-2">
                    <p class=" font-semibold text-neutral-800">Role</p>
                    <p class="text-neutral-900 p-2 px-4 border rounded-2xl">Pelanggan</p>
                </div>

                <div class="space-y-2">
                    <p class=" font-semibold text-neutral-800">Status Akun</p>
                    <span class="inline-block px-3 py-1 rounded-full text-green-600 bg-green-400/10">
                        Aktif
                    </span>
                </div>
            </div>
        </div>
        <div class="mt-8 flex justify-end">
            <a href="/logout"
            class="bg-neutral-800 hover:bg-neutral-700 transition px-5 py-2 rounded-full text-sm text-neutral-100 hover:text-black">
                Log out
            </a>
        </div>

    </div>

</div>
@endsection
