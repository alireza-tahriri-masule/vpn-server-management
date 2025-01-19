<ul class="flex items-center space-x-6 text-sm">
    @foreach($menuItems as $item)
        <li class="{{ $item['isActive'] === true ? 'bg-[#353740] px-4 py-2 rounded-lg' : '' }}">
            <a href="#">{{ $item['title'] }}</a>
        </li>
    @endforeach
</ul>
