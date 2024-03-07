<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <img src="bg.jpg" class="fixed inset-0 w-full h-full object-cover" alt="">

    <div class="flex h-screen w-full items-center justify-center">
        <div class="rounded-xl bg-violet-200 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
        <img class="mb-3" src="logo.png" width="75" alt="" srcset="" />
            <div class="text-white">
    <div class="mb-4 text-sm text-gray-600">
        {{ __(' let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->


    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
    </div>
        </div>
    </div>
</x-guest-layout>
