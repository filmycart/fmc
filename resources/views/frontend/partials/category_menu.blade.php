<div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar">
    <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
        @foreach (get_level_zero_categories()->take(10) as $key => $category)
            @php
                $category_name = $category->getTranslation('name');
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
                
                <div class="sub-menu shadow-none">
                    <ul class="dd-sub-menu">
                        <li>
                            <a href="http://fmc.test/category/honey">Honey</a>
                            <ul class="cus-sub-menu">
                                <li><a href="http://fmc.test/category/honey">Honey</a></li>
                                <li><a href="http://fmc.test/category/Kashmiri-White-WV5HM">Kashmiri White</a></li>
                                <li><a href="http://fmc.test/category/Multiflower-jLv9w">Multiflower</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://fmc.test/category/Kashmiri-White-WV5HM">Kashmiri White</a>
                            <ul class="cus-sub-menu">
                                <li><a href="http://fmc.test/category/honey">Honey</a></li>
                                <li><a href="http://fmc.test/category/Kashmiri-White-WV5HM">Kashmiri White</a></li>
                                <li><a href="http://fmc.test/category/Multiflower-jLv9w">Multiflower</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://fmc.test/category/Multiflower-jLv9w">Multiflower</a>
                            <ul class="cus-sub-menu">
                                <li><a href="http://fmc.test/category/honey">Honey</a></li>
                                <li><a href="http://fmc.test/category/Kashmiri-White-WV5HM">Kashmiri White</a></li>
                                <li><a href="http://fmc.test/category/Multiflower-jLv9w">Multiflower</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                {{-- <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                    <div class="c-preloader text-center absolute-center">
                        <i class="las la-spinner la-spin la-3x opacity-90"></i>
                    </div>
                </div> --}}

            </li>
        @endforeach
    </ul>
</div>
