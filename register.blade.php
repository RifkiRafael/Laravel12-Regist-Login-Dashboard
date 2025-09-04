<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/auth/register.blade.php -->


    <script src="https://cdn.tailwindcss.com"></script>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 flex items-center justify-center p-4">
        <div class="max-w-6xl w-full bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="flex flex-col lg:flex-row">

                <!-- Bagian Form -->
                <div class="lg:w-1/2 p-8 sm:p-12 lg:p-16">

                    <!-- Header -->
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h1 class="text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-2">
                            Create Account
                        </h1>
                        <p class="text-gray-500 text-lg">Join us and start your journey today</p>
                    </div>

                    <!-- Form Register -->
                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf

                        <!-- Name -->
                        <div class="group">
                            <x-input-label for="name" :value="__('Full Name')" 
                                class="block text-sm font-semibold text-gray-700 mb-2 group-focus-within:text-blue-600 transition-colors duration-200" />
                            <div class="relative">
                                <x-text-input id="name"
                                    class="w-full px-4 py-4 pl-12 bg-gray-50 border-2 border-gray-200 rounded-xl 
                                           font-medium placeholder-gray-400 text-gray-800 
                                           focus:outline-none focus:border-blue-500 focus:bg-white 
                                           focus:ring-4 focus:ring-blue-100 transition-all duration-300
                                           hover:border-gray-300"
                                    type="text" name="name" :value="old('name')" required autofocus
                                    autocomplete="name" placeholder="Enter your full name" />
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
                        </div>

                        <!-- Email -->
                        <div class="group">
                            <x-input-label for="email" :value="__('Email Address')" 
                                class="block text-sm font-semibold text-gray-700 mb-2 group-focus-within:text-blue-600 transition-colors duration-200" />
                            <div class="relative">
                                <x-text-input id="email"
                                    class="w-full px-4 py-4 pl-12 bg-gray-50 border-2 border-gray-200 rounded-xl 
                                           font-medium placeholder-gray-400 text-gray-800 
                                           focus:outline-none focus:border-blue-500 focus:bg-white 
                                           focus:ring-4 focus:ring-blue-100 transition-all duration-300
                                           hover:border-gray-300"
                                    type="email" name="email" :value="old('email')" required 
                                    autocomplete="username" placeholder="Enter your email address" />
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                        </div>

                        <!-- Password -->
                        <div class="group">
                            <x-input-label for="password" :value="__('Password')" 
                                class="block text-sm font-semibold text-gray-700 mb-2 group-focus-within:text-blue-600 transition-colors duration-200" />
                            <div class="relative">
                                <x-text-input id="password"
                                    class="w-full px-4 py-4 pl-12 bg-gray-50 border-2 border-gray-200 rounded-xl 
                                           font-medium placeholder-gray-400 text-gray-800 
                                           focus:outline-none focus:border-blue-500 focus:bg-white 
                                           focus:ring-4 focus:ring-blue-100 transition-all duration-300
                                           hover:border-gray-300"
                                    type="password" name="password" required autocomplete="new-password" 
                                    placeholder="Create a strong password" />
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="group">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" 
                                class="block text-sm font-semibold text-gray-700 mb-2 group-focus-within:text-blue-600 transition-colors duration-200" />
                            <div class="relative">
                                <x-text-input id="password_confirmation"
                                    class="w-full px-4 py-4 pl-12 bg-gray-50 border-2 border-gray-200 rounded-xl 
                                           font-medium placeholder-gray-400 text-gray-800 
                                           focus:outline-none focus:border-blue-500 focus:bg-white 
                                           focus:ring-4 focus:ring-blue-100 transition-all duration-300
                                           hover:border-gray-300"
                                    type="password" name="password_confirmation" required 
                                    autocomplete="new-password" placeholder="Confirm your password" />
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-6 rounded-xl 
                                       font-bold text-lg shadow-lg hover:shadow-xl 
                                       hover:from-blue-700 hover:to-purple-700 
                                       transform hover:scale-[1.02] transition-all duration-300 
                                       focus:outline-none focus:ring-4 focus:ring-blue-300 
                                       active:scale-[0.98]">
                                {{ __('Create Account') }}
                            </button>
                        </div>

                        <!-- Login Link -->
                        <div class="text-center pt-4">
                            <p class="text-gray-600">
                                Already have an account? 
                                <a class="font-semibold text-blue-600 hover:text-blue-800 hover:underline transition-colors duration-200"
                                   href="{{ route('login') }}">
                                    {{ __('Sign in here') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>

                <!-- Bagian Gambar Samping -->
                <div class="lg:w-1/2 bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800 relative overflow-hidden hidden lg:block">
                    <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                    <div class="relative z-10 h-full flex flex-col justify-center items-center text-white p-16">
                        <div class="text-center">
                            <h2 class="text-5xl font-bold mb-6">Welcome!</h2>
                            <p class="text-xl opacity-90 mb-8 leading-relaxed">
                                Join our amazing community and discover incredible opportunities waiting for you.
                            </p>
                            <div class="flex justify-center space-x-4">
                                <div class="w-3 h-3 bg-white rounded-full opacity-50"></div>
                                <div class="w-3 h-3 bg-white rounded-full opacity-75"></div>
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                            </div>
                        </div>
                        
                        <!-- Decorative Elements -->
                        <div class="absolute top-10 right-10 w-20 h-20 border border-white border-opacity-20 rounded-full"></div>
                        <div class="absolute bottom-10 left-10 w-16 h-16 border border-white border-opacity-20 rounded-full"></div>
                        <div class="absolute top-1/3 left-10 w-2 h-2 bg-white bg-opacity-30 rounded-full"></div>
                        <div class="absolute bottom-1/3 right-20 w-2 h-2 bg-white bg-opacity-30 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>