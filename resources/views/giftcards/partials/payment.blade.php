<div class="flex w-full">
    <button id="proceed-to-payment" disabled data-modal-target="payment-selector-modal" data-modal-toggle="payment-selector-modal" type="button" class="w-fit disabled:opacity-25 bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
        </svg>
        Proceed to Payment
    </button>

    <!-- Main modal -->
    <div id="payment-selector-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Payment
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="payment-selector-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">

                    <div id="paymentForm" class="mb-6">
                        <!-- Payment Form -->
                        <div  id="cardPaymentForm" class="space-y-4 hidden">
                            <p class="text-lg font-semibold mb-4">Payment Details</p>

                            <div>
                                <label for="card_holder" class="block text-sm font-medium text-gray-700 mb-1">Card Holder's Name</label>
                                <input type="text" id="card_holder" name="card_holder" placeholder="Full Name" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                            </div>
                            <div>
                                <label for="card_number" class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                                <input type="text" id="card_number" name="card_number" placeholder="xxxx xxxx xxxx xxxx" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                            </div>
                            <div class="flex space-x-4">
                                <div class="flex-1">
                                    <label for="expiry_date" class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                                    <input type="month" id="expiry_date" name="expiry_date" required
                                           class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                                </div>
                                <div class="flex-1">
                                    <label for="cvv" class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                                    <input type="number" id="cvv" name="cvv" placeholder="XXX" maxlength="3" required
                                           class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                                </div>
                            </div>
                        </div>

                        <!-- Crypto Payment Form -->
                        <div id="cryptoPaymentForm" class="space-y-4 hidden">
                            <p class="text-lg font-semibold mb-2">Process Your Payment</p>
                            <p id="walletInfo" class="bg-gray-100 p-3 rounded-md flex">
                                <span class="font-medium"><span id="paymentNameDisplay"></span> Wallet:</span>
                                <span id="walletAddress" class="text-blue-600 cursor-pointer"></span>
                                <svg onclick="copyToClipboard(document.getElementById('walletAddress').textContent)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                                </svg>
                            </p>
                            <div class="flex gap-x-2">
                                <div class="text-sm text-gray-600 bg-indigo-100 rounded-lg px-2 py-1">Card Name: <span id="cardNameDisplay" class="font-bold"></span></div>
                                <div class="text-sm text-gray-600 bg-indigo-100 rounded-lg px-2 py-1">Quantity: <span id="quantityDisplay" class="font-bold"></span></div>
                                <div class="text-sm text-gray-600 bg-indigo-100 rounded-lg px-2 py-1">Amount: <span id="amountDisplay" class="font-bold"></span></div>
                                <div class="text-sm text-gray-600 bg-indigo-100 rounded-lg px-2 py-1">Total: <span id="totalAmountDisplay" class="font-bold"></span></div>
                            </div>

                            <div>
                                <label for="gift_email" class="block text-sm font-medium text-gray-700 mb-1" id="email_label">Your email address</label>
                                <input type="email" id="gift_email" name="gift_email" placeholder="Email Address"
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                            </div>

                            <div id="message_input">
                                <label for="gift_message" class="block text-sm font-medium text-gray-700 mb-1">Message (optional)</label>
                                <textarea id="gift_message" name="gift_message" placeholder="E.g Happy Birthday!"
                                          class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 resize-none h-24"></textarea>
                            </div>

                            <div>
                                <label for="payment_screenshot" class="block text-sm font-medium text-gray-700 mb-1">Payment Screenshot</label>
                                <input type="file" id="payment_screenshot" name="payment_screenshot" accept="image/*"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                            </div>
                        </div>
                    </div>

                    <button id="complete-payment" type="submit" class="w-fit bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                        </svg>
                        Complete Payment
                    </button>

                </div>


                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>

        function copyToClipboard(text) {

            navigator.clipboard.writeText(text).then(() => {
                Swal.fire({
                    text: 'Copied to clipboard!',
                    icon: 'success',
                    toast: true,
                    position: "top-right",
                    showConfirmButton: false
                });
            });
        }

    </script>
@endpush