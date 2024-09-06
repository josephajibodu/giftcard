@php
    $faqs = config('faq');
@endphp
<div class="lg:pt-4">
    <div class="">
        <h1 class="lg:mt-2 text-center text-3xl font-bold tracking-tight text-white pt-8 sm:text-4xl" data-aos="zoom-in" data-aos-animation="600" data-aos-mirror="true">Frequently Asked Questions</h1>
    </div>

    <div class="py-12 flex flex-col justify-center items-center">

        <div id="accordion-collapse" data-accordion="collapse" class="max-w-screen-md w-full flex flex-col gap-4">
            @foreach ($faqs as $faq)
                <div class="overflow-hidden border-t" data-aos="fade-up" data-aos-animation="600" data-aos-mirror="true" data-aos-delay="{{ ($loop->index + 1) * 200 }}">
                    <h2 id="accordion-collapse-heading-{{ $loop->index }}">
                        <button type="button"
                                class="flex items-center justify-between w-full p-5 bg-transparent font-medium text-start text-xl gap-3 text-white"
                                data-accordion-target="#accordion-collapse-body-{{ $loop->index }}" aria-expanded="true"
                                aria-controls="accordion-collapse-body-{{ $loop->index }}">
                            <span>{{ $faq['question'] }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-{{ $loop->index }}" class="hidden transition-all duration-700"
                         aria-labelledby="accordion-collapse-heading-{{ $loop->index }}">
                        <div class="p-5 pt-0 flex flex-col gap-3">
                            @if(is_array($faq['answer']))
                                @foreach($faq['answer'] as $answer)
                                    <p class="mb-2 text-gray-200 text-lg">{!! $answer !!}</p>
                                @endforeach
                            @else
                                <p class="mb-2 text-gray-200 text-lg">{!! $faq['answer'] !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</div>