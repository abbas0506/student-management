@extends('layouts.teacher')
@section('page-content')

<div class="container">
    <h1>Short Questions</h1>
    <div class="bread-crumb">
        <a href="/">Home</a>
        <div>/</div>
        <a href="{{route('teacher.grades.index')}}">Grades</a>
        <div>/</div>
        <a href="{{route('teacher.chapters.show',$chapter)}}">{{$chapter->subject->grade->roman_name}}</a>
        <div>/</div>
        <a href="{{route('teacher.subjects.show',$chapter->subject)}}">{{$chapter->subject->name}}</a>
        <div>/</div>
        <a href="{{route('teacher.chapters.show',$chapter)}}">Ch.{{$chapter->chapter_no}}</a>
        <div>/</div>
        <div>Short</div>
    </div>
    <div class="mt-12">
        <div class="flex justify-between items-center">
            <div>
                <label>{{$chapter->subject->grade->roman_name}} - {{$chapter->subject->name}}</label>
                <h2>Ch. # {{$chapter->chapter_no}} | {{$chapter->name}}</h2>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-center">
                    <h2>{{$chapter->questions()->short()->count()}}</h2>
                    <label for="">Short</label>
                </div>
                <a href="{{route('teacher.questions.add', [$chapter,'short'])}}" class="btn-teal rounded px-3 py-2">New Q</a>
            </div>
        </div>

        <!-- page message -->
        @if($errors->any())
        <x-message :errors='$errors'></x-message>
        @else
        <x-message></x-message>
        @endif

        @php $sr=1; @endphp
        <div class="overflow-x-auto">
            <table class="table-fixed w-full mt-8 text-sm">
                <thead>
                    <tr>
                        <th class="w-8">Sr</th>
                        <th class="w-64">Question</th>
                        <th class="w-12">Marks</th>
                        <th class="w-12">From Ex.</th>
                        <th class="w-12">f <sub>bise</sub></th>
                        <th class="w-12">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($chapter->questions()->short()->get()->sortByDesc('updated_at') as $question)
                    <tr class="text-sm">
                        <td>{{$sr++}}</td>
                        <td class="text-left">{{$question->question}}</td>
                        <td>{{$question->marks}}</td>
                        <td>
                            @if($question->is_from_exercise)
                            <i class="bi-check text-green-600"></i>
                            @else
                            <i class="bi-x text-slate-600"></i>
                            @endif
                        </td>
                        <td>{{$question->bise_frequency}}</td>
                        <td class="text-xs">
                            <div class="flex justify-center items-center space-x-3">
                                <a href="{{route('teacher.short-questions.edit', $question)}}">
                                    <i class="bi bi-pencil-square text-green-600"></i>
                                </a>
                                <span class="text-slate-400">|</span>
                                <form action="{{route('teacher.short-questions.destroy',$question)}}" method="POST" onsubmit="return confirmDel(event)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-transparent p-0 border-0">
                                        <i class="bi bi-trash3 text-red-600"></i>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    function search(event) {
        var searchtext = event.target.value.toLowerCase();
        var str = 0;
        $('.tr').each(function() {
            if (!(
                    $(this).children().eq(1).prop('outerText').toLowerCase().includes(searchtext)
                )) {
                $(this).addClass('hidden');
            } else {
                $(this).removeClass('hidden');
            }
        });
    }

    function confirmDel(event) {
        event.preventDefault(); // prevent form submit
        var form = event.target; // storing the form

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                form.submit();
            }
        })
    }
</script>

@endsection