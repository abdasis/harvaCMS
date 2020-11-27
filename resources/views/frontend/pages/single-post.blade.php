@extends('frontend.layouts.app')
@section('title')
{{ $post->judul_artikel }}
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body p-3">
                        <h1 class="card-title font-28">{{ $post->judul_artikel }}</h1>
                        <div class="row px-2">
                            <div class="badge badge-soft-blue rounded-0 p-1 mr-2"><i class="mdi mdi-calendar mr-1"></i>{{ $post->created_at }}</div>
                            <div class="badge badge-soft-success rounded-0 p-1 mr-2"><i class="mdi mdi-tag mr-1"></i>Politik</div>
                            <div class="badge badge-soft-danger rounded-0 p-1 mr-2"><i class="mdi mdi-comment mr-1"></i>{{ $post->jumlah_komentar }} Komentar</div>
                        </div>

                    </div>
                    <div class="card-body p-0 m-0">
                        <div class="card-img">
                            <img class="single-thumbnail-post" height="400px" src="{{ asset('thumbnail-artikel') . '/' . $post->thumbnail_artikel }}" alt="">
                        </div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="container">
                        <div class="content-artikel">
                            {!! $post->isi_artikel !!}
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <h1 class="font-16">Bagian Artikel Ini:</h1>
                                    <div class="addthis_inline_share_toolbox mt-2"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('frontend.includes.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="font-weight-bolder">Komentar</h3>
                        </div>
                        <div class="alert alert-success">Berkomentar dengan bijak dan berkomentarlah dengan kata-kata yang baik dan sopan</div>
                        <div id="disqus_thread"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://blogcms-3.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f09333631fdfe6a"></script>
@endsection
