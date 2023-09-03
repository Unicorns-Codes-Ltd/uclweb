<x-guest-layout>

    <section class="mt-28">
        <div class=" py-10 sm:py-24  bg-no-repeat bg-cover bg-center min-h-[300px] bg-udark/80 bg-blend-multiply"
            style="background-image: url({{ asset('img/course_hero.jpg') }});">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center sm:text-left">Courses</h2>
                <p class=" text-base font-normal text-center sm:text-left mt-10 text-white">We specialize in skill development courses tailored to your career aspirations. Our offerings encompass Graphic Design, UI/UX Design, Web Development, Digital Marketing, and an invaluable Industrial Attachment program. These courses are meticulously designed to equip you with practical skills and industry insights, ensuring your readiness to excel in the dynamic world of technology and design.</p>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->


    <!-- ================Course start============== -->


    <section>
        <div class=" bg-white pt-5 sm:pt-20 pb-52">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-12">
                    <div class="p-4 sm:p-0 col-span-2">
                        <h2 class="text-xl sm:text-3xl font-bold text-udark mb-8 text-center sm:text-left">Categories</h2>
                        <div class="shadow-md p-4 rounded-md">

                            <form action="{{ route('cource') }}" method="get" id="category-filter-form">
                                @csrf
                                <div class="flex flex-col gap-2">

                                    @forelse ($categories as $category)
                                        <div class="flex items-center hover:scale-105 transition duration-100 ease-in-out">
                                            <input type="checkbox" name="category_id[]" id="category_{{ $category->id }}"
                                                class="categorychec css-checkbox checkbox_check category-filter-input"
                                                value="{{ $category->id }}"
                                                @if (in_array($category->id, $checked_categories)) @checked(true) @endif>
                                            <label for="category_{{ $category->id }}"
                                                class="css-label text-base text-udark ml-2 category-filter-input">{{ $category->name }}</label>
                                        </div>

                                    @empty
                                        <p>No category found.</p>
                                    @endforelse
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="sm:col-span-10 p-4 smp-0">
                        <div class="contents">
                            <div class="grid sm:grid-cols-3 gap-4">

                                @forelse ($courses as $item)
                                    {{-- Indivudial course --}}
                                    @include('layouts.inc.course')
                                @empty
                                    <div class="col-span-2 text-center pt-40">
                                        <h2 class=" text-lg text-udark font-bold">No course running.
                                        </h2>
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="script">
        <script>

            $('.category-filter-input').change(function(e) {
                $('form#category-filter-form').submit();
            });
        </script>
    </x-slot>

</x-guest-layout>
