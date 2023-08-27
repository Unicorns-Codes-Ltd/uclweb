<x-guest-layout>
    <section class="mt-16">
        <div class=" py-10 md:py-16 lg:py-24" style="background-image: url('./img/about-hero.jpg');">
            <div class=" ">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center">Services</h2>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->
    <!-- ===============Service-Start=========== -->
    <section>
        <div class=" max-w-7xl mx-auto pt-10 pb-10 lg:pb-20 px-3 lg:px-0">
            {{-- <div class="solution_text">
                <p class=" text-lg font-normal text-uorange  text-center ">Our Solutions</p>
            </div> --}}
            <div class="">
                <h2 class=" text-2xl lg:text-4.5xl text-udark font-bold text-center uppercase my-4">Services</h2>
                <p class=" text-base font-normal text-center text-udark">Curabitur sed facilisis erat. Vestibulum
                    pharetra
                    eros
                    eget fringilla porttitor. <br>
                    on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
            </div>
            <div class=" mt-7">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 md:gap-4 gap-3">

                    @foreach ($services as $service)
                    @include('layouts.inc.service')
                    @endforeach
                </div>
                <div class=" flex justify-center mt-6 md:mt-12">
                    <a href="" class="load-more text-white text-base font-bold bg-udark py-2.5 px-4 rounded-md">VIEW
                        MORE
                        SERVICE</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ===============Service-End=========== -->

    <!-- ==============Team start========== -->
    <section>
        <div class=" bg-white pt-10 pb-24 lg:pb-44 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0">
                {{-- <div class="solution_text">
                    <p class=" text-lg font-normal text-uorange  text-center ">Who we Are</p>
                </div> --}}
                <div class="">
                    <h2 class=" text-2xl lg:text-4.5xl text-udark font-bold text-center uppercase  my-4">Custom IT
                        solution
                    </h2>
                    <p class=" text-base font-normal text-center text-udark">Curabitur sed facilisis erat. Vestibulum
                        pharetra
                        eros
                        eget fringilla porttitor. <br>
                        on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
                </div>
                <div class=" mt-10">
                    <div class="grid md:grid md:grid-cols-3 gap-5 justify-center mt-12">
                        <div class=" flex justify-center">
                            <div class=" flex flex-col items-center">
                                <div class="solution_box bg-uorange">
                                    <p><span class="iconify" data-icon="fa:send"></span></p>
                                </div>
                                <div class="mt-3 lg:mt-6">
                                    <h2 class="text-lg lg:text-2xl font-bold text-udark">Advertising and Marketing</h2>

                                </div>
                                <div class="mt-1 lg:mt-5">
                                    <p class=" text-lg text-udark text-center">We’ve been a strategy thought leader for
                                        nearly five decades and we bring</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center">
                            <div class=" flex flex-col items-center">
                                <div class="solution_box bg-udark">
                                    <p><span class="iconify" data-icon="ph:code-bold"></span></p>
                                </div>
                                <div class="mt-3 lg:mt-6">
                                    <h2 class="text-lg lg:text-2xl font-bold text-udark">Website Development</h2>

                                </div>
                                <div class="mt-1 lg:mt-5">
                                    <p class=" text-lg text-udark text-center">We’ve been a strategy thought leader for
                                        nearly five decades and we bring</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center">
                            <div class=" flex flex-col items-center">
                                <div class="solution_box bg-dorange">
                                    <p><span class="iconify" data-icon="ph:app-store-logo-bold"></span></p>
                                </div>
                                <div class="mt-3 lg:mt-6">
                                    <h2 class="text-lg lg:text-2xl font-bold text-udark">Website Development</h2>

                                </div>
                                <div class="mt-1 lg:mt-5">
                                    <p class=" text-lg text-udark text-center">We’ve been a strategy thought leader for
                                        nearly five decades and we bring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==============Team start========== -->
</x-guest-layout>

