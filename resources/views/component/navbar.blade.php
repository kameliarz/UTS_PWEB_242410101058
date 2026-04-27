<div x-data="{ open: false }" class="m-4 md:mx-20 rounded-3xl overflow-hidden">
    <nav  class="bg-neutral-900 p-3 px-7 rounded-3xl relative z-10">
        <div class="flex items-center justify-between">
            <div class="flex flex-row gap-1">
                <img src="/images/gettin-icon.ico" alt="logo-gettin">
                <h2 class="text-amber-50 text-xl font-bold">Gettin</h2>
            </div>

            <div class="hidden md:flex gap-5 text-amber-50">
                <a href="/dashboard" class="hover:text-neutral-400">Dashboard</a>
                <a href="/pengelolaan" class="hover:text-neutral-400">Menu</a>
                <a href="/info" class="hover:text-neutral-400">Tentang</a>
            </div>

            <div class="flex flex-row gap-3">
                <button @click="open = !open" class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6 md:hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                @if(session('username'))
                <a href="/profile">
                    <img src="{{ asset('images/profile-default.jpg') }}" alt="profile" class="w-9 rounded-full border">
                </a>
                @endif
            </div>

        </div>
    </nav>
    <div x-show="open" class="-mt-8 pt-12 bg-neutral-800 text-amber-50 rounded-b-3xl p-5 flex flex-col gap-3 md:hidden">
        <a href="/dashboard" class="hover:text-gray-400">Dashboard</a>
        <a href="/pengelolaan" class="hover:text-gray-400">Menu</a>
        <a href="/info" class="hover:text-gray-400">Tentang</a>
    </div>
</div>
