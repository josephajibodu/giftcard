@extends('layouts.guest')

@section('title', 'Buy and Verify giftcards online instantly')
@section('content')

    <section class="bg-[#F1F4FC] py-24 md:py-32">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-lg">
            <p class="text-4xl text-center font-bold mb-4" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-mirror="true" data-aos-delay="200">Purchase <span class="text-indigo-600">or Validate</span></p>
            <p class="text-center text-gray-700 mb-12" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-mirror="true" data-aos-delay="400">Select a gift card to purchase or validate. If you can't find your preferred card, kindly select the "other cards" option.</p>

            <!-- Giftcard -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4">

                @foreach($giftcards as $giftcard)
                    <div class="bg-[#F1F4FC] rounded-lg shadow-lg pb-6 overflow-hidden" data-aos="zoom-in-up" data-aos-duration="600" data-aos-mirror="true" data-aos-delay="200">
                        <div class="h-48 bg-gray-200 rounded-t-lg mb-4 relative">
                            <div class="bg-black inset-0 absolute"></div>
                            <img src="{{ asset('/images/giftcards/'.$giftcard['image']) }}" class="object-cover grayscale h-full w-full transition duration-500 hover:grayscale-0 hover:scale-105" alt="giftcards" />
                        </div>
                        <div class="px-4">
                            <p class="text-lg lg:text-xl font-bold mb-8" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-mirror="true" data-aos-delay="200">{{ $giftcard['name'] }} <span class="text-indigo-600">E-Card</span></p>
                            <div class="flex flex-col justify-between items-center gap-2">
                                <a data-aos="zoom-in-up" data-aos-duration="1000" data-aos-mirror="true" data-aos-delay="300" href="{{ route('giftcards.show', $giftcard['slug']) }}" class="bg-indigo-600 text-white flex justify-center items-center gap-2 px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                    </svg>
                                    Purchase
                                </a>
                                <a data-aos="zoom-in-up" data-aos-duration="1000" data-aos-mirror="true" data-aos-delay="400" href="{{ route('giftcards.show', $giftcard['slug']) }}?action=validate" class="bg-indigo-600 text-white flex justify-center items-center gap-2 px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                    Validate
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="mt-12 text-center" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-mirror="true" data-aos-delay="200">
                <a href="{{ route('giftcards.show', 'others') }}?action=validate" class="bg-gray-600 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-700 transition">Validate Other Cards</a>
            </div>
        </div>
    </section>


    <!-- Modals for purchase modal -->
    <div id="purchase" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of purchase modal -->
@endsection

@push('scripts')
    <script>
        // set the modal menu element
        const $targetEl = document.getElementById('modalEl');

    </script>
@endpush