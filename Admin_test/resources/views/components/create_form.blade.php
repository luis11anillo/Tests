<div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900 px-1 pt-2">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600 p-2 bg-blue-50 rounded-md">All the fields below are required and remember to use a permanent address where you can receive mail.</p>   
        <div class="mt-10 grid grid-cols-6 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">ID/CC.<span class="text-red-500">*</span></label>
                <div class="mt-2">
                    <input 
                        type="number" 
                        name="CC" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required>
                </div>
            </div>

            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">Full name <span class="text-red-500">*</span></label>
                <div class="mt-2">
                    <input 
                        type="text" 
                        name="name" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Email address <span class="text-red-500">*</span></label>
                <div class="mt-2">
                    <input 
                        name="email" 
                        type="email" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required>
                </div>
            </div>

            <div class="sm:col-span-2">
            <label class="block text-sm font-medium leading-6 text-gray-900">Status <span class="text-red-500">*</span></label>
            <div class="mt-2">
                <select name="status" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option>Active</option>
                <option>Inactive</option>
                <option>Suspended</option>
                </select>
            </div>
            </div>

            <div class="col-span-full">
                <label class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                <div class="mt-2">
                    <input 
                        type="text" 
                        name="address" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required>
                </div>
            </div>

            <div class="sm:col-span-2 sm:col-start-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">City</label>
                <div class="mt-2">
                    <input 
                        type="text" 
                        name="city" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required>
                </div>
            </div>

            <div class="sm:col-span-2">
                <label class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                <div class="mt-2">
                    <input 
                        type="text" 
                        name="phone" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required>
                </div>
            </div>

            <div class="sm:col-span-2">
                <label class="block text-sm font-medium leading-6 text-gray-900">Birthday</label>
                <div class="mt-2">
                    <input 
                        type="date" 
                        name="birthday"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
        </div>
    </div>
</div>