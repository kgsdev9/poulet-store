@extends('layout.app')
@section('content')
<main>


    <!-- blog-details-area -->
    <section class="blog-details-area blog-gray-bg">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="standard-blog-item mb-50">
                            <div class="blog-thumb">
                                <img src="{{asset('articles/images/'.$detail->image)}}" alt="">
                            </div>
                            <div class="standard-blog-content blog-details-content">
                                <h4 class="title">{{$detail->name}}</h4>
                                <ul class="standard-blog-meta">

                                    <li><a ><i class="far fa-calendar"></i>{{$detail->created_at}}</a></li>

                                </ul>
                                <p>.{{$detail->description}}</p>




                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->

</main>
@endsection
