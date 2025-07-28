@extends('layouts.app')

@section('content')

    <body class="bg-white text-gray-800">

        <!-- Section 1: Hero and Navigation -->
        <div class="relative overflow-hidden">
            <div
                class="absolute inset-0 bg-gradient-to-br from-yellow-100 via-pink-300 min-h-screen to-purple-400 opacity-60">
            </div>
            <header class="relative z-10">
                <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            {{-- <svg class="h-8 w-auto" viewBox="0 0 104 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.043 31.059V0H0v31.059h4.043zM28.47 18.235c0 7.765 5.353 12.824 13.059 12.824 7.706 0 13.059-5.059 13.059-12.824 0-7.765-5.353-12.824-13.059-12.824-7.706 0-13.059 5.059-13.059 12.824zm22.076 0c0 5.529-3.529 9.012-9.017 9.012-5.488 0-9.017-3.483-9.017-9.012s3.529-9.012 9.017-9.012c5.488 0 9.017 3.483 9.017 9.012zM70.941 21.035c0 6.094 3.765 9.012 8.306 9.012 3.294 0 5.647-.988 6.706-2.118l-2.353-2.47c-.824.823-2.118 1.412-4.235 1.412-2.941 0-4.353-1.647-4.353-4.824h11.294v-3.412c0-5.529-3.412-9.6-8.824-9.6-5.411 0-8.541 4.07-8.541 9.988zm11.177-5.176h-6.942c.236-2.941 1.883-4.47 4.118-4.47 2.353 0 3.647 1.764 2.824 4.47zM103.058 31.059V0h-4.042v26.118L86.588 0h-4.47L94.588 15.53 82.164 31.06h4.6l8.706-11.882L103.058 31.06z"
                                fill="#000"></path>
                        </svg> --}}
                            <span class="text-2xl font-bold ml-2">lua</span>
                        </div>
                        {{-- <a href="#"
                        class="hidden md:flex items-center bg-gray-200 text-gray-800 text-sm font-semibold px-3 py-1.5 rounded-lg hover:bg-gray-300">
                        We are open source
                        <svg class="h-4 w-4 ml-2" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 12.25L3.75 14.25l.813-4.75L.5 6.25l4.875-.75L7.5 1l2.125 4.5L14.5 5.5l-3.062 3.75.812 4.75z">
                            </path>
                        </svg>
                        <span class="ml-1">Stars</span>
                        <span class="bg-white text-gray-800 text-xs font-bold ml-2 px-2 py-0.5 rounded-full">3k+</span>
                    </a> --}}
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="#" class="text-gray-800 font-semibold hover:text-black">Sign in</a>
                        <a href="#"
                            class="bg-gray-800 text-white font-semibold px-4 py-2 rounded-lg hover:bg-black">Sign up</a>
                    </div>
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </nav>
                <div id="mobile-menu" class="hidden md:hidden relative z-20 bg-white m-4 rounded-lg shadow-lg">
                    <a href="#" class="block px-4 py-2 text-gray-800 font-semibold hover:bg-gray-100">Sign in</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 font-semibold hover:bg-gray-100">Sign up</a>
                </div>
            </header>

            <main class="relative z-0 container mx-auto px-6 pt-16 min-h-screen  pb-24 text-center">
                <h1 class=" mt-24 md:text-6xl font-bold tracking-tighter text-6xl text-gray-900">URL Shortening Built for
                    Developers</h1>
                <p class="mt-4 max-w-xl mx-auto text-2xl text-gray-700">
                    Create, track, and manage short links programmatically. Get a powerful API, detailed analytics, and
                    custom domains to scale your link infrastructure.
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="{{ route('shortner') }}" class="bg-gray-900 text-white font-semibold px-6 py-3 rounded-lg hover:bg-black">Get
                        started</a>
                    <a href="#"
                        class="bg-white text-gray-900 font-semibold px-6 py-3 rounded-lg border border-gray-300 hover:bg-gray-100">Get
                        a demo</a>
                </div>
            </main>
        </div>

        <!-- Section 2: Advanced Analytics -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">Advanced analytics to help you sell more.</h2>
                <div class="mt-12 max-w-4xl mx-auto bg-gray-800 text-white p-4 sm:p-8 rounded-2xl shadow-2xl">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">Analytics</h3>
                        <div class="text-sm text-gray-400">10/10/2024 - 10/30/2024</div>
                    </div>
                    <div>
                        <canvas id="analyticsChart"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Features -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center">
                    <p class="text-indigo-600 font-semibold">Features</p>
                    <h2 class="mt-2 text-4xl md:text-5xl font-bold text-gray-900">Everything you need to manage your
                        links</h2>
                    <p class="mt-4 max-w-3xl mx-auto text-lg text-gray-600">
                        Create, track, and manage short links programmatically. Get a powerful API, detailed analytics, and
                        custom domains to scale your link infrastructure.
                    </p>
                </div>
                <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="bg-gray-800 inline-block p-3 rounded-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold">Custom Short Links</h3>
                        <p class="mt-2 text-gray-600">Create personalized short URLs to enhance your brand identity and make
                            your links memorable.</p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="bg-gray-800 inline-block p-3 rounded-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold">Real-Time Analytics</h3>
                        <p class="mt-2 text-gray-600">Track clicks, referrers, and geographic data in real-time to measure
                            your links' performance.</p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="bg-gray-800 inline-block p-3 rounded-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold">Secure Redirects</h3>
                        <p class="mt-2 text-gray-600">Ensure safe browsing with SSL encryption on all your shortened links.
                        </p>
                    </div>
                    <!-- Feature 4 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="bg-gray-800 inline-block p-3 rounded-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold">API Access</h3>
                        <p class="mt-2 text-gray-600">Integrate lua.sh into your applications seamlessly using our powerful
                            API.</p>
                    </div>
                    <!-- Feature 5 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="bg-gray-800 inline-block p-3 rounded-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v1m6.364 1.636l-.707.707M20 12h-1M4 12H3m15.364 6.364l-.707-.707M12 20v-1m-6.364-1.636l.707-.707M6 12a6 6 0 1112 0 6 6 0 01-12 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold">QR Code Generation</h3>
                        <p class="mt-2 text-gray-600">Instantly generate QR codes for your short URLs to share them offline
                            with ease.</p>
                    </div>
                    <!-- Feature 6 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="bg-gray-800 inline-block p-3 rounded-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7"></path>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold">Link Management Dashboard</h3>
                        <p class="mt-2 text-gray-600">Manage, edit, and organize all your short links in one intuitive
                            dashboard.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: CTA and Footer -->
        <div class="relative mt-20">
            <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white"></div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                    <div class="absolute inset-0">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-400 via-pink-300 to-yellow-200 mix-blend-multiply">
                        </div>
                    </div>
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8 text-center">
                        <p class="text-sm font-semibold text-white uppercase tracking-wider">Get Started</p>
                        <h2 class="mt-2 text-4xl font-bold text-white sm:text-5xl">Ready to Supercharge Your Links?
                        </h2>
                        <p class="mt-4 max-w-lg mx-auto text-xl text-purple-100">
                            Transform your links into powerful marketing tools. Join thousands of businesses using lua.sh
                            for secure and branded short links.
                        </p>
                        <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                            <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid">
                                <a href="#"
                                    class="bg-gray-900 text-white font-semibold px-8 py-3 rounded-lg hover:bg-black flex items-center justify-center">
                                    Get started for free
                                </a>
                                <p class="mt-2 text-sm text-purple-200">No credit card required</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-white pt-16 pb-12">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                    <div class="col-span-2 md:col-span-1">
                        <div class="flex items-center">
                            {{-- <svg class="h-8 w-auto" viewBox="0 0 104 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.043 31.059V0H0v31.059h4.043zM28.47 18.235c0 7.765 5.353 12.824 13.059 12.824 7.706 0 13.059-5.059 13.059-12.824 0-7.765-5.353-12.824-13.059-12.824-7.706 0-13.059 5.059-13.059 12.824zm22.076 0c0 5.529-3.529 9.012-9.017 9.012-5.488 0-9.017-3.483-9.017-9.012s3.529-9.012 9.017-9.012c5.488 0 9.017 3.483 9.017 9.012zM70.941 21.035c0 6.094 3.765 9.012 8.306 9.012 3.294 0 5.647-.988 6.706-2.118l-2.353-2.47c-.824.823-2.118 1.412-4.235 1.412-2.941 0-4.353-1.647-4.353-4.824h11.294v-3.412c0-5.529-3.412-9.6-8.824-9.6-5.411 0-8.541 4.07-8.541 9.988zm11.177-5.176h-6.942c.236-2.941 1.883-4.47 4.118-4.47 2.353 0 3.647 1.764 2.824 4.47zM103.058 31.059V0h-4.042v26.118L86.588 0h-4.47L94.588 15.53 82.164 31.06h4.6l8.706-11.882L103.058 31.06z"
                                fill="#000"></path>
                        </svg> --}}
                            <span class="text-2xl font-bold ml-2">lua</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Product</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Pricing</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Company</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Support</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Developer Docs</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Legal</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Terms of service</a>
                            </li>
                            <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-12 border-t border-gray-200 pt-8 flex flex-col sm:flex-row justify-between items-center">
                    <p class="text-base text-gray-500">&copy; 2024 lua.sh</p>
                    <div class="flex space-x-6 mt-4 sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-600">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.168 6.839 9.49.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.003 10.003 0 0022 12c0-5.523-4.477-10-10-10z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-600">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-600">
                            <span class="sr-only">X</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Analytics Chart
            const ctx = document.getElementById('analyticsChart').getContext('2d');
            const analyticsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['21 Oct', '22 Oct', '23 Oct', '24 Oct', '25 Oct', '26 Oct'],
                    datasets: [{
                        label: 'Events',
                        data: [15, 13, 11, 9, 7, 5],
                        backgroundColor: 'rgba(129, 140, 248, 0.2)',
                        borderColor: 'rgba(129, 140, 248, 1)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(129, 140, 248, 1)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgba(129, 140, 248, 1)',
                        tension: 0.4,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: 'rgba(255, 255, 255, 0.7)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: 'rgba(255, 255, 255, 0.7)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#fff',
                            titleColor: '#333',
                            bodyColor: '#666',
                            borderColor: '#ddd',
                            borderWidth: 1,
                            callbacks: {
                                label: function(context) {
                                    return `${context.raw} events`;
                                }
                            }
                        }
                    }
                }
            });
        </script>
    </body>
@endsection
