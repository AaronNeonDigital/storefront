<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="flex justify-between px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Storefront settings</h1>
    </div>

    <div class="px-4 mx-auto mt-8 max-w-7xl sm:px-6 md:px-8">
        <div class="flex flex-row gap-x-8">
            <div class="w-full">
                <div class="p-4 bg-white rounded-lg ">
                    <h3 class="mt-4 ml-4 text-lg font-semibold text-gray-900">Featured page</h3>
                    <div class="ml-4 text-blue-500 text-sm">
                        Select a collection type you wish to display on the feature page/dashboard. This will display all products with this collection type
                        on the feature page.
                    </div>
                    <div class="ml-4 text-sm">    
                        Currently set as: <span class="font-semibold">{{  $settings?->home_key_word }}</span> Last updated <span class="font-semibold">{{  $settings?->updated_at }}</span>
                    </div>
                    <div class="ml-4">
                        @livewire('search-collections')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>