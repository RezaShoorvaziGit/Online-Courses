@if ($paginator->hasPages())
    <div class="row justify-between mx-5"  >
       
            {{-- Previous Page divnk --}}
            @if ($paginator->onFirstPage())
                <div class=" col disabled " aria-disabled="true"><span>@lang('pagination.previous')</span></div>
            @else
                <div class="col ajaxSubmit" ><a href="{{ $paginator->previousPageUrl() }}"  onclick="return sendAnswer() ;" rel="prev"class="btn btn-primary">@lang('pagination.previous')</a></div>
            @endif



            {{-- Next Page divnk --}}
            @if ($paginator->hasMorePages())
                <div class="col "><a  href="{{ $paginator->nextPageUrl() }}"  onclick="return sendAnswer() ;" class="btn btn-primary" rel="next">@lang('pagination.next')</a></div>
            @else
            <div class="col "><a  href="{{route('reportcard.show',['id'=>app('request')->input('examId')])}}" class="btn btn-primary"  onclick="return sendAnswer();" rel="next">اتمام آزمون </a></div>
            @endif
      
    </div>
@endif
