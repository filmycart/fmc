<div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar">
    <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
        {{-- {{dd(get_level_zero_categories())}} --}}
        @php
            $category_name = App\Models\Category::where('parent_id', 0)->take(10)->get();
        @endphp
            
        @foreach ($category_name as $key => $category)
            @php
              $category_name = $category->name;
                $sub_category_name = App\Models\Category::where('parent_id', $category->id)->get();
            //    dd($sub_category_name)

            @endphp
            <li class="category-nav-element" data-id="{{ $category->id }}" style="display:inline;float:left;list-style-position: inside;">
                <a href="{{ route('products.category', $category->slug) }}"
                    class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                    <img class="cat-image lazyload mr-2" src="{{ static_asset('assets/img/placeholder.jpg') }}"
                        data-src="{{ uploaded_asset($category->icon) }}" width="100" alt="{{ $category_name }}"
                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                    <br>    
                    <div class="cat-name has-transition">{{ $category_name }}</div>
                </a>
                {{-- {{count($sub_category_name)}} --}}
                @if(count($sub_category_name) > 0)
                <div class="sub-menu shadow-none">
                    <ul class="dd-sub-menu">
                        @foreach ($sub_category_name as $sub_key => $sub_category)
                        @php
                            $sub_child_category_name = App\Models\Category::where('parent_id', $sub_category->id)->get();
                        @endphp
                        <li class="{{count($sub_child_category_name) > 0  ? 'has-sub-menu' : ''}}">
                                <a href="/category/{{$sub_category->slug}}">{{$sub_category->name}}</a>
                            
                            @foreach ($sub_child_category_name as $sub_child_key => $sub_child_category)
                                <ul class="cus-sub-menu">
                                    <li><a href="/category/{{$sub_child_category->slug}}">{{$sub_child_category->name}}</a></li>
                                </ul>
                            @endforeach
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                    <div class="c-preloader text-center absolute-center">
                        <i class="las la-spinner la-spin la-3x opacity-90"></i>
                    </div>
                </div> --}}

            </li>
        @endforeach
    </ul>
</div>
