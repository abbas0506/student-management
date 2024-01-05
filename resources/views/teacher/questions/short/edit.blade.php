@extends('layouts.teacher')
@section('page-content')

<div class="container">
    <h1>Edit Short Q</h1>
    <div class="bread-crumb">
        <div class="bread-crumb">
            <a href="{{route('teacher.questions.view',[$question->chapter, 'short'])}}">Cancel & Go Back</a>
        </div>
    </div>
    <div class="md:w-3/4 mx-auto mt-12">
        <!-- page message -->
        @if($errors->any())
        <x-message :errors='$errors'></x-message>
        @else
        <x-message></x-message>
        @endif

        <div class="flex justify-between items-center">
            <div>
                <label>{{$question->chapter->subject->grade->roman_name}} - {{$question->chapter->subject->name}}</label>
                <h2>Ch. # {{$question->chapter->chapter_no}} | {{$question->chapter->name}}</h2>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-center">
                    <i class="bx bx-pencil text-xl text-green-600"></i>
                </div>
            </div>
        </div>

        <form action="{{route('teacher.short-questions.update', $question)}}" method='post' class="mt-8" onsubmit="return validate(event)">
            @csrf
            @method('PATCH')
            <div class="flex items-center gap-2">
                <input type="checkbox" id='is_from_exercise' name='is_from_exercise' class="w-6 h-6 chk bg-blue-100 border-blue-300 text-blue-500 focus:ring-blue-200" value='1' @checked($question->is_from_exercise==1)>
                <label for="">From Exercise?</label>
            </div>
            <textarea type="text" name="question" class="custom-input py-2 mt-2" rows='1' placeholder="Question">{{$question->question}}</textarea>
            <div class="flex items-center justify-between mt-2">
                <label for="">Bise Frequency</label>
                <input type="text" name="bise_frequency" value="{{$question->bise_frequency}}" class="custom-input w-16 text-center ml-3 py-0">
            </div>
            <div class="divider my-3"></div>
            <div class="flex justify-end">
                <button type="submit" class="btn-teal rounded p-2">Update Now</button>
            </div>

        </form>
    </div>
</div>
@endsection