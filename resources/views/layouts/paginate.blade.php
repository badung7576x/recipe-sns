@if ($paginator->hasPages())
  <ul class="c-user-pagenation">
    @foreach ($elements as $element)
      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <li><a href="#" class="active">{{ $page }}</a></li>
          @else
            <li><a href="{{ $url }}">{{ $page }}</a></li>
          @endif
        @endforeach
      @endif
    @endforeach
  </ul>
@endif
