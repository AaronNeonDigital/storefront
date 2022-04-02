<div>
    <nav class="shadow-lg border-t-4 border-blue-500 z-49 relative">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                @if ($this->allCollection)
                        
                        @foreach ($this->allCollection as $collection)
                        <div class="flex items-center z-50" x-data="{ dropDownOpen: false }" @click.away="dropDownOpen = false">
                            <a @click="dropDownOpen = true" href="#" class="py-4 px-2 text-blue-500 font-semibold">{{$collection->translateAttribute('name')}}</a> {{--Parent--}}
                            
                            @if ($collection->children)
                                <ul x-cloak x-show="dropDownOpen" class="absolute top-12 left-0 w-full flex-wrap items-center bg-white rounded-b-lg shadow-lg py-3 px-4 small">
                                    
                                    <x-storefront::mega-menu-sub :items="$collection->children" first="true"/> 
                                </ul>
                            @endif
                        </div>
                        
                        @endforeach
                @endif                
            </div>
        </div>    
        
    </nav>
</div>