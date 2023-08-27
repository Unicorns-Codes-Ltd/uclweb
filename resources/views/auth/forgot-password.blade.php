<x-guest-layout>

    <section>
        <div class=" bg-lgreen pb-24  pt-10  sm:py-44 px-3 sm:px-0 ">
            <div class="max-w-7xl bg-white p-6 mx-auto rounded-md">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mt-4 relative">
                        <span class="iconify text-2xl text-nblue mt-2 absolute top-1" data-icon="ic:round-email"></span>
                        <x-text-input id="email" class="block mt-1 pl-8 w-full text-lg text-nblue  bg-transparent" type="email" name="email" :value="old('email')" required autofocus placeholder="Email Address"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit"
                                            class=" text-white uppercase bg-dgreen py-2.5 px-5 text-base font-bold tracking-wider rounded-md">{{ __('Email Password Reset Link') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
