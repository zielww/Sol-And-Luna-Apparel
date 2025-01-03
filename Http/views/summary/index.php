<?php
require base_path("Http/views/partials/head.php");
require base_path("Http/views/partials/header.php");
require base_path("Http/views/partials/nav.php");
require base_path("Http/views/partials/aside.php");
?>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div  class="mx-auto max-w-screen-xl px-4 2xl:px-0 flex flex-col justify-center items-center">
            <?php require base_path("Http/views/partials/progress.php") ?>

            <section class="py-12 relative">
                <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
                    <h2 class="font-manrope font-bold text-4xl leading-10 text-black text-center">
                        Order Successful
                    </h2>
                    <p class="mt-4 font-normal text-lg leading-8 text-gray-500 mb-11 text-center">Thanks for making a purchase,
                        you can
                        check our order summary from below.</p>
                    <div class="main-box border border-gray-200 rounded-xl pt-6 max-w-xl max-lg:mx-auto lg:max-w-full">
                        <div
                                class="flex flex-col lg:flex-row lg:items-center justify-between px-6 pb-6 border-b border-gray-200">
                            <div class="data">
                                <p class="font-semibold text-base leading-7 text-black">Order Id: <span class="text-orange-600 font-medium">#<?= $order_id['order_id'] ?></span></p>
                                <p class="font-semibold text-base leading-7 text-black mt-4">Order Payment : <span class="text-neutral-600 font-medium"><?= date('M d, Y') ?></span></p>
                            </div>
                            <a href="/order-history"
                               class="text-center rounded-full py-3 px-7 font-semibold text-sm leading-7 text-white bg-orange-600 max-lg:mt-5 shadow-sm shadow-transparent transition-all duration-500 hover:bg-orange-700 hover:shadow-orange-400">
                                Track
                                Your Order
                            </a>
                        </div>
                        <div class="w-full px-3 min-[400px]:px-6">
                            <?php foreach ($cart as $item) : ?>
                                <div class="flex flex-col lg:flex-row items-center py-6 border-b border-gray-200 gap-6 w-full">
                                    <div class="img-box max-lg:w-full">
                                        <img src="<?= htmlspecialchars($item['cloud_url'] ?? '')?>" alt="Premium Watch image"
                                             class="aspect-square w-full lg:max-w-[140px] rounded-xl object-cover">
                                    </div>
                                    <div class="flex flex-row items-center w-full">
                                        <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-x-4">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <h2 class="font-semibold text-base text-black mb-1">
                                                        <?= htmlspecialchars($item['name'] ?? '') ?></h2>
                                                    <p class="font-normal text-xs text-gray-500 mb-1">
                                                        <?= htmlspecialchars(substr(strip_tags($item['description'] ?? ''), 0, 100)) . '...'?></p>
                                                    <div class="flex items-center ">
                                                        <p class="font-medium text-sm leading-7 text-black ">Quantity: <span
                                                                    class="text-gray-500"><?= htmlspecialchars($item['quantity'] ?? '') ?></span></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="grid grid-cols-5">
                                                <div class="col-span-5 lg:col-span-1 flex items-center max-lg:mt-3">
                                                    <div class="flex gap-3 lg:block">
                                                        <p class="font-medium text-sm leading-7 text-black">Price</p>
                                                        <p class="lg:mt-4 font-medium text-sm leading-7 text-orange-600">₱<?= htmlspecialchars(number_format($item['price'] ?? '0', 2)) ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-span-5 lg:col-span-2 flex items-center max-lg:mt-3 ">
                                                    <div class="flex gap-3 lg:block">
                                                        <p class="font-medium text-sm leading-7 text-black">Status</p>
                                                        <p class="font-medium text-sm leading-6 whitespace-nowrap py-0.5 px-3 rounded-full lg:mt-3 bg-emerald-50 text-emerald-600">Pending</p>
                                                    </div>

                                                </div>
                                                <div class="col-span-5 lg:col-span-2 flex items-center max-lg:mt-3">
                                                    <div class="flex gap-3 lg:block">
                                                        <p class="font-medium text-sm whitespace-nowrap leading-6 text-black">
                                                            Expected Delivery Time</p>
                                                        <p class="font-medium text-sm whitespace-nowrap leading-7 lg:mt-3 text-orange-500">
                                                            <?= date('M d, Y', strtotime('+7 days')) ?></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="w-full border-t border-gray-200 px-6 flex flex-col lg:flex-row items-center justify-between ">
                            <div x-data class="flex flex-col sm:flex-row items-center max-lg:border-b border-gray-200">
                                <button @click="window.location.href = '/order-history'"
                                        class="flex outline-0 py-6 sm:pr-6  sm:border-r border-gray-200 whitespace-nowrap gap-2 items-center justify-center font-semibold group text-base text-black bg-white transition-all duration-500 hover:text-orange-600">
                                    <svg class="stroke-black transition-all duration-500 group-hover:stroke-orange-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 22"
                                         fill="none">
                                        <path d="M5.5 5.5L16.5 16.5M16.5 5.5L5.5 16.5" stroke="" stroke-width="1.6"
                                              stroke-linecap="round"/>
                                    </svg>
                                    Cancel Order
                                </button>
                                <p class="font-medium text-base text-gray-900 pl-6 py-3 max-lg:text-center">Paid using <?= $order_details['payment_method'] == 'cash_on_delivery' ? 'Cash On Delivery' : 'Credit Card' ?></p>
                            </div>
                            <p class="font-semibold text-base text-black py-6">Total Price: <span class="text-orange-600"> ₱<?= number_format($order_details['total'], 2) ?></span></p>
                        </div>

                    </div>
                </div>
            </section>

            <a href="/new" class="font-medium text-primary-700 hover:underline dark:text-primary-500">Continue Shopping</a>
        </div>
    </section>
<?php
require base_path("Http/views/partials/footer.php");
?>