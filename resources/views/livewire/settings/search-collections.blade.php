<div>
    
    <div 
        x-data="{
                search: '',
                open: false,
                items: {{$this->allCollections}},
        
                get filteredItems() {
                    return this.items.filter(
                        i => i.toLowerCase().startsWith(this.search.toLowerCase())
                    )
                }
            }"
            class="py-2 flex flex-col relative overflow-hidden sm:py-12">
        <input x-on:click="open = !open" type="search" x-model="search" placeholder="Search collections here..." class="py-3 px-4 w-full rounded shadow bg-gray-100 focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100">

        
        <ul x-show="open" x-on:click.outside="open = !open"  x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate"
                x-transition:enter-end="opacity-100 translate"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate"
                x-transition:leave-end="opacity-0 translate"  class="w-full bg-gray-300 rounded-b-md shadow">
                <template x-for="item in filteredItems" :key="item">
                    <li class="w-full text-gray-700 px-4 py-2 mt-1 bg-gray-300 last:rounded-b-md border-t-2" x-text="item" x-on:click="$wire.selectCollection(item), open = false">
                    </li>
                </template>
            </ul>
        
        </div>
</div>