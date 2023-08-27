<x-guest-layout>
    <!-- ==============Course Details start===================== -->
    <section class="bg-white pt-14 mt-20">
        <div class="pt-20 sm:pt-12 px-3 lg:px-0">


            @include('profile.partials.profile-heading')

    </section>
    <!-- ==============Course Details end===================== -->
    <!-- ===============instructor-dashboard-item start================ -->
    <section class="bg-white pt-6 lg:pt-12">
        <div class=" pb-24 lg:pb-44 px-3 lg:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="lg:grid lg:grid-cols-12 gap-10 ">

                    @include('profile.partials.profile-navigation')

                    {{-- This content will change -------------------------------------------------------------------------- --}}
                    <div class=" col-span-8 mt-3 lg:mt-0">
                        <div class="lg:p-5 border rounded-md shadow p-6">
                            <div class=" border-b border-b-slate-400 pb-3">
                                <h2 class=" text-xl text-nblue font-bold">Settings</h2>
                            </div>
                            <div class="mt-5">
                                <div class="tabs">
                                    <div class="tab_line">
                                        <div class=" ">
                                            <ul class="tabs-nav flex">
                                                <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8"
                                                        href="#profile">Profile</a>
                                                </li>
                                                <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8"
                                                        href="#password">Password</a>
                                                </li>
                                                <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8 hidden"
                                                        href="#pdelete">Delete Acount</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div><!-- END seting_tabs-nav -->
                                    <div class="tabs-content">
                                        <div id="profile" class="tab-content">
                                            @include('profile.partials.update-profile-information-form')

                                        </div>
                                        <div id="password" class="tab-content">
                                            @include('profile.partials.update-password-form')
                                        </div>
                                        <div id="pdelete" class="tab-content hidden">
                                            @include('profile.partials.delete-user-form')
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============instructor-dashboard-item end================ -->

    <x-slot name="script">
        <script>
            $(document).ready(function() {
                $("#selectedFile").on('input', function() {
                    $("form#userpp").submit();
                });
            });
        </script>
    </x-slot>
</x-guest-layout>
