<div class="my-card">
    <div class="row">
        <div class="col-8 text-center">
            <div class="row g-5">
                <div class="col-4">
                    <div>
                        <span class="d-block fs-5 fw-semibold">
                            Titolo:
                        </span>
                        <span class="fw-semibold text-muted">
                            {{ucfirst($song->title)}}
                        </span>
                    </div>
                </div>
    
                <div class="col-4">
                    <div>
                        <span class="d-block fs-5 fw-semibold">
                            Album:
                        </span>
                        <span class="fw-semibold text-muted">
                            {{ucfirst($song->album)}}
                        </span>
                    </div>
                </div>
    
                <div class="col-4">
                    <div>
                        <span class="d-block fs-5 fw-semibold">
                            Autore:
                        </span>
                        <span class="fw-semibold text-muted">
                            {{ucfirst($song->author)}}
                        </span>
                    </div>
                </div>
    
                <div class="col-4">
                    <div>
                        <span class="d-block fs-5 fw-semibold">
                            Durata:
                        </span>
                        <span class="fw-semibold text-muted">
                            {{$song->length}} m
                        </span>
                    </div>
                </div>
    
                <div class="col-4">
                    @if(isset($song->editor))
                    <div>
                        <span class="d-block fs-5 fw-semibold">
                            Editore:
                        </span>
                        <span class="fw-semibold text-muted">
                            {{$song->editor}}
                        </span>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="row">
                <div class="col-12 text-center">
                    <figure>
                        <img src="{{$song->poster}}" alt="{{$song->title}} poster">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>