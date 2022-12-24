@extends('layout.app')

@section('content')
<section class="blog-area pt-70 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title section-title-two text-center mb-50">
                    <h2 class="title">Nos Articles</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            @foreach ($articles as $article )
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="blog-post-item mb-30">
                    <div class="blog-post-thumb">
                        <a href="{{route('article.detail', $article->id)}}">

                            <img src="{{asset('articles/images/'.$article->image)}}" alt="">
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-date">D <span>STORE</span></div>
                        <div class="blog-post-meta">
                            <ul>
                                <li><a href="#">Date de création {{ $article->created_at}}</a></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="#"> {{ $article->name}}</a></h4>
                        <div class="blog-post-bottom">
                            <ul>
                                <li class="read-more"><a href="{{route('article.detail', $article->id)}}">Lire la suite <i class="fas fa-angle-double-right"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach











        </div>
    </div>
</section>


@endsection
