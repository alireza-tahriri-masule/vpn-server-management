<header class="bg-[#202124] rounded-lg m-4 px-8 py-4 flex items-center justify-between">
    <div class="flex items-center justify-between w-full">
        <div class="flex items-center space-x-6">
            <div class="flex items-center space-x-2">
                <span class="w-2 h-2 bg-red-600 rounded-full"></span>
                <span class="w-2 h-2 bg-yellow-600 rounded-full"></span>
                <span class="w-2 h-2 bg-green-600 rounded-full"></span>
            </div>
            <div class="flex items-center space-x-1">
                <div class="p-1 text-orange-100 bg-orange-400 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" x="0" y="0"
                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path
                                d="M19.303 10.071c-.089-4.032-3.337-7.284-7.316-7.284-4.035 0-7.317 3.344-7.317 7.454 0 .27.014.54.042.807C2.561 11.66 1 13.67 1 16.034c0 2.855 2.283 5.178 5.09 5.178h11.264c3.113 0 5.646-2.578 5.646-5.747 0-2.428-1.512-4.575-3.697-5.395Zm-1.949 9.141H6.09c-1.704 0-3.09-1.425-3.09-3.178 0-1.691 1.285-3.085 2.925-3.174a.999.999 0 0 0 .915-1.244 5.605 5.605 0 0 1-.17-1.375c0-3.007 2.385-5.454 5.317-5.454s5.318 2.446 5.318 5.454c0 .163-.008.325-.021.484a1 1 0 0 0 .794 1.067c1.693.35 2.923 1.895 2.923 3.673 0 2.066-1.636 3.747-3.646 3.747Z"
                                fill="#ffffff" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div class="text-lg font-medium">CloudWay</div>
            </div>
            <livewire:menu :menuItems="[
                ['title' => 'Active Accounts', 'isActive' => true],
                ['title' => 'Inactive Accounts', 'isActive' => false]
            ]" />
        </div>
        <livewire:button buttonClass="px-4 py-2 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-500" buttonText="Create Configuration" />
    </div>
</header>
