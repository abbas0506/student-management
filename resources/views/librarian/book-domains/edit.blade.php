@extends('layouts.librarian')
@section('page-content')
<div class="custom-container">
    <h2>Edit Book Domain</h2>
    <div class="bread-crumb">
        <a href="{{url('librarian')}}">Home</a>
        <div>/</div>
        <a href="{{route('librarian.book-domains.index')}}">Book Domains</a>
        <div>/</div>
        <div>Edit</div>
    </div>
    <div class="h-96 flex justify-center items-center">
        <div class="w-full md:w-3/4 mx-auto mt-8">
            <!-- page message -->
            @if($errors->any())
            <x-message :errors='$errors'></x-message>
            @else
            <x-message></x-message>
            @endif

            <form action="{{route('librarian.book-domains.update', $bookDomain)}}" method='post' class="mt-4" onsubmit="return validate(event)">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-1">
                    <div class="col-span-2 md:col-span-3">
                        <label>Book Domain *</label>
                        <input type="text" name='name' class="custom-input" placeholder="Type here" value="{{$bookDomain->name}}">
                    </div>
                    <div class="flex mt-4">
                        <button type="submit" class="btn-teal rounded p-2">Update Now</button>
                    </div>
            </form>

        </div>
    </div>
</div>
@endsection