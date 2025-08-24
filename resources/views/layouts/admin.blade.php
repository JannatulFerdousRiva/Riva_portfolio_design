<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Portfolio Admin</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @yield('styles')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 py-4 flex flex-col">
            <div class="px-4 py-2 border-b border-gray-700">
                <h1 class="text-xl font-bold">Portfolio Admin</h1>
            </div>
            
            <nav class="flex-1 px-2 py-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-gray-900' : 'hover:bg-gray-700' }}">
                    <i class="fas fa-home mr-3"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="{{ route('projects.index') }}" class="flex items-center px-4 py-2 mt-2 rounded-lg {{ request()->routeIs('projects.*') ? 'bg-gray-900' : 'hover:bg-gray-700' }}">
                    <i class="fas fa-project-diagram mr-3"></i>
                    <span>Projects</span>
                </a>
                
                <a href="{{ route('experiences.index') }}" class="flex items-center px-4 py-2 mt-2 rounded-lg {{ request()->routeIs('experiences.*') ? 'bg-gray-900' : 'hover:bg-gray-700' }}">
                    <i class="fas fa-briefcase mr-3"></i>
                    <span>Experience</span>
                </a>
                
                <a href="{{ route('educations.index') }}" class="flex items-center px-4 py-2 mt-2 rounded-lg {{ request()->routeIs('educations.*') ? 'bg-gray-900' : 'hover:bg-gray-700' }}">
                    <i class="fas fa-graduation-cap mr-3"></i>
                    <span>Education</span>
                </a>
                
                <a href="{{ route('skills.index') }}" class="flex items-center px-4 py-2 mt-2 rounded-lg {{ request()->routeIs('skills.*') ? 'bg-gray-900' : 'hover:bg-gray-700' }}">
                    <i class="fas fa-code mr-3"></i>
                    <span>Skills</span>
                </a>
                
                <a href="{{ route('personal-details.edit') }}" class="flex items-center px-4 py-2 mt-2 rounded-lg {{ request()->routeIs('personal-details.*') ? 'bg-gray-900' : 'hover:bg-gray-700' }}">
                    <i class="fas fa-user mr-3"></i>
                    <span>Personal Details</span>
                </a>
            </nav>
            
            <div class="px-4 py-2 border-t border-gray-700">
                <div class="flex items-center">
                    <img src="{{ auth()->user()->avatar ?? asset('images/default-avatar.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
                    <div class="ml-3">
                        <p class="text-sm font-medium">{{ auth()->user()->name }}</p>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-xs text-gray-400 hover:text-white">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-800">@yield('header', 'Dashboard')</h2>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('home') }}" target="_blank" class="text-gray-600 hover:text-gray-900">
                            <i class="fas fa-external-link-alt mr-1"></i>
                            View Site
                        </a>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
</body>
</html>
