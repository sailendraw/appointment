<div class="col-md-6 blog-roll" id="blogs">
    <h3 class="block-title">
        Latest From Our Blog
    </h3>
    <!-- Blog post 1-->
    @forelse($blogData as $blog)
    <div class="media">
        <div class="media-left hidden-xs">
            <!-- Date desktop -->
            <div class="date-wrapper"> <span class="date-m">May</span> <span class="date-d">{{$blog->created_at }}</span> </div>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                <a href="#" class="text-weight-strong">{{ $blog->article_name }}</a>
            </h4>
            <!-- Meta details mobile -->
            <ul class="list-inline meta text-muted visible-xs">
                <li><i class="fa fa-calendar"></i> <span class="visible-md">Created:</span> {{ $blog->created_at }} Fri 1st Feb 2013</li>
                <li><i class="fa fa-user"></i> <a href="#">Ashish</a></li>
            </ul>
            <p>
                Ut <strong>{{ $blog->article_name }}</strong> care
                <a href="{{ URL::route('blogShow',['blog'=>$blog->id]) }}">Read more <i class="fa fa-angle-right"></i></a>
            </p>
        </div>
        @empty
            <div class="media-left hidden-xs">
                <!-- Date desktop -->
                <div class="date-wrapper"> <span class="date-m">Feb</span> <span class="date-d">01</span> </div>
            </div>
            <div class="media-body">
                <h4 class="media-heading">
                    <a href="#" class="text-weight-strong">Sample</a>
                </h4>
                <!-- Meta details mobile -->
                <ul class="list-inline meta text-muted visible-xs">
                    <li><i class="fa fa-calendar"></i> <span class="visible-md">Created:</span>  Fri 1st Feb 2013</li>
                    <li><i class="fa fa-user"></i> <a href="#">Ashish</a></li>
                </ul>
                <p>
                    <strong>Health</strong> Blog
                    <a href="#">Read more <i class="fa fa-angle-right"></i></a>
                </p>
            </div>
        @endforelse
    </div>
    <!-- Blog post 2 -->

</div>