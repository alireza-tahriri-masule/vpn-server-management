<div class="overflow-x-auto bg-[#202124] rounded-lg m-4">
    <table class="w-full text-sm text-white border-collapse table-auto">
        <thead>
            <tr class="text-gray-300 bg-[#202124]">
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">UUID</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Fullname</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Email</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Password</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Phone No.</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Role</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Trial End</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Plan</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Subscription Status</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Subscription Start</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Subscription End</th>
                <th class="px-4 py-2 text-left border border-[#353740] whitespace-nowrap">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $userIndex => $user)
            <tr class="border-b border-[#353740] {{ $userIndex % 2 != 0 ? 'bg-[#202124]' : 'bg-[#353740]' }} h-full">
                <td class="px-4 py-2 whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 rounded-lg bg-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M5.972 22.285a1 1 0 0 1-.515-1.857C9 18.3 9 13.73 9 11a3 3 0 0 1 6 0 1 1 0 0 1-2 0 1 1 0 0 0-2 0c0 2.947 0 8.434-4.514 11.143a1 1 0 0 1-.514.142Zm4.963 1.421c2.282-2.3 3.615-5.534 3.961-9.621A1 1 0 0 0 13.985 13a.983.983 0 0 0-1.081.911c-.311 3.657-1.419 6.4-3.388 8.381a1 1 0 0 0 1.419 1.41Zm5.2-.186a17.793 17.793 0 0 0 1.508-3.181 1 1 0 0 0-1.881-.678 15.854 15.854 0 0 1-1.338 2.821 1 1 0 0 0 1.711 1.038Zm2.365-6.329A31.459 31.459 0 0 0 19 11 7 7 0 0 0 6.787 6.333a1 1 0 1 0 1.489 1.334A5 5 0 0 1 17 11a29.686 29.686 0 0 1-.462 5.809 1 1 0 0 0 .79 1.172.979.979 0 0 0 .193.019 1 1 0 0 0 .979-.809ZM7 11a5 5 0 0 1 .069-.833A1 1 0 1 0 5.1 9.833 6.971 6.971 0 0 0 5 11c0 4.645-1.346 7-4 7a1 1 0 0 0 0 2c3.869 0 6-3.2 6-9Zm13.7 12.414A29.76 29.76 0 0 0 23 11a10.865 10.865 0 0 0-1.1-4.794 1 1 0 1 0-1.8.875A8.9 8.9 0 0 1 21 11a27.91 27.91 0 0 1-2.119 11.586 1 1 0 0 0 .5 1.324.984.984 0 0 0 .413.09 1 1 0 0 0 .906-.586ZM3 14v-3a9.01 9.01 0 0 1 9-9 8.911 8.911 0 0 1 5.4 1.8 1 1 0 0 0 1.2-1.6A10.9 10.9 0 0 0 12 0 11.013 11.013 0 0 0 1 11v3a1 1 0 0 0 2 0Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->uuid }}</div>
                    </div>
                </td>
                <td class="px-4 py-2 whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 bg-indigo-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <g data-name="01 align center">
                                        <path
                                            d="M21 24h-2v-5.043A2.96 2.96 0 0 0 16.043 16H7.957A2.96 2.96 0 0 0 5 18.957V24H3v-5.043A4.963 4.963 0 0 1 7.957 14h8.086A4.963 4.963 0 0 1 21 18.957ZM12 12a6 6 0 1 1 6-6 6.006 6.006 0 0 1-6 6Zm0-10a4 4 0 1 0 4 4 4 4 0 0 0-4-4Z"
                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->n }}</div>
                    </div>
                </td>
                <td class="px-4 py-2 truncate whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 rounded-lg bg-amber-500">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M19 1H5a5.006 5.006 0 0 0-5 5v12a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5V6a5.006 5.006 0 0 0-5-5ZM5 3h14a3 3 0 0 1 2.78 1.887l-7.658 7.659a3.007 3.007 0 0 1-4.244 0L2.22 4.887A3 3 0 0 1 5 3Zm14 18H5a3 3 0 0 1-3-3V7.5l6.464 6.46a5.007 5.007 0 0 0 7.072 0L22 7.5V18a3 3 0 0 1-3 3Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->e }}</div>
                    </div>
                </td>
                <td class="px-4 py-2 truncate whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 bg-red-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M19 8.424V7A7 7 0 0 0 5 7v1.424A5 5 0 0 0 2 13v6a5.006 5.006 0 0 0 5 5h10a5.006 5.006 0 0 0 5-5v-6a5 5 0 0 0-3-4.576ZM7 7a5 5 0 0 1 10 0v1H7Zm13 12a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3v-6a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                    <path d="M12 14a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1Z" fill="#ffffff"
                                        opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->p }}</div>
                    </div>
                </td>
                <td class="px-4 py-2 whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 bg-blue-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M15.045 0h-6.09A5.006 5.006 0 0 0 4 4.999v14c0 2.757 2.243 5 5 5h6c2.757 0 5-2.243 5-5V5a5.007 5.007 0 0 0-4.955-5ZM18 18.999c0 1.654-1.346 3-3 3H9c-1.654 0-3-1.346-3-3V5a3.006 3.006 0 0 1 2.411-2.942l.694 1.389A1 1 0 0 0 10 4h4c.379 0 .725-.214.895-.553l.694-1.389A3.005 3.005 0 0 1 18 5v14Zm-5 1h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->ph }}</div>
                    </div>
                </td>
                <td class="px-4 py-2 whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 bg-teal-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="m20.572 4.312-6-3.6a4.987 4.987 0 0 0-5.145 0l-6 3.6A5.027 5.027 0 0 0 1 8.6v6.8a5.027 5.027 0 0 0 2.427 4.288l6 3.6a4.985 4.985 0 0 0 5.145 0l6-3.6A5.027 5.027 0 0 0 23 15.4V8.6a5.027 5.027 0 0 0-2.428-4.288ZM10.457 2.428a2.989 2.989 0 0 1 3.086 0l6 3.6a2.978 2.978 0 0 1 .46.341l-8 4.8-8-4.8a2.931 2.931 0 0 1 .46-.341Zm-6 15.545A3.015 3.015 0 0 1 3 15.4V8.6a2.881 2.881 0 0 1 .039-.475L11 12.9v8.928a3.022 3.022 0 0 1-.543-.257ZM21 15.4a3.017 3.017 0 0 1-1.457 2.573l-6 3.6a3.022 3.022 0 0 1-.543.257V12.9l7.961-4.776A2.881 2.881 0 0 1 21 8.6Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->r == 'u' ? 'User' : 'Admin' }}</div>
                    </div>
                </td>
                <td
                    class="px-4 py-2 text-{{ \Carbon\Carbon::now()->lessThanOrEqualTo($user->t_e) ? 'green' : 'red' }}-500 whitespace-nowrap">
                    Trial expires on {{ \Carbon\Carbon::parse($user->t_e)->format('Y/F/d') }} - {{
                    \App\Helpers\DateHelper::translateMonthToEnglish(jdate($user->t_e)->format('%Y/%B/%d')) }}
                </td>
                <td class="px-4 py-2 whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 bg-pink-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M23 22H5a3 3 0 0 1-3-3V1a1 1 0 0 0-2 0v18a5.006 5.006 0 0 0 5 5h18a1 1 0 0 0 0-2Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                    <path
                                        d="M6 20a1 1 0 0 0 1-1v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 1 1ZM10 10v9a1 1 0 0 0 2 0v-9a1 1 0 0 0-2 0ZM15 13v6a1 1 0 0 0 2 0v-6a1 1 0 0 0-2 0ZM20 9v10a1 1 0 0 0 2 0V9a1 1 0 0 0-2 0ZM6 9a1 1 0 0 0 .707-.293l3.586-3.586a1.025 1.025 0 0 1 1.414 0l2.172 2.172a3 3 0 0 0 4.242 0l5.586-5.586A1 1 0 0 0 22.293.293l-5.586 5.585a1 1 0 0 1-1.414 0l-2.172-2.171a3 3 0 0 0-4.242 0L5.293 7.293A1 1 0 0 0 6 9Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ ['w' => 'Weekly', 'm' => 'Monthly', 'y' => 'Yearly'][$user->pl] }}</div>
                    </div>
                </td>
                <td class="px-4 py-2 text-{{ $user->getIsActiveAttribute() ? 'green' : 'red' }}-500 whitespace-nowrap">
                    @if ($user->getIsActiveAttribute() === true)
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 bg-green-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M12 24a5.498 5.498 0 0 1-4.176-1.92 5.494 5.494 0 0 1-4.31-1.595 5.497 5.497 0 0 1-1.595-4.31C.707 15.136-.001 13.617-.001 12s.708-3.136 1.92-4.175a5.496 5.496 0 0 1 1.595-4.31 5.522 5.522 0 0 1 4.31-1.595 5.498 5.498 0 0 1 8.352 0 5.497 5.497 0 0 1 5.905 5.905c1.212 1.039 1.92 2.558 1.92 4.175s-.708 3.136-1.92 4.175a5.496 5.496 0 0 1-1.595 4.31 5.491 5.491 0 0 1-4.31 1.595A5.498 5.498 0 0 1 12 24Zm-3.274-4.095.37.549a3.5 3.5 0 0 0 5.808 0l.37-.549.649.126a3.498 3.498 0 0 0 4.107-4.106l-.127-.65.55-.37a3.5 3.5 0 0 0 0-5.808l-.55-.37.127-.65a3.498 3.498 0 0 0-4.107-4.106l-.649.126-.37-.549a3.5 3.5 0 0 0-5.808 0l-.37.549-.649-.126A3.5 3.5 0 0 0 3.97 8.077l.127.65-.55.37a3.5 3.5 0 0 0 0 5.808l.55.37-.127.65a3.498 3.498 0 0 0 4.107 4.106l.649-.126Zm3.184-4.485 5.793-5.707-1.404-1.425-5.809 5.701-2.793-2.707-1.393 1.437 2.782 2.696c.391.391.903.585 1.416.585s1.021-.193 1.407-.58Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>Active</div>
                    </div>
                    @else
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 bg-red-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M16 8a1 1 0 0 0-1.414 0L12 10.586 9.414 8A1 1 0 0 0 8 9.414L10.586 12 8 14.586A1 1 0 0 0 9.414 16L12 13.414 14.586 16A1 1 0 0 0 16 14.586L13.414 12 16 9.414A1 1 0 0 0 16 8Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                    <path
                                        d="M12 0a12 12 0 1 0 12 12A12.013 12.013 0 0 0 12 0Zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1-10 10Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>Expired</div>
                    </div>
                    @endif
                </td>
                <td class="px-4 py-2 whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 rounded-lg bg-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M8 12H6c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2Zm-2 4v-2h2v2H6ZM19 2h-1V1a1 1 0 1 0-2 0v1H8V1a1 1 0 1 0-2 0v1H5C2.243 2 0 4.243 0 7v12c0 2.757 2.243 5 5 5h14c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5ZM5 4h14c1.654 0 3 1.346 3 3v1H2V7c0-1.654 1.346-3 3-3Zm14 18H5c-1.654 0-3-1.346-3-3v-9h20v9c0 1.654-1.346 3-3 3Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->s_s }} - {{
                            \App\Helpers\DateHelper::translateMonthToEnglish(jdate($user->s_s)->format('%Y/%B/%d'))
                            }}</div>
                    </div>
                </td>
                <td class="px-4 py-2 whitespace-nowrap">
                    <div class="flex items-center h-full space-x-1">
                        <div class="p-1 rounded-lg bg-rose-500">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M8 12H6c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2Zm-2 4v-2h2v2H6ZM19 2h-1V1a1 1 0 1 0-2 0v1H8V1a1 1 0 1 0-2 0v1H5C2.243 2 0 4.243 0 7v12c0 2.757 2.243 5 5 5h14c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5ZM5 4h14c1.654 0 3 1.346 3 3v1H2V7c0-1.654 1.346-3 3-3Zm14 18H5c-1.654 0-3-1.346-3-3v-9h20v9c0 1.654-1.346 3-3 3Z"
                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div>{{ $user->s_e }} -{{
                            \App\Helpers\DateHelper::translateMonthToEnglish(jdate($user->s_e)->format('%Y/%B/%d'))
                            }}</div>
                    </div>
                </td>
                <td class="flex items-center px-4 py-2 space-x-2 whitespace-nowrap">
                    <button
                        class="px-3 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Edit
                    </button>
                    <button
                        class="px-3 py-2 text-white bg-red-500 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
