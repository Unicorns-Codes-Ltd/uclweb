<section>



    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    {{-- --------------------------------------------------------------- --}}
    <div class="relative">

        <form id="userpp" method="POST" action="{{ route('profile.ppupdate', $user->id) }}" enctype="multipart/form-data" class="d-none">
            @method('patch')
            @csrf
            <input type="file" name="pp" id="selectedFile" class="hidden"/>
        </form>

        {{-- image --}}
        <div class="image relative mt-2" id="studentpp">

            {{-- if user dont have picture --}}
            @if ($user->pp == null)
                <img class=" w-24 h-24 rounded-full" src="{{asset('img/team03.png')}}" alt="{{$user->name}}">
            @else
                <img class=" w-24 h-24 rounded-full" src="{{ asset($user->pp) }}" alt="{{$user->name}}">
            @endif

            <button class="bg-dgreen/40 w-24 h-24 uppercase text-xs absolute top-0  rounded-full hover:text-white" id="ppChangeBtn" onclick="document.getElementById('selectedFile').click();">Change</button>
        </div>
    </div>
    {{-- ---------------------------------------------------------------- --}}

    <header>
        <p class="mt-4 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="designation" :value="__('Designation')" />
            <x-text-input id="designation" name="designation" type="text" class="mt-1 block w-full" :value="old('designation', $user->designation)" required autofocus autocomplete="designation" />
            <x-input-error class="mt-2" :messages="$errors->get('designation')" />
        </div>
        <div>
            <x-input-label for="biography" :value="__('Biography')" />
            <x-textarea id="biography" name="biography" class="mt-1 block w-full" required autofocus autocomplete="biography" >{{$user->biography ? $user->biography : ''}}</x-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('biography')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}
            <button type="submit" class=" text-sm font-bold text-white bg-dgreen px-4 py-2.5 hover:bg-nblue tracking-widest rounded-md">UPDATE INFO</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
