@extends('layouts.teacher')
@section('page-content')

<div class="container">
    <h1>New Long Q</h1>
    <div class="bread-crumb">
        <div class="bread-crumb">
            <a href="{{route('teacher.questions.view',[$chapter, 'long'])}}">Cancel & Go Back</a>
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
                <label>{{$chapter->subject->grade->roman_name}} - {{$chapter->subject->name}}</label>
                <h2>Ch. # {{$chapter->chapter_no}} | {{$chapter->name}}</h2>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-center">
                    <h2># {{$chapter->questions()->long()->count()+1}}</h2>
                    <label for="">Long</label>
                </div>
            </div>
        </div>

        <form action="{{route('teacher.long-questions.store')}}" method='post' class="mt-4" onsubmit="return validate(event)">
            @csrf
            <input type="hidden" name="chapter_id" value="{{$chapter->id}}">
            <input type="text" name="question" class="custom-input py-2" rows="2" placeholder="Question">
            <textarea type="text" name="answer" class="custom-input mt-2" rows="3" placeholder="Answer"></textarea>
            <div class="flex flex-wrap items-center justify-between mt-2 gap-2">
                <div>
                    <label for="">Marks</label>
                    <input type="text" name="marks" value="2" class="custom-input w-16 text-center ml-3 py-0">
                </div>
                <div>
                    <label for="">From Exercise?</label>
                    <input type="checkbox" id='is_from_exercise' name='is_from_exercise' class="w-6 h-6 chk bg-blue-100 border-blue-300 text-blue-500 focus:ring-blue-200 ml-3" value='1' checked>
                </div>
                <div>
                    <label for="">Bise Frequency</label>
                    <input type="text" name="bise_frequency" value="2" class="custom-input w-16 text-center ml-3 py-0">
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="btn-teal rounded p-2 w-full">Create Now</button>
            </div>
        </form>
    </div>
</div>
@endsection