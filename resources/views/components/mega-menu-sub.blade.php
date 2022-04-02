@props(['first' => false])
<li class="{{$first ? "grid grid-cols-6 align-top" : ""}}">
    @foreach ($items as $item)
        <div class="hidden md:flex z-49 w-full">
            <div class="inline-block">
                @if (isset($item->defaultUrl->slug))
                    <a href="{{ route('collection.view', $item->defaultUrl->slug) }}" class="py-2 px-1 flex align-middle flex-1 {{$first ? "font-semibold" : "text-xs"}}">
                @else
                    <a href="#" class="py-2 px-1 flex align-middle flex-1 {{$first ? "font-semibold" : "text-xs"}}">
                @endif
                {{-- <a href="{{ route('collection.view', $item->defaultUrl->slug) }}" class="py-2 px-1 flex align-middle flex-1 {{$first ? "font-semibold" : "text-xs"}}"> --}}
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="caret-right"
                        class="w-2 my-auto -rotate-90 mx-2"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                        >
                        <path
                            fill="currentColor"
                            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                        ></path>
                    </svg>
                     {{$item->translateAttribute('name')}}
                </a>
                @if($item->children->count())
                    @if ($item->children)
                        <ul class="w-96 bg-white rounded-b-lg py-1 px-4 2ndchild">
                            <x-storefront::mega-menu-sub :items="$item->children"/> 
                        </ul>
                    @endif
            @endif
            </div>
        </div>
    @endforeach
</li>