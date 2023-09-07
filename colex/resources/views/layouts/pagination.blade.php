<nav>
    <ul class="pagination pagination-rounded pagination-3d justify-content-center mt-5">
        @if ($paginator->previousPageUrl())
        <li class="page-item"><a class="page-link" href="{{ url('news') }}" aria-label="Previous"> <span
                    aria-hidden="true">&laquo;</span></a></li>
        <li class="page-item"><a class="page-link"
                href="{{ $paginator->currentPage() == 2 ? url('news') : $paginator->previousPageUrl() }}"
                aria-label="Previous"> <span aria-hidden="true">&lt;</span></a></li>
        @endif
        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $i => $page)
        <li class="page-item {{ $paginator->currentPage() == $i ? 'active' : '' }}"><a class="page-link"
                href="{{ $i == 1 ? url('news') : $page }}">{{ $i }}</a></li>
        @endforeach
        @if ($paginator->nextPageUrl())
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><span
                    aria-hidden="true">&gt;</span></a></li>
        <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}"
                aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        @endif
    </ul>
</nav>
