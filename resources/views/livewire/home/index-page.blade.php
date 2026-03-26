<div class="relative w-full overflow-hidden min-h-[calc(100vh-64px)] flex">

    <!-- Left Content Panel -->
    <div class="relative flex-1 flex flex-col justify-center px-8 sm:px-12 lg:px-20 py-16 z-10">

        <!-- Background blob -->
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-red-50/60 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-[-10%] right-[-5%] w-[400px] h-[400px] bg-gray-100/80 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative space-y-10 max-w-lg">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 border border-university-red/20 rounded-full w-fit">
                <span class="flex h-2 w-2 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-university-red opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-university-red"></span>
                </span>
                <span class="text-university-red text-xs font-bold uppercase tracking-widest">Document Repository</span>
            </div>

            <!-- Heading -->
            <div class="space-y-4">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-[1.1] tracking-tight">
                    Engineering
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-university-red to-red-700">
                        Knowledge Hub
                    </span>
                </h1>
                <p class="text-lg text-gray-500 leading-relaxed">
                    Access the School of Engineering's vast collection of e-books, research papers, thesis archives,
                    and capstone projects in one secure platform.
                </p>
            </div>

            <!-- CTA -->
            <a wire:navigate href="{{ route('home.documents') }}"
                class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-university-red text-white rounded-xl font-bold text-lg hover:bg-red-900 transition-all duration-300 shadow-lg hover:shadow-red-900/25 w-fit">
                Start Reading
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </a>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-200/80">
                <div class="space-y-1">
                    <div class="text-3xl font-black text-gray-900">500+</div>
                    <div class="text-[11px] text-gray-400 font-semibold uppercase tracking-wider">Research Papers</div>
                </div>
                <div class="space-y-1 border-x border-gray-200/60 px-6">
                    <div class="text-3xl font-black text-gray-900">1k+</div>
                    <div class="text-[11px] text-gray-400 font-semibold uppercase tracking-wider">E-Books</div>
                </div>
                <div class="space-y-1">
                    <div class="text-3xl font-black text-gray-900">200+</div>
                    <div class="text-[11px] text-gray-400 font-semibold uppercase tracking-wider">Thesis & Capstone</div>
                </div>
            </div>

        </div>
    </div>

    <!-- Right Full-Height Visual Panel — White -->
    <div class="hidden lg:flex w-[48%] relative bg-white items-center justify-center overflow-hidden border-l border-gray-100">

        <!-- Subtle background blobs -->
        <div class="absolute top-[-10%] right-[-10%] w-80 h-80 bg-red-50/80 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-80 h-80 bg-gray-100/80 rounded-full blur-3xl pointer-events-none"></div>

        <!-- Dot grid texture -->
        <div class="absolute inset-0 opacity-[0.04]"
            style="background-image: radial-gradient(circle, #8B0000 1px, transparent 1px); background-size: 24px 24px;">
        </div>

        <!-- Book wrapper -->
        <div class="relative flex flex-col items-center gap-8">

            <!-- Book -->
            <div class="relative flex items-center justify-center w-72 h-96" style="perspective: 1200px;">

                <!-- Shadow beneath book -->
                <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-48 h-6 bg-gray-300/40 rounded-full blur-xl"></div>

                <!-- Back cover -->
                <div class="absolute inset-0 bg-gray-100 rounded-r-lg rounded-l-sm shadow-inner border border-gray-200"></div>

                <!-- Page stack depth -->
                <div class="absolute inset-y-0 right-0 left-5 bg-gray-50 rounded-r-lg" style="transform: translateX(3px);"></div>
                <div class="absolute inset-y-0 right-0 left-5 bg-gray-100 rounded-r-lg" style="transform: translateX(6px);"></div>

                <!-- Spine -->
                <div class="absolute left-0 top-0 bottom-0 w-5 bg-gradient-to-r from-university-red to-red-700 rounded-l-sm z-20 flex items-center justify-center shadow-md">
                    <span class="text-white/70 text-[7px] font-bold uppercase tracking-[0.35em] rotate-180"
                        style="writing-mode: vertical-rl;">EVSU Engineering</span>
                </div>

                <!-- Pages peek right edge -->
                <div class="absolute right-0 top-2 bottom-2 w-2 bg-white rounded-r-sm shadow-inner border-l border-gray-100"></div>

                <!-- Front Cover -->
                <div class="absolute inset-y-0 right-0 left-5 bg-white rounded-r-lg shadow-2xl z-10 flex flex-col p-6 overflow-hidden border border-gray-100">
                    <div class="h-1.5 w-full bg-university-red rounded-full mb-5"></div>
                    <div class="text-[9px] font-bold uppercase tracking-widest text-gray-400 mb-0.5">Eastern Visayas State University</div>
                    <div class="text-[9px] font-semibold uppercase tracking-wider text-gray-300 mb-5">School of Engineering</div>

                    <div class="space-y-2 mb-4">
                        <div class="h-3 w-full bg-gray-800 rounded"></div>
                        <div class="h-3 w-5/6 bg-gray-800 rounded"></div>
                        <div class="h-3 w-3/5 bg-gray-700 rounded"></div>
                    </div>

                    <div class="space-y-1.5 mb-5">
                        <div class="h-2 w-full bg-gray-200 rounded"></div>
                        <div class="h-2 w-full bg-gray-200 rounded"></div>
                        <div class="h-2 w-3/4 bg-gray-200 rounded"></div>
                    </div>

                    <!-- Seal -->
                    <div class="flex justify-center my-3">
                        <div class="w-16 h-16 rounded-full border-4 border-university-red/15 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center">
                                <svg class="w-6 h-6 text-university-red/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Author -->
                    <div class="mt-auto space-y-1.5">
                        <div class="h-2 w-2/3 bg-gray-300 rounded mx-auto"></div>
                        <div class="h-2 w-1/2 bg-gray-200 rounded mx-auto"></div>
                        <div class="h-1.5 w-1/3 bg-gray-100 rounded mx-auto mt-1"></div>
                    </div>

                    <div class="h-1.5 w-full bg-university-red rounded-full mt-5"></div>
                </div>

                <!-- Flipping Pages -->
                <div class="absolute inset-y-2 left-5 right-4 z-30" style="transform-style: preserve-3d;">

                    <!-- Page 1 -->
                    <div class="absolute inset-0 bg-white rounded-r-lg border border-gray-100 flex flex-col p-5 gap-3"
                        style="animation: pageFlip 5s ease-in-out infinite; transform-origin: left center; transform-style: preserve-3d; backface-visibility: hidden; box-shadow: 2px 0 12px rgba(0,0,0,0.06);">
                        <div class="h-2 w-3/4 bg-gray-700 rounded"></div>
                        <div class="space-y-1.5 mt-1">
                            <div class="h-1.5 w-full bg-gray-200 rounded"></div>
                            <div class="h-1.5 w-full bg-gray-200 rounded"></div>
                            <div class="h-1.5 w-5/6 bg-gray-200 rounded"></div>
                            <div class="h-1.5 w-full bg-gray-200 rounded"></div>
                            <div class="h-1.5 w-4/6 bg-gray-200 rounded"></div>
                        </div>
                        <div class="h-px w-full bg-gray-100 my-1"></div>
                        <div class="space-y-1.5">
                            <div class="h-1.5 w-full bg-gray-100 rounded"></div>
                            <div class="h-1.5 w-full bg-gray-100 rounded"></div>
                            <div class="h-1.5 w-3/4 bg-gray-100 rounded"></div>
                        </div>
                        <div class="mt-auto flex justify-between items-center">
                            <div class="h-1.5 w-8 bg-university-red/20 rounded"></div>
                            <div class="text-[8px] text-gray-300 font-medium">1</div>
                        </div>
                    </div>

                    <!-- Page 2 -->
                    <div class="absolute inset-0 bg-white rounded-r-lg border border-gray-100 flex flex-col p-5 gap-3"
                        style="animation: pageFlip 5s ease-in-out 1.6s infinite; transform-origin: left center; transform-style: preserve-3d; backface-visibility: hidden; box-shadow: 2px 0 12px rgba(0,0,0,0.06);">
                        <div class="h-2 w-1/2 bg-gray-600 rounded"></div>
                        <div class="space-y-1.5 mt-1">
                            <div class="h-1.5 w-full bg-gray-200 rounded"></div>
                            <div class="h-1.5 w-5/6 bg-gray-200 rounded"></div>
                            <div class="h-1.5 w-full bg-gray-200 rounded"></div>
                        </div>
                        <div class="h-20 w-full bg-gray-50 rounded-lg border border-gray-100 flex items-center justify-center">
                            <div class="text-center space-y-1">
                                <div class="h-1 w-16 bg-gray-200 rounded mx-auto"></div>
                                <div class="h-1 w-12 bg-gray-100 rounded mx-auto"></div>
                                <div class="text-[8px] text-gray-300 mt-1">Figure 1.1</div>
                            </div>
                        </div>
                        <div class="space-y-1.5">
                            <div class="h-1.5 w-full bg-gray-100 rounded"></div>
                            <div class="h-1.5 w-4/5 bg-gray-100 rounded"></div>
                        </div>
                        <div class="mt-auto flex justify-between items-center">
                            <div class="h-1.5 w-8 bg-university-red/20 rounded"></div>
                            <div class="text-[8px] text-gray-300 font-medium">2</div>
                        </div>
                    </div>

                    <!-- Page 3 -->
                    <div class="absolute inset-0 bg-white rounded-r-lg border border-gray-100 flex flex-col p-5 gap-3"
                        style="animation: pageFlip 5s ease-in-out 3.2s infinite; transform-origin: left center; transform-style: preserve-3d; backface-visibility: hidden; box-shadow: 2px 0 12px rgba(0,0,0,0.06);">
                        <div class="h-2 w-2/3 bg-gray-600 rounded"></div>
                        <div class="space-y-1.5 mt-1">
                            <div class="h-1.5 w-full bg-gray-100 rounded"></div>
                            <div class="h-1.5 w-full bg-gray-100 rounded"></div>
                            <div class="h-1.5 w-5/6 bg-gray-100 rounded"></div>
                        </div>
                        <div class="space-y-1.5 mt-1">
                            <div class="flex gap-2 items-center">
                                <div class="w-1.5 h-1.5 rounded-full bg-university-red/30 shrink-0"></div>
                                <div class="h-1.5 w-full bg-gray-100 rounded"></div>
                            </div>
                            <div class="flex gap-2 items-center">
                                <div class="w-1.5 h-1.5 rounded-full bg-university-red/30 shrink-0"></div>
                                <div class="h-1.5 w-5/6 bg-gray-100 rounded"></div>
                            </div>
                            <div class="flex gap-2 items-center">
                                <div class="w-1.5 h-1.5 rounded-full bg-university-red/30 shrink-0"></div>
                                <div class="h-1.5 w-4/6 bg-gray-100 rounded"></div>
                            </div>
                        </div>
                        <div class="mt-auto flex justify-between items-center">
                            <div class="h-1.5 w-8 bg-university-red/20 rounded"></div>
                            <div class="text-[8px] text-gray-300 font-medium">3</div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Label -->
            <div class="text-center space-y-1">
                <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Thesis & Research Archive</p>
                <p class="text-gray-300 text-[11px]">School of Engineering · EVSU</p>
            </div>

        </div>

    </div>

</div>

@push('styles')
<style>
    @keyframes pageFlip {
        0%   { transform: rotateY(0deg);    opacity: 1;   box-shadow:  2px 0 12px rgba(0,0,0,0.06); }
        25%  { transform: rotateY(-70deg);  opacity: 0.6; box-shadow: -6px 0 24px rgba(0,0,0,0.10); }
        45%  { transform: rotateY(-120deg); opacity: 0;   }
        46%  { transform: rotateY(0deg);    opacity: 0;   }
        80%  { transform: rotateY(0deg);    opacity: 0;   }
        95%  { transform: rotateY(0deg);    opacity: 1;   }
        100% { transform: rotateY(0deg);    opacity: 1;   box-shadow:  2px 0 12px rgba(0,0,0,0.06); }
    }
</style>
@endpush    