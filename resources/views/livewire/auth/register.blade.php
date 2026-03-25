<x-layouts.auth>
    <div class="w-full max-w-2xl mx-auto px-4">
        <div class="bg-white shadow-2xl rounded-xl overflow-hidden">
            <x-auth.header />

            <div class="form-content px-5 py-6 sm:px-10 sm:py-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- First Name & Last Name -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                placeholder="Juan" class="{{ $errors->has('first_name') ? 'error' : '' }}"
                                required autofocus>
                            @error('first_name')
                                <div class="error-message">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                placeholder="Dela Cruz" class="{{ $errors->has('last_name') ? 'error' : '' }}"
                                required>
                            @error('last_name')
                                <div class="error-message">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Student ID -->
                    <div class="form-group mb-4">
                        <label for="student_id">Student ID</label>
                        <input type="text" id="student_id" name="student_id" value="{{ old('student_id') }}"
                            placeholder="e.g. 2021-00001"
                            class="{{ $errors->has('student_id') ? 'error' : '' }}" required>
                        @error('student_id')
                            <div class="error-message">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Course -->
                    <div class="form-group mb-4">
                        <label for="course">Course / Program</label>
                        <div class="mb-1 inline-flex items-center gap-1.5 rounded-full bg-university-red/10 px-3 py-0.5">
                            <svg class="w-3.5 h-3.5 text-university-red" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l6.16-3.422A12.083 12.083 0 0121 21H3a12.083 12.083 0 012.84-10.422L12 14z" />
                            </svg>
                            <span class="text-xs font-semibold text-university-red uppercase tracking-wide">School of
                                Engineering</span>
                        </div>
                        <div class="relative">
                            <select id="course" name="course"
                                class="w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-2.5 pr-10 text-sm text-gray-800 shadow-sm transition-all duration-200 hover:border-university-red/50 focus:border-university-red focus:outline-none focus:ring-2 focus:ring-university-red/20 {{ $errors->has('course') ? 'border-red-500 ring-2 ring-red-200' : '' }}"
                                required>
                                <option value="" disabled {{ old('course') ? '' : 'selected' }}>— Select your program —</option>
                                <option value="bsit" {{ old('course') == 'bsit' ? 'selected' : '' }}>BS Information Technology</option>
                                <option value="bscs" {{ old('course') == 'bscs' ? 'selected' : '' }}>BS Computer Science</option>
                                <option value="bsce" {{ old('course') == 'bsce' ? 'selected' : '' }}>BS Civil Engineering</option>
                                <option value="bsee" {{ old('course') == 'bsee' ? 'selected' : '' }}>BS Electrical Engineering</option>
                                <option value="bsece" {{ old('course') == 'bsece' ? 'selected' : '' }}>BS Electronics Engineering</option>
                                <option value="bsme" {{ old('course') == 'bsme' ? 'selected' : '' }}>BS Mechanical Engineering</option>
                                <option value="bsie" {{ old('course') == 'bsie' ? 'selected' : '' }}>BS Industrial Engineering</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3">
                                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-university-red/10">
                                    <svg class="w-3.5 h-3.5 text-university-red" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        @error('course')
                            <div class="error-message">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-4">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="your.name@evsu.edu.ph"
                            class="{{ $errors->has('email') ? 'error' : '' }}" required>
                        @error('email')
                            <div class="error-message">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password & Confirm -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <!-- Password -->
                        <div class="form-group" x-data="{ showPassword: false }">
                            <label for="password">Password</label>
                            <div class="password-input-wrapper">
                                <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                                    placeholder="••••••••"
                                    class="{{ $errors->has('password') ? 'error' : '' }}" required>
                                <button type="button" @click="showPassword = !showPassword" class="password-toggle-btn">
                                    <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg x-show="showPassword" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" x-cloak>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <div class="error-message">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group" x-data="{ showConfirm: false }">
                            <label for="password_confirmation">Confirm Password</label>
                            <div class="password-input-wrapper">
                                <input :type="showConfirm ? 'text' : 'password'" id="password_confirmation"
                                    name="password_confirmation" placeholder="••••••••"
                                    class="{{ $errors->has('password_confirmation') ? 'error' : '' }}" required>
                                <button type="button" @click="showConfirm = !showConfirm" class="password-toggle-btn">
                                    <svg x-show="!showConfirm" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg x-show="showConfirm" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" x-cloak>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                            @error('password_confirmation')
                                <div class="error-message">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="login-btn">
                        Create Account
                    </button>

                    <!-- Divider -->
                    <div class="relative my-3">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-xs text-gray-400">
                            <span class="bg-white px-3">Already have an account?</span>
                        </div>
                    </div>

                    <!-- Link to Login -->
                    <a href="{{ route('login') }}"
                        class="flex w-full items-center justify-center gap-2 rounded-lg border border-university-red/30 bg-university-red/5 px-4 py-2 text-sm font-semibold text-university-red transition-all duration-200 hover:bg-university-red/10 hover:border-university-red/50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Sign in to your account
                    </a>

                </form>
            </div>
        </div>

        <x-auth.footer />
    </div>
</x-layouts.auth>