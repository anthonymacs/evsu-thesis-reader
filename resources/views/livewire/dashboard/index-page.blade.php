<x-layouts.app title="Dashboard">

    {{-- Stats Cards --}}
    <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Overview</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center space-x-4">
                <div class="flex-shrink-0 bg-red-100 text-university-red rounded-lg p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Total Documents</p>
                    <p class="text-2xl font-semibold text-gray-800">1,248</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center space-x-4">
                <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-lg p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Registered Users</p>
                    <p class="text-2xl font-semibold text-gray-800">382</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center space-x-4">
                <div class="flex-shrink-0 bg-yellow-100 text-yellow-600 rounded-lg p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Pending Approvals</p>
                    <p class="text-2xl font-semibold text-gray-800">7</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex items-center space-x-4">
                <div class="flex-shrink-0 bg-green-100 text-green-600 rounded-lg p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5l7 7-7 7H7L3 12V7a4 4 0 014-4z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Categories</p>
                    <p class="text-2xl font-semibold text-gray-800">14</p>
                </div>
            </div>

        </div>
    </div>

    {{-- Recent Documents & Pending Approvals --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

        {{-- Recent Documents --}}
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-gray-700">Recent Documents</h3>
                <a href="#" class="text-sm text-university-red hover:underline">View all</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="text-xs text-gray-400 uppercase border-b border-gray-100">
                            <th class="pb-3 pr-4 font-medium">Title</th>
                            <th class="pb-3 pr-4 font-medium">Category</th>
                            <th class="pb-3 pr-4 font-medium">Uploaded by</th>
                            <th class="pb-3 font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr>
                            <td class="py-3 pr-4 text-gray-800 font-medium">Curriculum Framework 2025</td>
                            <td class="py-3 pr-4 text-gray-500">Academic</td>
                            <td class="py-3 pr-4 text-gray-500">M. Santos</td>
                            <td class="py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-4 text-gray-800 font-medium">Enrollment Policy AY2025</td>
                            <td class="py-3 pr-4 text-gray-500">Administrative</td>
                            <td class="py-3 pr-4 text-gray-500">R. Valdez</td>
                            <td class="py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-4 text-gray-800 font-medium">Research Grant Guidelines</td>
                            <td class="py-3 pr-4 text-gray-500">Research</td>
                            <td class="py-3 pr-4 text-gray-500">L. Reyes</td>
                            <td class="py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-4 text-gray-800 font-medium">Faculty Handbook Rev.3</td>
                            <td class="py-3 pr-4 text-gray-500">HR</td>
                            <td class="py-3 pr-4 text-gray-500">A. Cruz</td>
                            <td class="py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Rejected</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-4 text-gray-800 font-medium">Student Affairs Manual</td>
                            <td class="py-3 pr-4 text-gray-500">Student</td>
                            <td class="py-3 pr-4 text-gray-500">P. Gomez</td>
                            <td class="py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Pending Account Approvals --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-gray-700">Pending Approvals</h3>
                <a href="#" class="text-sm text-university-red hover:underline">View all</a>
            </div>
            <ul class="divide-y divide-gray-50">
                <li class="py-3 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-university-red text-white flex items-center justify-center text-sm font-semibold flex-shrink-0">JD</div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-800 truncate">Jose Dela Cruz</p>
                        <p class="text-xs text-gray-400">Faculty · 2h ago</p>
                    </div>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                </li>
                <li class="py-3 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-university-red text-white flex items-center justify-center text-sm font-semibold flex-shrink-0">MR</div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-800 truncate">Maria Ramos</p>
                        <p class="text-xs text-gray-400">Staff · 5h ago</p>
                    </div>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                </li>
                <li class="py-3 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-university-red text-white flex items-center justify-center text-sm font-semibold flex-shrink-0">BT</div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-800 truncate">Ben Torres</p>
                        <p class="text-xs text-gray-400">Faculty · Yesterday</p>
                    </div>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                </li>
            </ul>
        </div>

    </div>

    {{-- Recent Activity --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h3 class="text-base font-semibold text-gray-700 mb-4">Recent Activity</h3>
        <ul class="space-y-4">
            <li class="flex items-start space-x-3">
                <span class="mt-1.5 w-2.5 h-2.5 rounded-full bg-green-500 flex-shrink-0"></span>
                <div>
                    <p class="text-sm text-gray-700"><span class="font-medium">M. Santos</span> uploaded <span class="font-medium">Curriculum Framework 2025.pdf</span></p>
                    <p class="text-xs text-gray-400 mt-0.5">2 hours ago</p>
                </div>
            </li>
            <li class="flex items-start space-x-3">
                <span class="mt-1.5 w-2.5 h-2.5 rounded-full bg-blue-500 flex-shrink-0"></span>
                <div>
                    <p class="text-sm text-gray-700"><span class="font-medium">Admin</span> approved account for <span class="font-medium">L. Reyes</span></p>
                    <p class="text-xs text-gray-400 mt-0.5">4 hours ago</p>
                </div>
            </li>
            <li class="flex items-start space-x-3">
                <span class="mt-1.5 w-2.5 h-2.5 rounded-full bg-red-500 flex-shrink-0"></span>
                <div>
                    <p class="text-sm text-gray-700"><span class="font-medium">Admin</span> rejected document <span class="font-medium">Faculty Handbook Rev.3</span></p>
                    <p class="text-xs text-gray-400 mt-0.5">Yesterday at 3:42 PM</p>
                </div>
            </li>
            <li class="flex items-start space-x-3">
                <span class="mt-1.5 w-2.5 h-2.5 rounded-full bg-yellow-500 flex-shrink-0"></span>
                <div>
                    <p class="text-sm text-gray-700"><span class="font-medium">P. Gomez</span> added <span class="font-medium">Student Affairs Manual</span> to Read Later</p>
                    <p class="text-xs text-gray-400 mt-0.5">Yesterday at 1:15 PM</p>
                </div>
            </li>
            <li class="flex items-start space-x-3">
                <span class="mt-1.5 w-2.5 h-2.5 rounded-full bg-green-500 flex-shrink-0"></span>
                <div>
                    <p class="text-sm text-gray-700"><span class="font-medium">R. Valdez</span> uploaded <span class="font-medium">Enrollment Policy AY2025.docx</span></p>
                    <p class="text-xs text-gray-400 mt-0.5">2 days ago</p>
                </div>
            </li>
        </ul>
    </div>

</x-layouts.app>