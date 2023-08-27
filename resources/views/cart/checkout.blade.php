<x-guest-layout>

    <section class="mt-28">
        <div class="pt-10 bg-white mt-10 sm:mt-10 pb-24 sm:pb-44 px-3 sm:px-0 min-h-screen">
            <div class="max-w-xl mx-auto bg-white shadow-md p-6 rounded">
                <div class="flex justify-center">
                    <img src="{{ asset('images/bkash.svg') }}" alt="" srcset="" class="w-40">
                </div>
                <div class="mb-4">
                    <form method="POST" action="{{route('enrollments.store')}}" id="enrollmentform">
                        @csrf
                        @method('POST')

                        <!-- Email Address -->
                        <div class="mt-4 relative">
                            <span class="iconify text-2xl text-udark mt-2 absolute top-1" data-icon="mingcute:user-3-fill"></span>
                            <x-text-input id="name" class="block mt-1 pl-8 w-full text-lg text-udark  bg-white" type="text" name="name" value="{{$user->name}}" required  autocomplete="username" readonly/>
                        </div>
                        <!-- Email Address -->
                        <div class="mt-4 relative">
                            <span class="iconify text-2xl text-udark mt-2 absolute top-1" data-icon="ic:round-email"></span>
                            <x-text-input id="email" class="block mt-1 pl-8 w-full text-lg text-udark  bg-white" type="email" name="email" value="{{$user->email}}" required readonly/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Phone Number -->
                        <div class="mt-4 relative">
                            <span class="iconify text-2xl text-udark mt-2 absolute top-1" data-icon="ic:baseline-phone"></span>
                            <x-text-input id="email" class="block mt-1 pl-8 w-full text-lg text-udark  bg-white" type="text" name="bkash_number" :value="old('phone')" required autofocus  placeholder="Your bKash Number"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <p class="text-blue mt-4">Please 'send money' the amount of {{$carttotal}} BDT to this (<span class="text-uorange">01986426767</span>) bkash number and provide the TrxID bellow.</p>

                        <!-- Phone Number -->
                        <div class="mt-4 relative">
                            <span class="iconify text-2xl text-udark mt-2 absolute top-1" data-icon="ant-design:transaction-outlined"></span>
                            <x-text-input id="trxid" class="block mt-1 pl-8 w-full text-lg text-udark  bg-white" type="text" name="trxid" :value="old('trxid')" required   placeholder="TrxID"/>
                            <x-input-error :messages="$errors->get('text')" class="mt-2" />
                        </div>

                        <input type="hidden" name="total" value="{{$carttotal}}">

                        @foreach ($cartids as $id)

                        <input type="hidden" name="cartid[]" value="{{$id}}">
                        @endforeach

                        @foreach ($courseids as $id)

                        <input type="hidden" name="courseid[]" value="{{$id}}">
                        @endforeach


                        <div class="mt-12">
                            <button type="submit" class=" text-white w-full bg-uorange disabled:bg-gray-400 py-2.5 px-5 text-base font-bold tracking-wider rounded-md">Confirm & Enroll</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="script">
        <script>

        </script>
    </x-slot>
</x-guest-layout>

