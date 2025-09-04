<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/auth/login.blade.php -->

    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS untuk perbaikan -->
    <style>
        /* Smooth animations */
        * {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Form input focus styles */
        .form-input:focus {
            transform: translateY(-1px);
        }

        /* Button hover animation */
        .btn-primary:hover {
            transform: translateY(-2px);
        }

        /* Gradient text fix */
        .gradient-text {
            background: linear-gradient(135deg, #1f2937 0%, #6b7280 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Floating animation for decorative elements */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(180deg); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .floating:nth-child(2) {
            animation-delay: 2s;
        }

        .floating:nth-child(3) {
            animation-delay: 4s;
        }

        /* Enhanced shadows */
        .shadow-custom {
            box-shadow: 
                0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04),
                0 0 0 1px rgba(255, 255, 255, 0.05);
        }

        /* Glass morphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Input field enhancements */
        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            border-color: #3b82f6;
        }

        .input-field:hover {
            border-color: #9ca3af;
        }

        /* Responsive improvements */
        @media (max-width: 1024px) {
            .main-container {
                min-height: 600px;
            }
        }
        
        @media (max-width: 768px) {
            .main-container {
                min-height: auto;
            }
        }
        
        /* Prevent container collapse */
        .form-section {
            min-height: 500px;
        }
        
        .side-section {
            min-height: 300px;
        }
        
        @media (min-width: 1024px) {
            .form-section, .side-section {
                min-height: 700px;
            }
        }
    </style>

    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 flex items-center justify-center p-4">
        <div class="max-w-6xl w-full glass rounded-3xl shadow-custom overflow-hidden main-container">
            <div class="flex flex-col lg:flex-row min-h-[600px]">

                <!-- Bagian Gambar Samping -->
                <div class="lg:w-1/2 bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800 relative overflow-hidden side-panel">
                    <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                    <div class="relative z-10 h-full flex flex-col justify-center items-center text-white p-8 lg:p-16">
                        <div class="text-center">
                            <h2 class="text-3xl lg:text-5xl font-bold mb-6">Welcome Back!</h2>
                            <p class="text-lg lg:text-xl opacity-90 mb-8 leading-relaxed max-w-md">
                                Sign in to your account and continue your amazing journey with us.
                            </p>
                            <div class="flex justify-center space-x-4">
                                <div class="w-3 h-3 bg-white rounded-full opacity-50"></div>
                                <div class="w-3 h-3 bg-white rounded-full opacity-75"></div>
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                            </div>
                        </div>
                        
                        <!-- Decorative Elements dengan animasi -->
                        <div class="absolute top-10 left-10 w-20 h-20 border border-white border-opacity-20 rounded-full floating"></div>
                        <div class="absolute bottom-10 right-10 w-16 h-16 border border-white border-opacity-20 rounded-full floating"></div>
                        <div class="absolute top-1/3 right-10 w-2 h-2 bg-white bg-opacity-30 rounded-full floating"></div>
                        <div class="absolute bottom-1/3 left-20 w-2 h-2 bg-white bg-opacity-30 rounded-full floating"></div>
                    </div>
                </div>

                <!-- Bagian Form -->
                <div class="lg:w-1/2 p-6 sm:p-8 lg:p-16 flex flex-col justify-center">

                    <!-- Header -->
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                        </div>
                        <h1 class="text-3xl lg:text-4xl font-bold gradient-text mb-2">
                            Sign In
                        </h1>
                        <p class="text-gray-500 text-base lg:text-lg">Access your account to continue</p>
                    </div>

                    <!-- Form Login -->
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <!-- Email -->
                        <div class="group">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2 transition-colors duration-200 group-focus-within:text-blue-600">
                                Email Address
                            </label>
                            <div class="relative">
                                <input id="email"
                                    class="w-full px-4 py-4 pl-12 bg-gray-50 border-2 border-gray-200 rounded-xl 
                                           font-medium placeholder-gray-400 text-gray-800 input-field form-input
                                           focus:outline-none focus:border-blue-500 focus:bg-white 
                                           transition-all duration-300"
                                    type="email" name="email" value="{{ old('email') }}" required
                                    placeholder="Enter your email address" />
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 transition-colors duration-200 group-focus-within:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            @error('email')
                                <p class="mt-2 text-red-500 text-sm flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="group">
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2 transition-colors duration-200 group-focus-within:text-blue-600">
                                Password
                            </label>
                            <div class="relative">
                                <input id="password"
                                    class="w-full px-4 py-4 pl-12 bg-gray-50 border-2 border-gray-200 rounded-xl 
                                           font-medium placeholder-gray-400 text-gray-800 input-field form-input
                                           focus:outline-none focus:border-blue-500 focus:bg-white 
                                           transition-all duration-300"
                                    type="password" name="password" required
                                    placeholder="Enter your password" />
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 transition-colors duration-200 group-focus-within:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            @error('password')
                                <p class="mt-2 text-red-500 text-sm flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 transition-colors duration-200">
                                <span class="ml-2 text-sm text-gray-600 select-none">Remember me</span>
                            </label>
                            
                            <a class="text-sm font-semibold text-blue-600 hover:text-blue-800 hover:underline transition-all duration-200"
                               href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-6 rounded-xl 
                                       font-bold text-lg shadow-lg hover:shadow-xl btn-primary
                                       hover:from-blue-700 hover:to-purple-700 
                                       transform transition-all duration-300 
                                       focus:outline-none focus:ring-4 focus:ring-blue-300 
                                       active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed">
                                Sign In
                            </button>
                        </div>

                        <!-- Divider -->
                        <div class="relative py-4">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-4 bg-white text-gray-500">or</span>
                            </div>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="text-gray-600">
                                Don't have an account? 
                                <a class="font-semibold text-blue-600 hover:text-blue-800 hover:underline transition-all duration-200"
                                   href="{{ route('register') }}">
                                    Create one here
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>