<div>
    <div class="header-category d-none d-lg-block">
        <a href="#" class="cat-toggle"><i class="fas fa-bars"></i>Toutes les categories<i class="fas fa-angle-down"></i></a>
        <ul class="category-menu">
                @foreach ($category as $value )
                <li><a href="{{route('category.product', $value->id)}}"><i class="flaticon-cherry"></i> {{$value->name}}</a></li>
                @endforeach

        </ul>
    </div>
</div>
