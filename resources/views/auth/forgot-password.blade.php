@extends('welcome')
@section('content')
    <div class=" flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-lg overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
        
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
        
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter email here"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="bg-dark">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    
    @endsection


