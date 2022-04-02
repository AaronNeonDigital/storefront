<div x-data="{ cartOpen: false , isOpen: false }">
    <nav class="shadow-lg border-t-4 border-blue-500">
        <div class="max-w-8xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <img src="https://docs.getcandy.io/getcandy_icon.svg"
                                alt="Logo" class="rounded-full h-8 w-8 mr-2" /><span
                                class="font-semibold text-gray-500 text-lg">GetCandy</span>
                        </a>
                    </div>
                </div>              

                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-4 px-2 text-blue-500 font-semibold">Home</a>
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Marketplace</a>
                    <a href="#"
                        class="bg-purple-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-purple-800 transition duration-300">Deals</a>
                </div>
                <div class="mr-10 flex md:hidden">
                    <button class="inline-flex items-center justify-center p-2 rounded-md text-dark">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="order-2 md:order-3 flex items-center" id="nav-content">

                    @livewire('cart')                    
    
                </div>
            </div>
        </div>
    </nav>
    
    @livewire('mega-menu')
</div>