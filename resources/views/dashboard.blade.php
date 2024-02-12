<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    {{-- form order --}}
    <div class="text-center">
        {{ __("Form Order") }}
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('order') }}">
                @csrf
        
                <!-- date -->
                <div>
                    <x-input-label for="date" :value="__('Date')" />
                    <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus autocomplete="date" />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Telepon -->
                <div class="mt-4">
                    <x-input-label for="telepon" :value="__('telepon')" />
                    <x-text-input id="telepon" class="block mt-1 w-full" type="number" name="telepon" :value="old('telepon')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('telepon')" class="mt-2" />
                </div>

                <!-- Order -->  
                <div>
                    <x-input-label for="order" :value="__('Order')" />
                    <x-text-input id="order" class="block mt-1 w-full" type="text" name="order" :value="old('order')" required autofocus autocomplete="order" />
                    <x-input-error :messages="$errors->get('order')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-center mt-4">     
                    <x-primary-button class="ms-4">
                        {{ __('Send Order') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <!-- form tambah klien --> 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center">Form Tambah Klien</div>

            <form method="POST" action="{{ route('clients.store') }}">
                @csrf
        
                <!-- nama -->
                <div>
                    <x-input-label for="nama" :value="__('nama')" />
                    <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                </div>

                <!-- telepon -->
                <div>
                    <x-input-label for="telepon" :value="__('telepon')" />
                    <x-text-input id="telepon" class="block mt-1 w-full" type="text" name="telepon" :value="old('telepon')" required autofocus autocomplete="telepon" />
                    <x-input-error :messages="$errors->get('telepon')" class="mt-2" />
                </div>
        
                <!-- order -->
                <div class="mt-4">
                    <x-input-label for="order" :value="__('order')" />
                    <x-text-input id="order" class="block mt-1 w-full" type="text" name="order" :value="old('order')" required autocomplete="order" />
                    <x-input-error :messages="$errors->get('order')" class="mt-2" />
                </div>

                <!-- Date -->
                <div class="mt-4">
                    <x-input-label for="date" :value="__('date')" />
                    <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>

                <!-- Order -->  
                <div>
                    <x-input-label for="alamat" :value="__('alamat')" />
                    <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-center mt-4">     
                    <x-primary-button class="ms-4">
                        {{ __('Send Order') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
