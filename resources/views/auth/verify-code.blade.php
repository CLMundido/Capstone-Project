<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('For security, please enter your ID Number and the 6-digit code sent to your email.') }}
    </div>

    <form method="POST" action="{{ route('verify.store') }}">
        @csrf

        <div>
            <x-input-label for="id_number" :value="__('ID Number')" />
            <x-text-input id="id_number" class="block mt-1 w-full" type="text" name="id_number" :value="old('id_number')" required autofocus />
            <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="code" :value="__('Authentication Code')" />
            <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" required />
            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Verify and Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>