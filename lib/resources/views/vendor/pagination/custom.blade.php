<style>
    .pagination-outer{ text-align: center; }
    .pagination{
        display: inline-flex;
        border-radius: 0;
        overflow: hidden;
        position: relative;
    }
    .pagination li a.page-link{
        width: 50px;
        height: 45px;
        line-height: 35px;
        border-radius: 0;
        border: none;
        font-size: 20px;
        font-weight: 700;
        color: #9b6a20;
        letter-spacing: 1px;
        text-transform: uppercase;
        z-index: 1;
        margin: 0 10px 0 0;
        position: relative;
        transition: all 0.4s ease 0s;
    }
    .pagination li.active a.page-link,
    .pagination li a.page-link:hover,
    .pagination li.active a.page-link:hover{
        color: #5d80a1;
        background: transparent;
    }
    .pagination li:first-child a.page-link,
    .pagination li:last-child a.page-link{
        height: 42px;
        line-height: 27px;
        background: #5d80a1;
        font-size: 17px;
        color: #fff;
        -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    }
    .pagination li:last-child a.page-link{ margin-right: 0; }
    .pagination li:first-child a.page-link:hover,
    .pagination li:last-child a.page-link:hover{
        background: #031926;
        color: #fff;
        transform: rotate(1turn);
    }
    .pagination li a.page-link:before{
        content: "";
        width: 0;
        height: 2px;
        background: #031926;
        position: absolute;
        bottom: 0;
        left: 0;
        transition: all 0.3s ease 0s;
    }
    .pagination li a.page-link:hover:before,
    .pagination li.active a.page-link:before{ width: 100%; }
    .pagination li a.page-link:after{
        content: "";
        width: 17px;
        height: 17px;
        background: #5d80a1;
        margin: 0 auto;
        position: absolute;
        bottom: -7px;
        left: 0;
        right: 0;
        opacity: 0;
        -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        transition: all 0.3s ease 0s;
    }
    .pagination li a.page-link:hover:after,
    .pagination li.active a.page-link:after{
        opacity: 1;
        transform: rotate(1turn);
    }
    .pagination li:first-child a.page-link:hover:before,
    .pagination li:last-child a.page-link:hover:before,
    .pagination li:last-child a.page-link:hover:after,
    .pagination li:first-child a.page-link:hover:after{ display: none; }

    .page-item:not(:first-child) .page-link {
        margin-left: -6px;
        border-radius: 50%;
        background: #fff;
        color: #000;
        font-size: 17px;
        width: 42px;
        height: 42px;
    }

    a.page-link.pre {width: 42px!important;}
    @media only screen and (max-width: 480px){
        .pagination{ display: block; }
        .pagination li{
            display: inline-block;
            margin-bottom: 10px;
        }
    }
</style>

@if ($paginator->hasPages())
<nav class="pagination-outer" aria-label="Page navigation">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <!-- <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
                <span aria-hidden="true">«</span>
            </a>
        </li> -->
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a class="page-link pre" aria-hidden="true">&lsaquo;</a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link pre" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
        @endif

        <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item active"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li> -->
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true"><a class="page-link">{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <!-- <li class="page-item">
            <a href="#" class="page-link" aria-label="Next">
                <span aria-hidden="true">»</span>
            </a>
        </li> -->
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <a class="page-link" aria-hidden="true">&rsaquo;</a>
        </li>
        @endif
    </ul>
</nav>
@endif