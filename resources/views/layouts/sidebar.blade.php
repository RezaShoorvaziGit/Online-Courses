<div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 right-0 bottom-0 z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-6">
        <a href="{{ route('home') }}" class="flex items-center text-decoration-none text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current feather feather-grid" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            <span class="ml-2 text-sm font-semibold m-2">داشبورد</span>
        </a>
        <a href="{{ route('indexcours') }}" class="flex items-center text-decoration-none text-gray-600 py-2 hover:text-blue-700">
            <i class="fas fa-book-reader"></i>
            <span class="ml-2 text-sm font-semibold m-2">دوره ها</span>
        </a>
        <a href="{{ route('indexexam') }}" class="flex items-center text-decoration-none text-gray-600 py-2 hover:text-blue-700">
            <i class="fas fa-file-alt"></i>
            <span class="ml-2 text-sm font-semibold m-2">آزمون ها</span>
        </a>
        @can('AdminTeacher')
        <a href="{{ route('indexquestion') }}" class="flex items-center text-decoration-none text-gray-600 py-2 hover:text-blue-700">
            <i class="fas fa-university"></i>
            <span class="ml-2 text-sm font-semibold m-2">بانک سوالات </span>
        </a>  
        @endcan
    
      
  
    </div>
</div>