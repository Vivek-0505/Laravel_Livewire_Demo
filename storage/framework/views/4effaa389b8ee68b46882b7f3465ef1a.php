
<div class="max-sm:px-3 max-w-7xl mx-auto">
    <div class="flex items-center justify-between max-sm:justify-end mb-6 bg-gray-100 border-b border-bordercolor pb-2 gap-3">
        <div class="flex items-center space-x-2 md:w-1/2 w-full relative">
            <input type="text" wire:model="search" wire:keyup="updateSearch" placeholder="Search..."
                class="w-full py-2 pr-2 pl-9 rounded-lg bg-transparent focus:outline-none focus:ring-none placeholder:text-lightgray placeholder:font-medium text-darkblack" />
            <button class="p-2 absolute left-0">
                <svg class="fill-lightgray" aria-hidden="true" width="12" height="12" viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg" class="⚙   as5a as5b as5c as14 as8y as66 as67 ⚙1aavo9y">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.883 9.085a5 5 0 1 1 1.202-1.202l2.666 2.666a.847.847 0 0 1 0 1.202.847.847 0 0 1-1.202 0L7.883 9.085ZM8.3 5a3.3 3.3 0 1 1-6.6 0 3.3 3.3 0 0 1 6.6 0Z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="flex items-center gap-3 ">
            <button class="flex gap-2 items-center cursor-auto">
                <svg aria-hidden="true"
                    class="fill-lightgray SVGInline-svg SVGInline--cleaned-svg SVG-svg Icon-svg Icon--feedback-svg Icon-color-svg Icon-color--gray600-svg"
                    height="16" width="16" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.666 11.995a304.44 304.44 0 0 1-1.841-.776s-.41-.14-.558-.638c-.148-.498-.187-1.058 0-1.627.187-.57.558-.735.558-.735s9.626-4.07 13.64-5.43c.53-.179 1.18-.156 1.18-.156C17.607 2.702 19 6.034 19 9.9c0 3.866-1.62 6.808-3.354 6.84 0 0-.484.1-1.18-.135-2.189-.733-5.283-1.946-7.971-3.035-.114-.045-.31-.13-.338.177v.589c0 .56-.413.833-.923.627l-1.405-.566c-.51-.206-.923-.822-.923-1.378v-.63c.018-.29-.162-.362-.24-.394zM15.25 15.15c1.367 0 2.475-2.462 2.475-5.5s-1.108-5.5-2.475-5.5-2.475 2.462-2.475 5.5 1.108 5.5 2.475 5.5z"
                        fill="evenodd"></path>
                </svg>
                <span class="text-lightgray font-medium capitalize  max-sm:hidden">feedback?</span>
            </button>
            <button class="cursor-auto">
                <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4087_5799)">
                    <path d="M21.379 16.913C19.867 15.635 19 13.767 19 11.788V9C19 5.481 16.386 2.568 13 2.08V1C13 0.447 12.552 0 12 0C11.448 0 11 0.447 11 1V2.08C7.613 2.568 5 5.481 5 9V11.788C5 13.767 4.133 15.635 2.612 16.921C2.223 17.254 2 17.738 2 18.25C2 19.215 2.785 20 3.75 20H20.25C21.215 20 22 19.215 22 18.25C22 17.738 21.777 17.254 21.379 16.913Z" fill="#596171"/>
                    <path d="M12 24C13.811 24 15.326 22.709 15.674 21H8.32605C8.67405 22.709 10.189 24 12 24Z" fill="#596171"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_4087_5799">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
            </button>
            <button class="cursor-auto">
                <svg class="fill-lightgray" width="19" height="19" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24 12C24 18.6274 18.6274 24 12 24C5.37259 24 0 18.6274 0 12C0 5.37259 5.37259 0 12 0C18.6274 0 24 5.37259 24 12ZM12 6.672C10.9047 6.672 10.032 7.55146 10.032 8.61763C10.032 9.33341 9.45178 9.91363 8.736 9.91363C8.02022 9.91363 7.44 9.33341 7.44 8.61763C7.44 6.10315 9.48998 4.08 12 4.08C14.51 4.08 16.56 6.10315 16.56 8.61763C16.56 10.1725 15.7733 11.5413 14.5851 12.356C14.1731 12.6385 13.8245 12.9222 13.5867 13.2084C13.3538 13.4886 13.296 13.6862 13.296 13.8273V15.024C13.296 15.7398 12.7158 16.32 12 16.32C11.2842 16.32 10.704 15.7398 10.704 15.024V13.8273C10.704 12.8814 11.124 12.1163 11.5932 11.5517C12.0574 10.9932 12.635 10.5504 13.1194 10.2182C13.6369 9.86338 13.968 9.2771 13.968 8.61763C13.968 7.55146 13.0953 6.672 12 6.672ZM12 20.592C12.9013 20.592 13.632 19.8506 13.632 18.936C13.632 18.0214 12.9013 17.28 12 17.28C11.0987 17.28 10.368 18.0214 10.368 18.936C10.368 19.8506 11.0987 20.592 12 20.592Z"
                        fill="#596171" />
                </svg>
            </button>
            <button class="cursor-auto">
                <svg class="fill-lightgray" width="19" height="19" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 11.75C14.6234 11.75 16.75 9.62335 16.75 7C16.75 4.37665 14.6234 2.25 12 2.25C9.37665 2.25 7.25 4.37665 7.25 7C7.25 9.62335 9.37665 11.75 12 11.75Z"
                        fill="#596171" />
                    <path
                        d="M20.47 17.3202L20.34 17.0002C19.9031 15.9026 19.152 14.9584 18.1807 14.286C17.2094 13.6135 16.0612 13.2428 14.88 13.2202H9.13002C7.94888 13.2428 6.80069 13.6135 5.82939 14.286C4.85809 14.9584 4.1069 15.9026 3.67002 17.0002L3.53002 17.3102C3.31194 17.8107 3.22066 18.3573 3.26427 18.9015C3.30788 19.4457 3.48502 19.9708 3.78002 20.4302C4.02023 20.8225 4.35668 21.1469 4.75745 21.3727C5.15823 21.5984 5.61004 21.7181 6.07002 21.7202H17.92C18.3813 21.7179 18.8345 21.5983 19.2368 21.3726C19.6392 21.1469 19.9775 20.8226 20.22 20.4302C20.5125 19.9717 20.6882 19.4484 20.7318 18.9063C20.7754 18.3642 20.6855 17.8196 20.47 17.3202Z"
                        fill="#596171" />
                </svg>
            </button>

        </div>
    </div>
    <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
        <div class="bg-green-200 text-green-700 p-2 rounded mb-4"
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show"
        
        >
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="md:px-6">
        <div class="flex justify-between items-center flex-wrap max-sm:pb-5">
            <h2 class="text-titleblack text-3xl capitalize font-bold mb-4">Invoices</h2>
            <div class="flex items-center gap-1.5">
                <button type="button"
                    class="cursor-auto bg-white border border-bordercolor shadow-sm text-sm max-sm:text-xs text-darkblack py-1 font-medium px-3 rounded-md flex items-center gap-1">
                    <svg class="fill-darkblack" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.22314 4.74546L9.75642 13.3636V17.7273L14.2436 21V13.3636L20.7769 4.74546C20.9014 4.58309 20.9772 4.38996 20.9956 4.1878C21.014 3.98563 20.9744 3.78245 20.8812 3.60109C20.788 3.41973 20.6449 3.2674 20.468 3.16121C20.2911 3.05502 20.0874 2.9992 19.8799 3.00001H4.12013C3.91256 2.9992 3.70887 3.05502 3.53197 3.16121C3.35508 3.2674 3.21198 3.41973 3.11878 3.60109C3.02558 3.78245 2.98597 3.98563 3.00441 4.1878C3.02285 4.38996 3.09859 4.58309 3.22314 4.74546Z"
                            fill="fill-darkblack" />
                    </svg>
                    Filter
                </button>
                <button type="button"
                    class="cursor-auto bg-white border border-bordercolor shadow-sm text-sm max-sm:text-xs text-darkblack py-1 font-medium px-3 rounded-md flex items-center gap-1">
                    <svg class="fill-darkblack" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 3.76658V15.4104C21 15.8337 20.6567 16.177 20.2334 16.177C19.81 16.177 19.4668 15.8337 19.4668 15.4104V5.61741L4.30869 20.7755C4.15896 20.9252 3.96282 21 3.76662 21C3.57041 21 3.37427 20.9252 3.22454 20.7755C2.92515 20.4761 2.92515 19.9907 3.22454 19.6913L18.3827 4.53316H8.58959C8.16624 4.53316 7.82301 4.18993 7.82301 3.76658C7.82301 3.34323 8.16624 3 8.58959 3H20.2334C20.6567 2.99996 21 3.34323 21 3.76658Z"
                            fill="fill-darkblack" />
                    </svg>
                    Export
                </button>
                
                <a href="<?php echo e(route('invoices.create')); ?>"
                    class="bg-primarycolor text-white text-sm max-sm:text-xs py-1 font-medium px-3 rounded-md flex gap-1 items-center">
                    <svg class="fill-white" aria-hidden="true" height="12" width="12" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 .25c.483 0 .875.392.875.875v6h6a.875.875 0 0 1 0 1.75h-6v6a.875.875 0 0 1-1.75 0v-6h-6a.875.875 0 1 1 0-1.75h6v-6c0-.483.392-.875.875-.875Z">
                        </path>
                    </svg>
                    Create Invoice
                </a>

            </div>
        </div>
        <ul class="flex border-b border-bordercolor mb-4">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <button wire:click="setTab('<?php echo e($key); ?>')"
                class="<?php if($activeTab === $key): ?> border-b-2 border-primarycolor text-primarycolor <?php else: ?> text-lightgray <?php endif; ?> px-2 pb-2 text-sm">
                <?php echo e($label); ?>

            </button>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </ul>
        <table id="default-table"
            class="min-w-full table-auto max-sm:inline-block max-sm:overflow-y-scroll max-sm:w-full">
            <thead>
                <tr class="border-b border-bordercolor">
                    <th class="px-3 py-2 text-left ">
                        <span class="flex items-center uppercase text-darkblack text-xs ">
                            Amount
                        </span>
                    </th>
                    <th class="px-4 py-2 text-left ">
                        <span class="flex items-center uppercase text-darkblack text-xs">

                        </span>
                    </th>
                    <th class="px-4 py-2 text-left ">
                        <span class="flex items-center uppercase text-darkblack text-xs">

                        </span>
                    </th>
                    <th class="px-4 py-2 text-left ">
                        <span class="flex items-center uppercase text-darkblack text-xs whitespace-nowrap">
                            Invoice Number
                        </span>
                    </th>

                    <th class="px-4 py-2 text-left w-full">
                        <span class="flex items-center uppercase text-darkblack text-xs gap-2">
                            Customer
                            <svg class="fill-lightgray" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg"
                                class="⚙   as5a as5b as5c as14 as8y as5e as5f ⚙1pgx1lh">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 1.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.41 14.5h1.18l.053-.832a1.753 1.753 0 0 1 1.08-1.509 1.752 1.752 0 0 1 1.83.303l.625.552.836-.835-.552-.626a1.752 1.752 0 0 1-.303-1.83 1.753 1.753 0 0 1 1.509-1.08l.832-.052V7.409l-.832-.052a1.753 1.753 0 0 1-1.509-1.08 1.752 1.752 0 0 1 .303-1.83l.552-.625-.836-.836-.625.552a1.752 1.752 0 0 1-1.83.303 1.753 1.753 0 0 1-1.08-1.509L8.59 1.5H7.409l-.052.832a1.753 1.753 0 0 1-1.08 1.509 1.752 1.752 0 0 1-1.83-.303l-.625-.552-.836.836.552.625a1.753 1.753 0 0 1-1.205 2.91L1.5 7.41v1.182l.832.052a1.753 1.753 0 0 1 1.509 1.08 1.752 1.752 0 0 1-.303 1.83l-.552.625.836.836.625-.552a1.752 1.752 0 0 1 1.83-.303 1.753 1.753 0 0 1 1.08 1.509l.052.832Zm-2.896-.122c.064-.04.125-.085.183-.136l.742-.655a.252.252 0 0 1 .264-.042.25.25 0 0 1 .157.216l.062.989a1.34 1.34 0 0 0 .07.35c.18.526.679.9 1.26.9h1.495a1.334 1.334 0 0 0 1.331-1.25l.062-.989a.253.253 0 0 1 .157-.216.252.252 0 0 1 .263.042l.743.655a1.338 1.338 0 0 0 .297.199c.5.244 1.117.156 1.528-.256l1.057-1.057a1.334 1.334 0 0 0 .057-1.825l-.655-.742a.252.252 0 0 1-.042-.264.253.253 0 0 1 .216-.157l.989-.062a1.341 1.341 0 0 0 .35-.07c.526-.18.9-.679.9-1.26V7.252a1.334 1.334 0 0 0-1.25-1.331l-.989-.062a.253.253 0 0 1-.216-.157.252.252 0 0 1 .042-.264l.655-.742a1.34 1.34 0 0 0 .199-.297c.244-.5.156-1.117-.256-1.528l-1.057-1.057a1.334 1.334 0 0 0-1.825-.057l-.742.655a.252.252 0 0 1-.264.042.253.253 0 0 1-.157-.216l-.062-.989a1.34 1.34 0 0 0-.07-.35A1.33 1.33 0 0 0 8.749 0H7.252a1.334 1.334 0 0 0-1.331 1.25l-.062.989a.253.253 0 0 1-.157.216.252.252 0 0 1-.264-.042l-.742-.655a1.34 1.34 0 0 0-.297-.199 1.334 1.334 0 0 0-1.528.256L1.815 2.872a1.334 1.334 0 0 0-.057 1.825l.655.743c.064.072.08.174.042.263a.253.253 0 0 1-.216.157l-.989.062a1.34 1.34 0 0 0-.35.07c-.526.18-.9.679-.9 1.26v1.495a1.334 1.334 0 0 0 1.25 1.331l.989.062c.096.006.18.068.216.157a.252.252 0 0 1-.042.264l-.655.742a1.344 1.344 0 0 0-.199.297c-.244.5-.156 1.117.256 1.528l1.057 1.057a1.334 1.334 0 0 0 1.642.193Z">
                                </path>
                            </svg>
                        </span>
                    </th>
                    <th class="px-4 py-2 text-left whitespace-nowrap">
                        <span class="flex items-center uppercase text-darkblack text-xs">
                            Dues
                        </span>
                    </th>
                    <th class="px-4 py-2 text-left whitespace-nowrap">
                        <span class="flex items-center uppercase text-darkblack text-xs">
                            Created
                        </span>
                    </th>
                    <th class="px-4 py-2 text-left ">
                        <span class="flex items-center uppercase text-darkblack text-xs justify-center">

                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b border-bordercolor">
                        <td class="px-4 py-2 font-medium text-darkblack whitespace-nowrap text-sm">
                            $ <?php echo e($invoice['amount']); ?>

                            <span class="font-normal text-lightgray pl-3">USD</span>
                        </td>
                        <td class="py-2 font-medium text-darkblack whitespace-nowrap text-sm">
                            <svg height="16" width="16" class="fill-lightgray" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="timeline"/><g id="navigation"/><g id="align_center"/><g id="align_left_1_"/><g id="align_left"/><g id="more"/><g id="share"/><g id="music"/><g id="camera"/><g id="print"/><g id="wifi_1_"/><g id="setting"/><g id="composed"/><g id="password"/><g id="list"/><g id="voice"/><g id="open_folder"/><g id="refresh"/><g id="link"/><g id="attach"/><g id="email"/><g id="bookmark"/><g id="folder"/><g id="file"/><g id="notification"/><g id="galery"/><g id="delete_1_"/><g id="update"><g><path d="m21.8164 13.7725-1.9316-2.728c-.3193-.4497-.9424-.5586-1.3945-.2383l-2.7275 1.9312c-.4502.3188-.5576.9429-.2383 1.3936.3193.4502.9424.5581 1.3945.2383l.9135-.6468c-.1962.6644-.4961 1.2963-.9145 1.8675-1.1641 1.5894-2.9561 2.5005-4.918 2.5005-1.7808 0-3.4595-.7749-4.605-2.126-.3564-.4199-.9873-.4717-1.4097-.1157-.4209.3574-.4731.9883-.1157 1.4097 1.5264 1.7998 3.7607 2.832 6.1304 2.832 2.5684 0 5.0098-1.2407 6.5313-3.3188.5528-.7546.9509-1.5886 1.212-2.4656l.4403.6219c.1953.2754.5039.4224.8174.4224.1992 0 .4014-.0596.5771-.1841.4502-.3191.5576-.9432.2383-1.3938z"/><path d="m8.4756 9.8691c-.3198-.4511-.9439-.5581-1.3941-.2387l-.9137.6468c.196-.6646.4958-1.2963.9137-1.867 1.1641-1.5889 2.9566-2.5005 4.9185-2.5005 1.7813 0 3.46.7749 4.6055 2.126.3574.4204.9883.4731 1.4092.1157.4219-.3574.4736-.9883.1162-1.4097-1.5264-1.7998-3.7608-2.832-6.1309-2.832-2.5679 0-5.0098 1.2407-6.5317 3.3188-.5525.7544-.9504 1.5886-1.2114 2.4661l-.4405-.6223c-.3198-.4512-.9434-.5581-1.394-.2388s-.5576.9434-.2388 1.394l1.9312 2.728c.1953.2754.5039.4224.8174.4224.1997 0 .4014-.0596.5767-.1836l2.728-1.9312c.4506-.3193.5575-.9433.2387-1.394z"/></g></g><g id="upload"/><g id="download"/><g id="menu"/><g id="down"/><g id="up"/><g id="backward"/><g id="forward"/><g id="zoom_out"/><g id="zoom_in"/><g id="search"/><g id="home"/><g id="user"/><g id="guide"/></svg>
                        </td>
                        <td class="px-4 py-2">
                            <span
                                class="px-2.5 py-0.5 rounded text-xs font-semibold
                                <?php if($invoice['status'] === 'draft'): ?> bg-draftbg text-lightgray border border-bordercolor
                                <?php elseif($invoice['status'] === 'outstanding'): ?> bg-outstandingbg text-outstandingtext
                                <?php elseif($invoice['status'] === 'paid'): ?> bg-paidbg text-paidtext <?php endif; ?>">
                                <?php echo e(ucfirst($invoice['status'])); ?>

                            </span>
                        </td>
                        <td class="px-4 py-2 text-lightgray text-sm"><?php echo e($invoice['invoice_number']); ?></td>
                        <td class="px-4 py-2 text-lightgray text-sm"><?php echo e($invoice['customer']['email']); ?></td>
                        <td class="px-4 py-2 text-lightgray text-sm whitespace-nowrap"><?php echo e($invoice['formatted_due_date']); ?></td>
                        <td class="px-4 py-2 text-lightgray text-sm whitespace-nowrap"><?php echo e($invoice['formatted_created_at']); ?></td>
                        <td class=" justify-center flex items-center px-4 py-2 ">
                            <div x-data="{ open: false }" @click.away="open = false">
                                <button @click="open = !open" class="text-blue-500">
                                    <svg aria-hidden="false" aria-label="Row actions" width="12" height="12"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                        class="⚙   as55 as56 as57 as14 as5i as7a as7b aspj ⚙1c9rufg">
                                        <path
                                            d="M6 7.25a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Zm4.5 0a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Zm-9 0a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z">
                                        </path>
                                    </svg>
                                </button>
                                <ul x-show="open"
                                    class="absolute bg-white shadow-lg py-2 pr-6 pl-2 rounded-md border border-bordercolor z-10">
                                    <li><a href="#"
                                            class="text-primarycolor hover:text-darkblack font-medium text-sm pb-1">Download</a>
                                    </li>
                                    <li><a href="#" wire:click="delete(<?php echo e($invoice->id); ?>)" onclick="return confirm('Are you sure you want to delete this invoice?')"
                                            class="text-red-600 hover:text-darkblack font-medium text-sm pb-1">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        <?php echo e($invoices->links()); ?>

    </div>
</div>
<?php /**PATH D:\xampp8.2\htdocs\Laravel-Livewire-Test-main\resources\views/livewire/invoice-dashboard.blade.php ENDPATH**/ ?>