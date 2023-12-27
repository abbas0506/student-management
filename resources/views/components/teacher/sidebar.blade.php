<aside aria-label="Sidebar" id='sidebar'>
    <div class="mt-8 font-bold text-center text-orange-300 uppercase tracking-wider">GHSS</div>
    <div class="text-xs text-center">Chak Bedi, Pakpattan</div>
    <div class="mt-12">
        <ul class="space-y-2">
            <li>
                <a href="{{url('teacher')}}" class="flex items-center p-2">
                    <i class="bi-house"></i>
                    <span class="ml-3">Home</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center p-2">
                    <i class="bi-book"></i>
                    <span class="ml-3">My Subjects</span>
                </a>
            </li>
            <li>
                <a href="{{route('teacher.grades.index')}}" class="flex items-center p-2">
                    <i class="bi-question-circle"></i>
                    <span class="ml-3">My Questions</span>
                </a>
            </li>
            <li>
                <a href="{{route('teacher.tests.create')}}" class="flex items-center p-2">
                    <i class="bi-file-text"></i>
                    <span class="ml-3">My Tests</span>
                </a>
            </li>

        </ul>
    </div>
</aside>