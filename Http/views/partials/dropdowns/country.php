<div x-show="countryExpanded"
     x-cloak
     x-collapse
     x-anchor.bottom-end="$refs.countryButton"
     @click.away="countryExpanded = false"
     class="z-10 w-fit bg-white divide-y divide-gray-100 rounded-sm shadow dark:bg-gray-700 mt-2">
    <div class="text-sm text-gray-700 dark:text-gray-200 flex flex-col items-center" aria-labelledby="multiLevelDropdownButton">
        <div class="flex flex-col px-4">
            <p class="block py-2 font-bold">Location</p>
           <div class="flex items-center gap-x-1 mb-4">
               <label class="flex items-center">
                   <input type="checkbox" checked disabled class="h-[14px] w-[14px]">
               </label>
               <svg width="14px" height="14px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                    class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000">
                   <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                   <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                   <g id="SVGRepo_iconCarrier">
                       <path fill="#CE1126" d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z"></path>
                       <path fill="#0038A8" d="M32 5H4a4 4 0 0 0-4 4v9h36V9a4 4 0 0 0-4-4z"></path>
                       <path fill="#EEE" d="M1.313 29.945l17.718-11.881L1.33 6.041A3.975 3.975 0 0 0 0 9v18c0 1.171.512 2.214 1.313 2.945z"></path>
                       <path fill="#FCD116"
                             d="M16.07 16.52l.043 1.153l1.115.294l-1.083.396l.065 1.152l-.712-.908l-1.075.417l.643-.957l-.73-.893l1.11.316zM1.603 7.982l.866.763l.98-.607l-.458 1.059l.88.745l-1.148-.108l-.437 1.066l-.251-1.125l-1.151-.086l.993-.586zm.431 17.213l.574 1l1.124-.257l-.774.854l.594.989l-1.052-.472l-.757.871l.123-1.148l-1.061-.45l1.128-.238zM10 18a3 3 0 1 1-6 0a3 3 0 0 1 6 0z"></path>
                       <path d="M7.595 12.597l-.157 2.648l-.244-.036l.085-3.074L7 11.953l-.279.182l.085 3.074l-.244.036l-.157-2.648l-.353.218l.329 2.697h1.238l.329-2.697zm-1.19 10.806l.157-2.648l.244.036l-.086 3.074l.28.182l.279-.182l-.085-3.074l.244-.036l.157 2.648l.353-.218l-.329-2.698H6.381l-.329 2.698zm-3.647-2.004l1.985-1.759l.146.196l-2.233 2.113l.068.327l.327.069l2.113-2.235l.197.147L3.6 22.242l.404.094l1.675-2.139l-.438-.438l-.438-.438l-2.139 1.675zm8.484-6.799l-1.985 1.761l-.146-.197l2.233-2.113l-.068-.327l-.327-.069l-2.113 2.234l-.197-.146l1.761-1.985l-.404-.094l-1.675 2.139l.438.438l.438.438l2.139-1.675zm-9.645 2.805l2.649.157l-.037.244l-3.074-.086l-.182.28l.182.279l3.074-.085l.037.244l-2.649.157l.218.353l2.697-.329V17.38l-2.697-.328zm10.806 1.19l-2.649-.157l.037-.244l3.074.085l.182-.279l-.182-.28l-3.074.086l-.037-.244l2.649-.157l-.218-.353l-2.698.328v1.239l2.698.329zM3.6 13.758l1.761 1.985l-.197.146l-2.113-2.234l-.327.069l-.068.327l2.233 2.113l-.146.197L2.758 14.6l-.094.404l2.139 1.675l.438-.438l.438-.438l-1.675-2.139zm6.8 8.484l-1.761-1.985l.197-.147l2.113 2.235l.327-.069l.068-.327l-2.233-2.113l.146-.196l1.985 1.759l.094-.403l-2.139-1.675l-.438.438l-.438.438l1.675 2.139z"
                             fill="#FCD116"></path>
                   </g>
               </svg>
               <a href="/home" class="block text-sm dark:hover:bg-gray-600 dark:hover:text-white">Philippines</a>
           </div>
        </div>
    </div>
</div>