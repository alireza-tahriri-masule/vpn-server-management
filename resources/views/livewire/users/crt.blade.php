<div x-show="sf" class="bg-[#202124] m-4 p-4 rounded-lg text-sm space-y-6">
    <h2 class="text-lg font-semibold">Create Configuration</h2>
    @if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label for="uuid" class="block mb-1">UUID</label>
                <div class="flex items-center space-x-2">
                    <input type="text" id="uuid" wire:model.live="uuid"
                        class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg"
                        placeholder="Enter UUID" readonly>
                    <button wire:click="generateUuid" type="button"
                        class="flex items-center p-2 border rounded-lg text-emerald-100 bg-emerald-500 border-emerald-600">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="w-5 h-5" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                            xml:space="preserve">
                            <g>
                                <path
                                    d="M12 2a10.032 10.032 0 0 1 7.122 3H16a1 1 0 0 0-1 1 1 1 0 0 0 1 1h4.143A1.858 1.858 0 0 0 22 5.143V1a1 1 0 0 0-1-1 1 1 0 0 0-1 1v2.078A11.981 11.981 0 0 0 .05 10.9a1.007 1.007 0 0 0 1 1.1.982.982 0 0 0 .989-.878A10.014 10.014 0 0 1 12 2ZM22.951 12a.982.982 0 0 0-.989.878A9.986 9.986 0 0 1 4.878 19H8a1 1 0 0 0 1-1 1 1 0 0 0-1-1H3.857A1.856 1.856 0 0 0 2 18.857V23a1 1 0 0 0 1 1 1 1 0 0 0 1-1v-2.078A11.981 11.981 0 0 0 23.95 13.1a1.007 1.007 0 0 0-1-1.1Z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <label for="fullname" class="block mb-1">Fullname</label>
                <input type="text" id="fullname" wire:model.live="n"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg"
                    placeholder="Enter Fullname">
            </div>
            <div>
                <label for="email" class="block mb-1">Email</label>
                <input type="email" id="email" wire:model.live="e"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg"
                    placeholder="Enter Email">
            </div>
            <div>
                <label for="password" class="block mb-1">Password</label>
                <input type="text" id="password" wire:model.live="p"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg"
                    placeholder="Enter Password">
            </div>
            <div>
                <label for="phone" class="block mb-1">Phone No.</label>
                <input type="text" id="phone" wire:model.live="ph"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg"
                    placeholder="Enter Phone No.">
            </div>
            <div>
                <label for="role" class="block mb-1">Role</label>
                <select id="role" wire:model.live="r"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg">
                    <option>Select Role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div>
                <label for="trialEnd" class="block mb-1">Trial End</label>
                <input type="date" id="trialEnd" wire:model.live="t_e"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg">
            </div>
            <div>
                <label for="plan" class="block mb-1">Plan</label>
                <select id="plan" wire:model.live="pl"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg">
                    <option>Select Plan</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
                </select>
            </div>
            <div>
                <label for="subscriptionStart" class="block mb-1">Subscription Start</label>
                <input type="date" id="subscriptionStart" wire:model.live="s_s"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg">
            </div>
            <div>
                <label for="subscriptionEnd" class="block mb-1">Subscription End</label>
                <input type="date" id="subscriptionEnd" wire:model.live="s_e"
                    class="w-full p-2 text-white bg-[#202124] border border-[#353740] rounded-lg">
            </div>
        </div>
        <div class="flex mt-4 space-x-2">
            <button type="submit" class="px-4 py-2 bg-blue-500 rounded hover:bg-blue-600">Save</button>
            <button type="button" x-on:click="sf = false"
                class="px-4 py-2 bg-red-500 rounded hover:bg-red-600">Cancel</button>
        </div>
    </form>
</div>
