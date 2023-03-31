<div class="my-card text-center">
    <figure>
        <img src="{{$song->poster}}" alt="{{$song->title}} poster">
    </figure>

    <ul class="p-0 my-3">
        <li>
            <span class="d-block fs-5 fw-semibold">
                Album:
            </span>
            <span class="fw-semibold text-muted">
                {{ucfirst($song->album)}}
            </span>
        </li>
        <li>
            <span class="d-block fs-5 fw-semibold">
                Autore:
            </span>
            <span class="fw-semibold text-muted">
                {{$song->author}}
            </span>
        </li>
        <li>
            <span class="d-block fs-5 fw-semibold">
                Editore:
            </span>
            <span class="fw-semibold text-muted">
                {{$song->editor}}
            </span>
        </li>
        <li>
            <span class="d-block fs-5 fw-semibold">
                Durata:
            </span>
            <span class="fw-semibold text-muted">
                {{$song->length}} m
            </span>
        </li>
    </ul>
</div>