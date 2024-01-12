

@extends('layouts.master');
@section('title', 'SignUp-on-Hip-Hop Music Vibes')

@section('content')

    <div class="items-center justify-center flex">

        <div class=" text-white bg-gray-900  w-1/2 flex items-center justify-center">
            <div class=" p-7 px-20 border rounded  mt-3">
                <div class=" w-full flex text-center font-semibold text-md">
                    <label for="signup" class="border-b-2 ">SIGN UP FORM </label>

                </div>

                <div class="mb-4">

                    @if (session('message'))
                        <div class="bg-green-200 text-green-500">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf


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

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-green-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
                <div class=" w-full flex text-center  text-md py-3  gap-3">

                </div>


            </div>

        </div>

    </div>
@endsection
