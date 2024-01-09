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

                <form method="post" action="{{ url('register') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        @error('username')
                            <div class="text-red-500">{{ $username }}</div>
                        @enderror


                    </div>
                    <div class=" w-full flex text-center  text-md py-2 mt-3">

                        <label>UserName</label><span class="text-red-700 font-bold px-2"> * </span>

                    </div>

                    <div class=" w-full flex text-center  text-md ">

                        <input type="text" class="border rounded w-full p-2 outline-none"name="username" id="username"
                            placeholder="Enter your Username">

                    </div>
                    <div class="mb-4">
                        @error('username')
                            <div class="text-red-500">{{ $username }}</div>
                        @enderror


                    </div>
                    <div class=" w-full flex text-center  text-md py-2 mt-3">

                        <label>Email</label><span class="text-red-700 font-bold px-2"> * </span>

                    </div>
                    <div class=" w-full flex text-center  text-md ">
                        <input type="email" class="border rounded w-full p-2 outline-none"name="email" id="email"
                            placeholder="Enter your Email">
                    </div>
                    <div class="mb-4">
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror


                    </div>
                    <div class=" w-full flex text-center  text-md py-2 mt-3">

                        <label>Password</label><span class="text-red-700 font-bold px-2"> * </span>

                    </div>
                    <div class=" w-full flex text-center  text-md ">
                        <input type="password" class="border rounded w-full p-2 outline-none"name="password" id="password"
                            placeholder="Enter your Password">
                    </div>
                    <div class=" w-full flex text-center  text-md py-3 ">
                        <button type="submit"
                            class="button rounded bg-green-500 text-white w-28 h-9 items-center flex justify-center">
                            Signup
                        </button>
                    </div>

                </form>
                <div class=" w-full flex text-center  text-md py-3  gap-3">
                    <label>Have Account ? </label><a href="auth/login" class="text-blue-700">Login Here</a>
                </div>


            </div>

        </div>

    </div>
@endsection
