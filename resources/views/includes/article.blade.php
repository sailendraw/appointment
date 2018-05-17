<div class="showcase block block-border-bottom-grey">
    <div class="container" id="article">
        <h2 class="block-title">
            Health Articles
        </h2>
        <p>From the latest healthy living news, treatments and therapies, inspiring patient stories, to expert advice, we're here to help you live your healthiest life every day. </p>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
            @forelse($articleData as $indexKey => $article)
            <div class="item">
                <a href="{{ URL::route('articleShow',['article'=>$article->id]) }}" class="overlay-wrapper">
                    <img src="img/showcase/project{{$indexKey+1}}.png" alt="Project 1 image" class="img-responsive underlay">
                    <span class="overlay">
                  <span class="overlay-content"> <span class="h4">{{ $article->article_name }}</span> </span>
                </span>
                </a>
                <div class="item-details bg-noise">
                    <h4 class="item-title">
                        <a href="{{ URL::route('articleShow',['article'=>$article->id]) }}">{{ $article->article_name }}</a>
                    </h4>
                    <a href="{{ URL::route('articleShow',['article'=>$article->id]) }}" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                </div>
            </div>
            @empty
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project1.png" alt="Project 1 image" class="img-responsive underlay">
                        <span class="overlay">
                          <span class="overlay-content"> <span class="h4">No article</span> </span>
                        </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">No Article/a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
            @endforelse
        </div>
    </div>
</div>