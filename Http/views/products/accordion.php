<div x-data="{openAccordion:0, sex:['men', 'women', 'kids'], currentPath: window.location.pathname}" @click.away="openAccordion=0" class="">
    <!--    Sex/Gender -->
    <h1>
        <button @click="openAccordion = (openAccordion === 1 ? 0 : 1)" type="button"
                class="flex w-full items-center justify-between gap-3 border-b border-neutral-300 py-4 rtl:text-right font-medium text-gray-700"
                aria-expanded="true" aria-controls="accordion-color-body-1">
            <span class="flex gap-x-2 text-sm font-semibold text-neutral-800">Sex</span>
            <svg class="h-3 w-3 shrink-0 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path class="stroke-neutral-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h1>
    <div x-cloak x-show="openAccordion===1" x-collapse class="" aria-labelledby="accordion-color-heading-2">
        <template x-for="item in sex" :key="item">
            <div class="flex flex-col py-2">
                <div class="flex items-center me-4">
                    <input
                            @click="window.location.href = '/' + item"
                            :id="item + '-checkbox'"
                            type="checkbox"
                            :value="item"
                            :checked="currentPath === '/' + item"
                            class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    >
                    <label :for="item + '-checkbox'" x-text="item" class="ms-2 text-sm font-medium text-neutral-800 dark:text-gray-300"></label>
                </div>
            </div>
        </template>
    </div>
</div>