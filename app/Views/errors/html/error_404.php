<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - 404 Error</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-primary-50 to-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-4xl w-full">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="md:flex">
                <!-- Illustration Section -->
                <div class="md:w-2/5 bg-gradient-to-br from-primary-500 to-primary-700 p-8 md:p-12 flex flex-col justify-center items-center text-white">
                    <div class="relative w-48 h-48 mb-6">
                        <div class="absolute inset-0 bg-white/10 rounded-full animate-pulse-slow"></div>
                        <div class="absolute inset-4 bg-white/10 rounded-full animate-pulse-slow" style="animation-delay: 1s"></div>
                        <div class="absolute inset-8 bg-white/10 rounded-full animate-pulse-slow" style="animation-delay: 2s"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-6xl animate-float"></i>
                        </div>
                    </div>
                    <h2 class="text-xl font-semibold mb-2">Lost in the digital space?</h2>
                    <p class="text-primary-100 text-center">Don't worry, we'll help you find your way back.</p>
                </div>
                
                <!-- Content Section -->
                <div class="md:w-3/5 p-8 md:p-12">
                    <div class="mb-2">
                        <span class="inline-block px-3 py-1 text-xs font-semibold bg-primary-50 text-primary-700 rounded-full">ERROR 404</span>
                    </div>
                    
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Page Not Found</h1>
                    
                    <p class="text-gray-600 mb-8">
                        The page you are looking for might have been removed, had its name changed, 
                        or is temporarily unavailable.
                    </p>
                    
                    <!-- Search Box -->
                    <div class="mb-8">
                        <div class="flex rounded-lg shadow-sm">
                            <input type="text" class="flex-1 min-w-0 block w-full px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Search our website...">
                            <button class="inline-flex items-center px-4 py-3 border border-transparent text-sm font-medium rounded-r-lg text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fas fa-search mr-2"></i> Search
                            </button>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <a href="<?php echo base_url(); ?>" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-primary-600 hover:bg-primary-700 shadow-sm transition-colors duration-200">
                            <i class="fas fa-home mr-2"></i> Back to Homepage
                        </a>
                        <a href="<?php echo base_url(); ?>" class="flex items-center justify-center px-4 py-3 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 shadow-sm transition-colors duration-200">
                            <i class="fas fa-arrow-left mr-2"></i> Previous Page
                        </a>
                    </div>
                    
                    <!-- Additional Help -->
                    <div class="border-t border-gray-200 pt-6">
                        <p class="text-sm text-gray-500 mb-4">Still need help? Try these options:</p>
                        <div class="flex flex-wrap gap-3">
                            <a href="#" class="inline-flex items-center text-sm text-primary-600 hover:text-primary-800">
                                <i class="fas fa-life-ring mr-1"></i> Support Center
                            </a>
                            <a href="#" class="inline-flex items-center text-sm text-primary-600 hover:text-primary-800">
                                <i class="fas fa-envelope mr-1"></i> Contact Us
                            </a>
                            <a href="#" class="inline-flex items-center text-sm text-primary-600 hover:text-primary-800">
                                <i class="fas fa-sitemap mr-1"></i> Site Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="mt-8 text-center text-gray-500 text-sm">
            <p>&copy; BravoDent 2025 , All rights reserved..</p>
        </div>
    </div>
</body>
</html>