<div>
    <section class="section">
        <div class="container">
            <div class="row gap-y">


                @foreach ( $posts as $post )

                    <div class="col-md-6 col-lg-4">
                        <div class="card card-blog shadow-box shadow-hover border-0"><a href="blog-post.html"><img class="card-img-top img-responsive" src="https://picsum.photos/350/200/?random&gravity=north" alt=""></a>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="author d-flex align-items-center"><img class="author-picture rounded-circle icon-md shadow-box" src="../img/avatar/user.png" alt="...">
                                        <p class="small bold my-0">Jenny Oliver</p>
                                    </div>
                                    <nav class="nav"><a href="javascript:;" class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i class="fas fa-heart text-danger me-2"></i> <span class="small">347</span> </a><a href="javascript:;" class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i class="far fa-bookmark me-2"></i> <span class="small">73</span></a></nav>
                                </div>
                                <hr>
                                <p class="card-title regular"><a href="blog-post.html">{{$post->title}}</a></p>
                                <p class="card-text text-secondary">{{$post->content}}</p>
                                <p class="bold small text-secondary my-0"><small>{{$post->create_at}}</small></p>
                            </div>
                        </div>
                    </div>

                @endforeach



            </div>
            <nav class="nav justify-content-center mt-5">
                {{ $posts->links() }}
            </nav>
        </div>
    </section><!-- ./Footer - Four Columns -->
</div>
