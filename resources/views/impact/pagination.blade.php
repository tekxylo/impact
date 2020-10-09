@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
        <a class="page-link" wire:click="previousPage"  tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        @else
        <li class="page-item">
        <a class="page-link" wire:click="previousPage" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        @endif

        <!--<li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>-->

        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}"><a class="page-link" wire:click="gotoPage({{$i}})">{{ $i }}</a></li>
        @endfor

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
        <a class="page-link" wire:click="nextPage">Next</a>
        </li>
        @else
        <li class="page-item disabled">
        <a class="page-link"  wire:click="nextPage">Next</a>
        </li>
        @endif
        </li>
    </ul>
</nav>
@endif
