@extends('layouts.app')

@section('content')
    <div class="mx-12 my-10 md:mx-24 space-y-4">
        <div class="mx-4 gap-4">
            <h1 class="text-2xl font-semibold">Halo, {{ session('username') }} 👋</h1>
            <h2>Mau makan apa hari ini?</h2>
        </div>

        <div class="bg-white p-7 rounded-3xl shadow-md border border-orange-400 hover:-translate-y-1 space-y-2">
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="darkorange" class="size-8 p-1 bg-orange-600/10 rounded-xl">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                </svg>
                <h4 class="font-semibold text-orange-500">Menu terlaris hari ini</h4>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-neutral-800">Nasi Gila</h3>
                <p class="text-neutral-400">Dengan sosis, bakso, telur, dan saos yang yummy.</p>
            </div>
            <div class="flex justify-between">
                <h3 class="text-orange-400 font-bold text-2xl">Rp10.000</h3>
                <p class="px-2 py-1 rounded-full font-semibold text-green-600 bg-green-400/10">Tersedia</p>
            </div>
        </div>

        <h3 class="m-4 font-semibold">Statistik</h3>
        <div class="columns-3 gap-4">
            <div class="bg-white p-5 shadow-md rounded-3xl border  border-neutral-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 p-1 bg-black/5 rounded-xl">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                </svg>
                <h4 class="text-xl font-semibold">8</h4>
                <p class="text-neutral-500">Menu Tersedia</p>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-md border  border-neutral-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 p-1 bg-black/5 rounded-xl">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
                <h4 class="text-xl font-semibold">4</h4>
                <p class="text-neutral-500">Menu Favorit</p>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-md border  border-neutral-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 p-1 bg-black/5 rounded-xl">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h4 class="text-xl font-semibold">Kantin Buka</h4>
                <p class="text-neutral-500">Status</p>
            </div>
        </div>

        <h3 class="m-4 font-semibold">Shortcut</h3>
        <div class="flex flex-col gap-2">
            <a href="/pengelolaan">
                <div class="group flex flex-row bg-white p-3 rounded-3xl shadow-md border border-neutral-300 justify-between items-center  hover:border-orange-400 hover:-translate-y-1 hover:text-orange-500">
                    <div class="flex space-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 p-1 bg-black/5 rounded-xl group-hover:bg-orange-600/10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                        <div>
                            <h4 class="font-semibold">Cari Menu</h4>
                            <p class="text-neutral-500">Eksplor daftar menu di Gettin</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>
            <a href="/profile">
                <div class="group flex flex-row bg-white p-3 rounded-3xl shadow-md border border-neutral-300 justify-between items-center  hover:border-orange-400 hover:-translate-y-1 hover:text-orange-500">
                    <div class="flex space-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 p-1 bg-black/5 rounded-xl group-hover:bg-orange-600/10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold">Profil saya</h4>
                            <p class="text-neutral-500">Informasi seputar akun</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>
            <a href="/info">
                <div class="group flex flex-row bg-white p-3 rounded-3xl shadow-md border border-neutral-300 justify-between items-center hover:border-orange-400 hover:-translate-y-1 hover:text-orange-500">
                    <div class="flex space-x-3 items-center group-hover:text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 p-1 bg-black/5 rounded-xl group-hover:bg-orange-600/10 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold">Info Kantin</h4>
                            <p class="text-neutral-500">Informasi seputar kantin di Gettin</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
@endsection
