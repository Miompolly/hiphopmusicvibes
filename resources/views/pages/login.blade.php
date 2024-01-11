@extends('layouts.master');
@section('title', 'Login-on-Hip-Hop Music Vibes')

@section('content')

    <div class="items-center justify-center flex">

        <div class=" text-white bg-gray-900  w-1/2 flex items-center justify-center">
            <div class=" p-7 px-20 border rounded  mt-3">
                <div class=" w-full flex text-center font-semibold text-md">
                    <label for="signup" class="border-b-2 ">SIGN IN FORM </label>

                </div>

                <div class="mb-4">
                    @if (session('message'))
                        <div class="bg-green-200 text-green-500">
                            {{ session('message') }}
                        </div>
                    @elseif (session('error'))
                        <div class="bg-red-200 text-red-500">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <form method="post" action="{{ url('loginUser') }}" enctype="multipart/form-data">
                    @csrf



                    <div class=" w-full flex text-center  text-md py-2 mt-3">

                        <label>Email</label><span class="text-red-700 font-bold px-2"> * </span>

                    </div>
                    <div class=" w-full flex text-center  text-md ">
                        <input type="email" class="border rounded  text-black w-full p-2 outline-none"name="email"
                            id="email" placeholder="Enter your Email">
                    </div>
                    <div class="mb-4">
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror


                    </div>
                    <div class=" w-full flex text-center  text-md py-2 mt-3">

                        <label>Password</label><span class="text-red-700 font-bold px-2 "> * </span>

                    </div>
                    <div class=" w-full flex text-center  text-md ">
                        <input type="password" class="border text-black rounded w-full p-2 outline-none"name="password"
                            id="password" placeholder="Enter your Password">
                    </div>
                    <div class="mb-4">
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror


                    </div>

                    <div class=" w-full flex text-center  text-md py-3 ">
                        <button type="submit"
                            class="button rounded bg-green-500 text-white w-28 h-9 items-center flex justify-center">
                            Login
                        </button>
                    </div>

                </form>
                <div class=" w-full flex text-center  text-md py-3  gap-3">
                    <label>Have Not Account ? </label><a href="/signup" class="text-blue-700">SignUp Here</a>
                </div>


            </div>

        </div>

    </div>
@endsection