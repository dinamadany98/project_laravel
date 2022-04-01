@extends('layout.header')
@section('contact')
<html>
    <header>
        <style>
            .a{
               color:brown;
              font-size: larger ;
              background-color: blue
           } 
             
        </style>
         </header>
<body  >

<x-guest-layout >
    <x-jet-authentication-card >
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}"  style="color: brown;font-size: larger;" />
                <x-jet-input id="name" class="block mt-1 w-full " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style=" border-radius: 25px;" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" style="color: brown;font-size: larger;"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  style=" border-radius: 25px;"/>
            </div>
            

            

            <div class="mt-4">
                <x-jet-label for="role" value="{{ __('Role') }}" style="color: brown;font-size: larger;"/>
                <input type="radio" id="teacher" name="role" value="teacher">
                <label for="teacher">teacher</label>
                <input type="radio" id="student" name="role" value="student" style="margin-left: 40px">
                <label for="student">student</label><br> </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" style="color: brown;font-size: larger;" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style=" border-radius: 25px;"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" style="color: brown;font-size: larger;"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" style=" border-radius: 25px;"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</body>
</html>
@endsection