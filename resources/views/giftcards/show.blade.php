@extends('layouts.guest')

@section('title', request('action') == 'validate' ? 'Validate Gift Card' : 'Purchase Gift Card')
@section('content')
    <section class="bg-[#F1F4FC] py-24 md:py-32">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Left Section -->
                <div class="md:w-1/2">
                    <a href="{{ route('giftcards.index') }}" class="mb-4 flex items-center text-gray-600 hover:text-gray-800 transition cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        <span>Back</span>
                    </a>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('/images/giftcards/' . ($giftcard['image'] ?? 'generic.jpg')) }}"
                             alt="{{ isset($giftcard) && !$giftcard ? $giftcard['name'] . ' Gift Card' : 'Generic Gift Card' }}"
                             class="w-full h-64 object-cover">
                    </div>
                </div>

                <!-- Right Section -->
                <div class="md:w-1/2">
                    @if(request('action') == 'validate')
                        <h1 class="text-3xl font-bold mb-4">Validate Gift <span class="text-indigo-600">Card</span></h1>
                        <p class="mb-6 text-gray-600">Enter your gift card details below to check its validity and balance.</p>

                        <form action="{{ route('giftcards.validate', $giftcard['slug']) }}" method="POST">
                            @csrf
                            @if(!$giftcard)
                                <div class="mb-6">
                                    <label for="card_name" class="block text-sm font-medium text-gray-700 mb-2">Card Name</label>
                                    <input type="text" id="card_name" name="card_name" required
                                           class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                           placeholder="Enter card name (e.g., Amazon, Visa)">
                                </div>
                            @else
                                <input type="hidden" name="card_name" value="{{ $giftcard['name'] }}">
                            @endif

                            <!-- Currency Dropdown -->
                            <div class="mb-6">
                                <label for="currency" class="block text-sm font-medium text-gray-700 mb-2">Currency</label>
                                <select id="currency" name="currency" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                                    <option value="">Select Currency</option>
                                    <option value="USD">USD - US Dollar</option>
                                    <option value="EUR">EUR - Euro</option>
                                    <option value="GBP">GBP - British Pound</option>
                                    <option value="CAD">CAD - Canadian Dollar</option>
                                    <option value="AUD">AUD - Australian Dollar</option>
                                </select>
                            </div>

                            <div class="mb-6">
                                <label for="card_amount" class="block text-sm font-medium text-gray-700 mb-2">Card Amount</label>
                                <input type="number" id="card_amount" name="card_amount" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                       placeholder="Amount">
                            </div>

                            <div class="mb-6">
                                <label for="card_number" class="block text-sm font-medium text-gray-700 mb-2">Card Number</label>
                                <input type="text" id="card_number" name="card_number" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                       placeholder="Enter card number">
                            </div>

                            <div class="mb-6">
                                <label for="pin" class="block text-sm font-medium text-gray-700 mb-2">PIN (if applicable)</label>
                                <input type="password" id="pin" name="pin"
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                       placeholder="Enter PIN">
                            </div>

                            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Validate Gift Card
                            </button>
                        </form>

                        <div class="mt-8 p-4 bg-gray-100 rounded-lg">
                            <h2 class="text-lg font-semibold mb-2">Need Help?</h2>
                            <p class="text-gray-600 mb-2">If you're having trouble validating your gift card, please contact our support team:</p>
                            <p class="text-indigo-600">support@yourgiftcardcompany.com</p>
                        </div>

                    @else
                        <h1 class="text-3xl font-bold mb-4">{{ $giftcard ? $giftcard['name'] : 'Gift' }} <span class="text-indigo-600">{{ $giftcard ? $giftcard['label'] : 'Card' }}</span></h1>

                        <div class="flex mb-4">
                            <div class="flex items-center mr-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <span>Email Delivery</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                                <span>Est. Delivery Time: 1-3 mins</span>
                            </div>
                        </div>

                        <form id="mainForm" action="{{ route('giftcards.purchase', $giftcard['slug']) }}" method="POST">
                            @csrf

                            @if(!$giftcard)
                                <div class="mb-6">
                                    <label for="card_name" class="block text-sm font-medium text-gray-700 mb-2">Card Name</label>
                                    <input type="text" id="card_name" name="card_name" required
                                           class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                           placeholder="Enter card name (e.g., Amazon, Visa)">
                                </div>
                            @else
                                <input type="hidden" name="card_name" value="{{ $giftcard['name'] }}">
                            @endif

                            <p class="mb-4">Select the amount you would like to purchase</p>

                            <div class="grid grid-cols-3 gap-4 mb-6">
                                @foreach([20, 50, 100, 200, 500] as $amount)
                                    <label class="relative amount">
                                        <input type="radio" name="amount" value="{{ $amount }}" required class="sr-only" onchange="calculateTotal()">
                                        <div class="py-2 px-4 border border-indigo-600 hover:bg-indigo-600 hover:text-white active:bg-indigo-700 active:scale-90 rounded-lg text-center cursor-pointer transition">
                                            ${{ $amount }}
                                        </div>
                                    </label>
                                @endforeach
                            </div>

                            <div class="flex items-center mb-6">
                                <label for="isGift" class="flex items-center cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" id="isGift" name="is_gift" class="sr-only" onchange="toggleCheckbox(this)">
                                        <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner"></div>
                                        <div class="dot absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition"></div>
                                    </div>
                                    <div class="ml-3 text-gray-700 font-medium">
                                        Send as gift
                                    </div>
                                </label>
                            </div>

                            <div class="mb-6">
                                <label for="quantity" class="block text-sm font-medium text-gray-700 mb-2">No. of digital cards</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <input oninput="calculateTotal()" type="number" name="quantity" id="quantity" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="1" value="1" min="1" max="20">
                                </div>
                            </div>

                            <p class="mb-4 font-bold">Pay with: </p>

                            <div class="grid grid-cols-3 gap-4 mb-6">
                                @foreach(config('payment-options') as $option)
                                    <label class="relative amount">
                                        <input type="radio" name="payment-option" value="{{ $option['slug'] }}" required class="sr-only">
                                        <div class="flex gap-x-4 items-center py-2 px-4 border border-indigo-600 hover:bg-indigo-600 hover:text-white active:bg-indigo-700 active:scale-90 rounded-lg text-center cursor-pointer transition">
                                            <img class="h-8" alt="{{ $option['name'] }} payment option" src="{{ asset('/images/payment-icons/'.$option['icon']) }}">
                                            {{ $option['name'] }}
                                        </div>
                                    </label>
                                @endforeach
                            </div>

                            <p class="text-xl mb-6">Total Due: <span class="font-bold text-indigo-600" id="total">$0.00</span></p>

                            @include('giftcards.partials.payment')
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const labels = document.querySelectorAll('label.amount');

            labels.forEach(label => {
                const input = label.querySelector('input[type="radio"]');
                const div = label.querySelector('div');

                input.addEventListener('change', () => {
                    // Remove active classes from all labels
                    labels.forEach(l => {
                        const input = l.querySelector('input[type="radio"]');
                        const div = l.querySelector('div');
                        if (input.checked) {
                            div.classList.add('bg-indigo-600', 'text-white');
                            div.classList.remove('text-indigo-600');
                        } else {
                            div.classList.remove('bg-indigo-600', 'text-white');
                            div.classList.add('text-indigo-600');
                        }
                    });
                });

                // Trigger change event on load to ensure the correct initial state
                input.dispatchEvent(new Event('change'));
            });
        });

        function calculateTotal() {
            const amount = document.querySelector('input[name="amount"]:checked');
            const quantity = document.getElementById('quantity').value;
            let total = amount ? amount.value * quantity : 0;

            // add fees
            total += (total * 0.015)

            const formattedNumber = total.toLocaleString('en-US', {
                style: 'currency',
                currency: 'USD',
            });

            document.getElementById('total').innerText = formattedNumber;

            return formattedNumber;
        }

        function toggleCheckbox(checkbox) {
            const dot = checkbox.nextElementSibling.nextElementSibling;
            if (checkbox.checked) {
                dot.classList.add('translate-x-full');
                dot.classList.remove('bg-white');
                dot.classList.add('bg-indigo-600');
            } else {
                dot.classList.remove('translate-x-full');
                dot.classList.remove('bg-indigo-600');
                dot.classList.add('bg-white');
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const paymentOptions = document.querySelectorAll('input[name="payment-option"]');
            const cardForm = document.getElementById('cardPaymentForm');
            const cryptoForm = document.getElementById('cryptoPaymentForm');

            paymentOptions.forEach(option => {
                option.addEventListener('change', function() {
                    if (this.value === 'card') {
                        cardForm.classList.remove('hidden');
                        cryptoForm.classList.add('hidden');
                    } else {
                        cardForm.classList.add('hidden');
                        cryptoForm.classList.remove('hidden');
                    }
                });
            });

        });
    </script>

    <script>
        const paymentOptions = {{ \Illuminate\Support\Js::from($payment_options) }};

        document.addEventListener('DOMContentLoaded', function () {
            const paymentForm = document.getElementById('paymentForm');
            const mainForm = document.getElementById('mainForm');

            const proceedButton = document.getElementById('proceed-to-payment');
            const completeButton = document.getElementById('complete-payment');
            const amountInputs = document.querySelectorAll('input[name="amount"]');
            const paymentOptionInputs = document.querySelectorAll('input[name="payment-option"]');
            const quantityInput = document.getElementById('quantity');
            const cardNameInput = document.querySelector('input[name="card_name"]');
            const isGift = document.getElementById('isGift');

            const walletInfo = document.getElementById('walletInfo');
            const paymentNameDisplay = document.getElementById('paymentNameDisplay');
            const walletAddress = document.getElementById('walletAddress');
            const cardNameDisplay = document.getElementById('cardNameDisplay');
            const amountDisplay = document.getElementById('amountDisplay');
            const totalAmountDisplay = document.getElementById('totalAmountDisplay');
            const quantityDisplay = document.getElementById('quantityDisplay');

            completeButton.addEventListener('click', function(e) {
                e.preventDefault();

                const selectedPaymentOption = document.querySelector('input[name="payment-option"]:checked');

                let formIsValid = false;

                if (selectedPaymentOption.value === 'card') {
                    formIsValid = validateCardPayment();
                } else {
                    formIsValid = validateCryptoPayment();
                }

                if (formIsValid) mainForm.submit();
            });

            function checkSelections() {
                const amountSelected = Array.from(amountInputs).some(input => input.checked);
                const paymentSelected = Array.from(paymentOptionInputs).some(option => option.checked);

                proceedButton.disabled = !(amountSelected && paymentSelected);

                updatePaymentForm();
            }

            function updatePaymentForm() {
                const selectedPaymentOption = document.querySelector('input[name="payment-option"]:checked')?.value || '';
                const quantity = quantityInput.value;
                const cardName = cardNameInput.value;

                // Updating the payment form with the previously filled details
                cardNameDisplay.textContent = cardName;
                amountDisplay.textContent = document.querySelector('input[name="amount"]:checked').value ?? '0';
                totalAmountDisplay.textContent = calculateTotal();
                quantityDisplay.textContent = quantity;

                const selectedPayment = paymentOptions.find(option => option.slug === selectedPaymentOption);
                if (selectedPayment) {
                    paymentNameDisplay.textContent = selectedPayment.name;
                    walletAddress.textContent = selectedPayment.address || 'N/A';
                    walletAddress.onclick = () => copyToClipboard(selectedPayment.address);
                    walletInfo.classList.remove('hidden');
                } else {
                    walletInfo.classList.add('hidden');
                }

                // Check the is gift toggle
                if (isGift.checked) {
                    document.getElementById('email_label').textContent = 'The email of the person you wish to gift';
                    document.getElementById('message_input').classList.remove('hidden');
                } else {
                    document.getElementById('email_label').textContent = 'Your email address';
                    document.getElementById('message_input').classList.add('hidden');
                }
            }

            function validateCardPayment() {
                const cardHolder = document.getElementById('card_holder').value.trim();
                const cardNumber = document.getElementById('card_number').value.trim();
                const expiryDate = document.getElementById('expiry_date').value;
                const cvv = document.getElementById('cvv').value.trim();

                let isValid = true;
                let errorMessage = '';

                if (cardHolder === '') {
                    errorMessage += 'Card holder name is required.<br>';
                    isValid = false;
                }

                if (cardNumber === '' || !/^\d{16}$/.test(cardNumber.replace(/\s/g, ''))) {
                    errorMessage += 'Invalid card number. It should be 16 digits.<br>';
                    isValid = false;
                }

                if (expiryDate === '') {
                    errorMessage += 'Expiry date is required.<br>';
                    isValid = false;
                } else {
                    const [year, month] = expiryDate.split('-');
                    const expiry = new Date(year, month - 1);
                    const today = new Date();
                    if (expiry < today) {
                        errorMessage += 'Card has expired.<br>';
                        isValid = false;
                    }
                }

                if (cvv === '' || !/^\d{3,4}$/.test(cvv)) {
                    errorMessage += 'Invalid CVV. It should be 3 or 4 digits.<br>';
                    isValid = false;
                }

                if (!isValid) {
                    Swal.fire({
                        title: 'Error!',
                        html: `<p>${errorMessage}</p>`,
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                }

                return isValid;
            }

            function validateCryptoPayment() {
                const email = document.getElementById('gift_email').value.trim();
                const paymentScreenshot = document.getElementById('payment_screenshot').files[0];

                let isValid = true;
                let errorMessage = '';

                if (email === '' || !/\S+@\S+\.\S+/.test(email)) {
                    errorMessage += 'Please enter a valid email address.<br>';
                    isValid = false;
                }

                if (!paymentScreenshot) {
                    errorMessage += 'Please upload a payment screenshot.<br>';
                    isValid = false;
                }

                if (!isValid) {
                    Swal.fire({
                        title: 'Error!',
                        html: `<p>${errorMessage}</p>`,
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                }

                return isValid;
            }

            amountInputs.forEach(input => input.addEventListener('change', checkSelections));
            paymentOptionInputs.forEach(option => option.addEventListener('change', checkSelections));
            quantityInput.addEventListener('input', checkSelections);
            cardNameInput.addEventListener('input', checkSelections);
            isGift.addEventListener('change', checkSelections);

            // Initial check
            checkSelections();
        });

    </script>
@endpush