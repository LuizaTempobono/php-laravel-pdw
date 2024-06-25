<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="/cadastrar">
        @csrf

        <!-- Placa -->
        <div>
            <x-input-label for="Placa" :value="__('Placa')" />
            <x-text-input id="Placa" class="block mt-1 w-full" type="text" name="Placa" :value="old('Placa')" required autofocus/>
            <x-input-error :messages="$errors->get('Placa')" class="mt-2" />
        </div>

        <!-- Modelo -->
        <div class="mt-4">
            <x-input-label for="Modelo" :value="__('Modelo')" />
            <x-text-input id="Modelo" class="block mt-1 w-full" type="text" name="Modelo" :value="old('Modelo')" required />
            <x-input-error :messages="$errors->get('Modelo')" class="mt-2" />
        </div>
        
        <!-- Cor -->
        <div class="mt-4">
            <x-input-label for="Cor" :value="__('Cor')" />
            <x-text-input id="Cor" class="block mt-1 w-full" type="text" name="Cor" :value="old('Cor')" required />
            <x-input-error :messages="$errors->get('Cor')" class="mt-2" />
        </div>

        <!-- Câmbio -->
        <div class="mt-4">
            <x-input-label for="Câmbio" :value="__('Câmbio')" />
            <x-text-input id="Câmbio" class="block mt-1 w-full" type="text" name="Câmbio" :value="old('Câmbio')" required />
            <x-input-error :messages="$errors->get('Câmbio')" class="mt-2" />
        </div>

        <!-- Combustível -->
        <div class="mt-4">
            <x-input-label for="Combustível" :value="__('Combustível')" />
            <x-text-input id="Combustível" class="block mt-1 w-full" type="text" name="Combustível" :value="old('Combustível')" required />
            <x-input-error :messages="$errors->get('Combustível')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
