@extends('layouts.admin')
@section('page-content')
<div class="container bg-slate-100">
    <!--welcome  -->
    <div class="flex items-center">
        <div class="flex-1">
            <h2>Welcome {{ Auth::user()->name }}!</h2>
            <div class="bread-crumb">
                <div>Admin</div>
                <div>/</div>
                <div>Home</div>
            </div>
        </div>
        <div class="text-slate-500">{{ today()->format('d/m/Y') }}</div>
    </div>

    <!-- pallets -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">
        <a href="{{url('students')}}" class="pallet-box">
            <div class="flex-1">
                <div class="title">Students</div>
                <div class="h2">?</div>
            </div>
            <div class="ico bg-green-100">
                <i class="bi bi-person-circle text-green-600"></i>
            </div>
        </a>
        <a href="{{url('teachers')}}" class="pallet-box">
            <div class="flex-1">
                <div class="title">Teachers</div>
                <div class="h2"></div>
            </div>
            <div class="ico bg-indigo-100">
                <i class="bi bi-person-workspace text-indigo-400"></i>
            </div>
        </a>
        <a href="" class="pallet-box">
            <div class="flex-1 ">
                <div class="title">Course Allocations</div>
                <div class="h2">%</div>
            </div>
            <div class="ico bg-teal-100">
                <i class="bi bi-card-checklist text-teal-600"></i>
            </div>
        </a>
        <a href="" class="pallet-box">
            <div class="flex-1">
                <div class="title">Results</div>
                <div class="h2"> %</div>
            </div>
            <div class="ico bg-sky-100">
                <i class="bi bi-graph-up text-sky-600"></i>
            </div>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 mt-8 gap-6">
        <!-- middle panel  -->
        <div class="md:col-span-2">
            <!-- update news  -->
            <div class="p-4 bg-red-50">
                <h2>Important Features of ES V5.0 </h2>
                <ul class="list-disc pl-4 text-sm">
                    <li><u>Responsive</u> - app is easy to use on small screens as well </li>
                    <li><u>Single login</u> - for all of your authorized departments.</li>
                    <li><u>Dashboard</u> - provides you quick access to your profile info, passowrd change option and other needful pages like config for once, course allcation, printable etc. </li>
                    <li><u>Page navigation</u> - links help you to navigate across pages. (highlighted in blue color)</li>
                    <li><u>Award lists</u> - are available in .xlsx and .pdf formats. Pdf version consists of 30 students per page. </li>
                    <li><u>Upcoming</u> - soon you will be able to see results submission progress of all the teachers of your department, course profile (by whom the course is being taught) and teacher profile (list of allocated courses and workload in credit hours)</li>
                </ul>
            </div>

        </div>
        <!-- middle panel end -->
        <!-- right side bar starts -->
        <div class="">
            <div class="bg-sky-100 p-4">
                <div class="flex items-center space-x-2">
                    <i class="bi-gear text-lg"></i>
                    <h2>Config for Once</h2>
                </div>
                <div class="divider mt-4 border-sky-200"></div>
                <div class="flex items-center justify-between mt-2 text-sm">
                    <div class="flex items-center">
                        <i class="bi bi-award w-8"></i>
                        <a href="{{route('admin.sessions.index')}}" class="link">Sessions</a>
                    </div>
                    <div>{{ $sessions->count()}}</div>
                </div>
                <div class="flex items-center justify-between mt-2 text-sm">
                    <div class="flex items-center">
                        <i class="bi-book w-8"></i>
                        <a href="{{route('admin.groups.index')}}" class="link">Groups</a>
                    </div>
                    <div>{{ $groups->count() }}</div>
                </div>


            </div>

            <div class="mt-4 bg-white p-4">
                <h2>Profile</h2>
                <div class="flex flex-col">
                    <div class="flex text-sm mt-4">
                        <div class="w-8"><i class="bi-person"></i></div>
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                    <div class="flex text-sm mt-2">
                        <div class="w-8"><i class="bi-envelope-at"></i></div>
                        <div>{{ Auth::user()->email }}</div>
                    </div>
                    <div class="flex text-sm mt-2">
                        <div class="w-8"><i class="bi-phone"></i></div>
                        <div>{{ Auth::user()->phone }}</div>
                    </div>
                    <div class="divider border-blue-200 mt-4"></div>
                    <div class="flex text-sm mt-4">
                        <div class="w-8"><i class="bi-key"></i></div>
                        <a href="{{url('admin/change/password')}}" class="link">Change Password</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection