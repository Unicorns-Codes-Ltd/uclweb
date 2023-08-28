<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- ==============Team start========== -->
    <section>
        <div class=" pb-24  pt-10  lg:py-44 px-3 lg:px-0 ">
            <div class="max-w-2xl mx-auto   px-3 md:px-0 slider_gap">
                <div class="bg-white px-4 py-8 rounded">
                    <div class="">
                        <h2 class="text-2xl lg:text-4.5xl text-nblue font-bold text-center uppercase">Welcome Back
                        </h2>
                        <p class="text-base font-normal text-center text-nblue mt-2">Please enter your details to
                            continue</p>
                    </div>

                    <div class=" mt-20">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mt-4 relative">
                                <span class="iconify text-2xl text-nblue mt-2 absolute top-1" data-icon="ic:round-email"></span>
                                <x-text-input id="email" class="block mt-1 pl-8 w-full text-lg text-nblue  bg-transparent" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email Address"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4 relative">
                                <span class="iconify text-2xl text-nblue mt-2 absolute top-1" data-icon="material-symbols:lock"></span>
                                <x-text-input id="password" class="block mt-1 pl-8 w-full text-lg text-nblue  bg-transparent"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" placeholder="Password"/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class=" mt-5 flex justify-between items-center">
                                <div class=" flex items-center">
                                    <div class=" mr-2">
                                        <input class="rounded border-gray-300 text-nblue shadow-sm focus:ring-uorange" type="checkbox" name="remember">
                                    </div>
                                    <div class="">
                                        <p class=" text-base text-nblue">{{ __('Remember me') }}</p>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                <div class="">
                                    <a class=" text-base text-uorange underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}</a>
                                </div>
                                @endif

                            </div>
                            <div class="mt-12">
                                <button type=" submit"
                                    class=" text-white w-full bg-uorange py-2.5 px-5 text-base font-bold tracking-wider rounded-md">SIGN
                                    IN</button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-3">
                        <p class="text-sm md:text-base  text-nblue text-center">Don’t Have an account? <a href="{{route('register')}}" class=" text-uorange">Create Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==============Team start========== -->
</x-guest-layout>
