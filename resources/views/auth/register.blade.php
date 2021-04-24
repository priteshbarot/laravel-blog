@extends('layouts.app')
    @section('title','Laravel Blog')
    @section('content')
        <div class="flex justify-center">
            <div class="w-4/12 bg-white p-6 rounded-lg">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        @error('name')
                            <div class="text-red-500 text-sm mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    </div>
                  
                    <div class="mb-4">
                        @error('username')
                            <div class="text-red-500 text-sm mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    </div>
                  
                    <div class="mb-4">
                        @error('email')
                            <div class="text-red-500 text-sm mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    </div>
                  
                    <div class="mb-4">
                        @error('password')
                            <div class="text-red-500 text-sm mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Choose a password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                    </div>
                  
                    <div class="mb-4">
                        @error('password_confirmation')
                            <div class="text-red-500 text-sm mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                        font-medium w-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection