@extends('layouts.app')

@section('content')
<div class=" bg-neutral-100 mx-12 md:mx-24">
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-neutral-900">Info Kantin</h1>
        <p class="text-neutral-500 mt-1">
            Informasi seputar kantin Gettin hari ini.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-3 mb-6">

        <div class="bg-white rounded-3xl p-5 border border-neutral-300 shadow-md hover:-translate-y-1">
            <h3 class="font-bold text-neutral-900 mb-2">Whatsapp Admin</h3>
            <p class="text-neutral-600 text-sm">Nomor</p>
            <p class="text-xl font-bold text-neutral-900 mt-2">082xxxxxxxxx</p>
        </div>

        <div class="bg-white rounded-3xl p-5 border border-neutral-300 shadow-md hover:-translate-y-1">
            <h3 class="font-bold text-neutral-900 mb-2">Jam Operasional</h3>
            <p class="text-neutral-600 text-sm">Senin - Jumat</p>
            <p class="text-xl font-bold text-neutral-900 mt-2">10.00 - 16.00</p>
        </div>
        <div class="bg-white rounded-3xl p-5 border border-neutral-300 shadow-md hover:-translate-y-1">
            <h3 class="font-bold text-neutral-900 mb-2">Lokasi Kantin</h3>
            <p class="text-neutral-600 text-sm">Tempat</p>
            <p class="text-xl font-bold text-neutral-900 mt-2">Kantin Fakultas Ilmu Komputer</p>
        </div>

    </div>
</div>
@endsection
