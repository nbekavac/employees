@extends('layout')

@section('content')
@include('partials._hero')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@foreach($employees as $employee)

<div class="bg-gray-50 border border-gray-200 rounded p-6" >
   <div class="flex">
      <a href="/employees/public/employees/{{$employee->id}}">
       <img
           class="hidden w-48 mr-6 md:block"
           src="{{asset('images/employee.jpg')}}"
           alt=""           
       />
       <div>
           <h3 class="text-2xl">
               <a href="/employees/public/employees/{{$employee->id}}">{{$employee->firstname}}</a>
           </h3>
           <div class="text-xl font-bold mb-4">
               <a href="/employees/public/employees/{{$employee->id}}">{{$employee->lastname}}</a>
            </div>
               
           <div class="text-lg mt-4">
               <i class></i> {{$employee->department}}
           </div>
       </div>
   </div>
</div>
@endforeach

</div>

@endsection