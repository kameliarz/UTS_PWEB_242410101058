@extends('layouts.app')

@section('content')
<div class=" bg-neutral-100 mb-10 mx-12 md:mx-24">

    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-neutral-900">Menu Kantin</h1>
        <p class="text-neutral-500 mt-1">Pilih menu favoritmu hari ini.</p>
    </div>

    <div class="flex gap-3 mb-6 overflow-x-auto">
        <span class="px-4 py-2 rounded-full bg-neutral-900 text-white text-sm">Semua</span>
        <span class="px-4 py-2 rounded-full bg-white border border-neutral-300 text-sm hover:bg-neutral-100">Makanan</span>
        <span class="px-4 py-2 rounded-full bg-white border border-neutral-300 text-sm hover:bg-neutral-100">Minuman</span>
        <span class="px-4 py-2 rounded-full bg-white border border-neutral-300 text-sm hover:bg-neutral-100">Snack</span>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        @foreach ($menu as $item)
            <div class="group bg-white rounded-3xl p-5 shadow-md border border-neutral-300 hover:border-orange-400 hover:-translate-y-1">

                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm text-orange-500 font-medium">{{ $item['kategori'] }}</p>
                        <h2 class="text-xl font-bold text-neutral-900">{{ $item['nama'] }}</h2>
                    </div>

                    <span class="text-sm px-3 py-1 font-semibold rounded-full text-green-600 bg-green-400/10">
                        Tersedia
                    </span>
                </div>

                <p class="text-neutral-500 text-sm mb-5">
                    Menu favorit kantin dengan rasa yang siap bikin balik lagi.
                </p>

                <div class="flex items-center justify-between">
                    <p class="text-lg font-bold text-neutral-900">
                        Rp{{ number_format($item['harga'], 0, ',', '.') }}
                    </p>

                    <p class="text-sm text-neutral-500">
                        Stok: {{ $item['stok'] }}
                    </p>
                </div>

            </div>
        @endforeach
    </div>

</div>
@endsection
