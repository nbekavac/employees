@extends('layout')

@section('content')


<h2> 
    <a href="http://localhost/employees/public/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{asset('images/employee.jpg')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$employee->firstname}}</h3>
                        <div class="text-xl font-bold mb-4">{{$employee->lastname}}</div>

                        <div class>
                            Gender - {{$employee->gender}} <br>
                            Date of birth - {{$employee->dateofbirth}} <br>
                            First day - {{$employee->firstday}} <br>
                            Contract type - {{$employee->contracttype}} <br>
                            Contract length - {{$employee->contractlength}} <br>
                            Department - {{$employee->department}} <br>
                            Vacation days - {{$employee->vacationdays}} <br>
                            Free days - {{$employee->freedays}} <br>
                            Sick leave - {{$employee->sickleave}} <br>
                            Email - {{$employee->email}} <br>

                        </div>

                        
                        <div class="text-lg my-4">
                                <a
                                    href="mailto:{{$employee->email}}"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Employer</a
                                >

                            </div>
                        </div>
                    </div>
                </div>
            </div>

 @endsection
