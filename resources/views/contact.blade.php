@extends('layouts.guest')

@section('title', 'Contact Us')
@section('content')

    <section class="bg-[#F1F4FC] py-24 md:py-32">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900" data-aos="fade-down-left"
                data-aos-duration="600" data-aos-mirror="true" data-aos-delay="100">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 text-md sm:text-xl" data-aos="fade-down-left"
                data-aos-duration="600" data-aos-mirror="true" data-aos-delay="300">
                Have a question, feedback, or need assistance? We're here to help! Reach out to us and we'll get back to you
                as soon as possible.
            </p>

            <form action="{{ route('contact-us.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                @csrf
                <div class="mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true"
                    data-aos-delay="200">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                        placeholder="name@gmail.com" required>
                </div>
                <div class="mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true"
                    data-aos-delay="400">
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                    <input type="text" name="subject" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2 mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true"
                    data-aos-delay="600">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="6" name="message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                        placeholder="Leave a comment..."></textarea>
                </div>

                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-indigo-700 sm:w-fit hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 animate__pulse animate__infinite">Send
                    message</button>
            </form>
        </div>
    </section>

@endsection