<x-guest-layout>
    <!-- ==============Team start========== -->
    <section>
        <div class=" bg-lgreen pb-24  pt-10  sm:py-44 px-3 sm:px-0 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0 slider_gap">
                <div class="grid sm:grid-cols-2 gap-5 sm:gap-20">
                    <div class="hidden sm:block">
                        <img class=" w-full" src="./img/singin.jpg" alt="Signin cover">
                    </div>
                    <div class="pt-16 sm:pt-0">
                        <div class="">
                            <h2 class="text-2xl sm:text-4.5xl text-nblue font-bold text-center uppercase">Welcome
                            </h2>
                            <p class="text-base font-normal text-center text-nblue mt-2">Please enter your details to
                                sign up</p>
                        </div>

                        <div class=" mt-20">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="relative">
                                    <span class="iconify text-2xl text-nblue mt-2 absolute top-1" data-icon="mdi:user"></span>
                                    <x-text-input id="name" class="block mt-1 pl-8 w-full text-lg text-nblue  bg-transparent" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Full name"/>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4 relative">
                                    <span class="iconify text-2xl text-nblue mt-2 absolute top-1" data-icon="ic:round-email"></span>
                                    <x-text-input id="email" class="block mt-1 pl-8 w-full text-lg text-nblue  bg-transparent" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email Address"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4 relative">
                                    <span class="iconify text-2xl text-nblue mt-2 absolute top-1" data-icon="material-symbols:lock"></span>
                                    <x-text-input id="password" class="block mt-1 pl-8 w-full text-lg text-nblue  bg-transparent"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" placeholder="Password"/>

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4 relative">
                                    <span class="iconify text-2xl text-nblue mt-2 absolute top-1" data-icon="material-symbols:lock"></span>
                                    <x-text-input id="password_confirmation" class="block mt-1 pl-8 w-full text-lg text-nblue  bg-transparent"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>


                                <div class=" mt-5 flex justify-between items-center">
                                    <div class=" flex items-center">
                                        <div class=" mr-2">
                                            <input class="appearance-none checked:bg-dgreen focus:outline-none focus:ring-0" type="checkbox" required>
                                        </div>
                                        <div class="">
                                            <p class="text-sm md:text-base text-nblue">I have accepted to the <a href="termscondition.html" class=" text-dgreen">terms and conditions</a></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-12">
                                    <button type="submit" class=" text-white w-full bg-dgreen py-2.5 px-5 text-base font-bold tracking-wider rounded-md">SIGN
                                        UP</button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-3">
                            <p class=" text-base text-nblue text-center">Already Have an account? <a href="{{ route('login') }}" class=" text-dgreen"> Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==============Team start========== -->
</x-guest-layout>
