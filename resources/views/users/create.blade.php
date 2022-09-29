@extends('layout')

@section('content')

<div
class="bg-gray-50 border border-gray-200 p-10 max-w-lg mx-auto mt-24"
>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Create employee
    </h2>
    <p class="mb-4">Create new employee</p>
</header>

<form method="POST" action="/employees/public/users">
    @csrf
    <div class="mb-6">
        <label for="firstname" class="inline-block text-lg mb-2">
            First name
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="firstname"
        />

        @error('firstname')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="lastname" class="inline-block text-lg mb-2">
            Last name
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="lastname"
        />

        @error('lastname')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="picture" class="inline-block text-lg mb-2">
            Picture
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="picture"
        />

        @error('picture')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="gender" class="inline-block text-lg mb-2">
            Gender
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="gender"
        />

        @error('gender')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="dateofbirth" class="inline-block text-lg mb-2">
            Date of birth
        </label>
        <input
            type="date"
            class="border border-gray-200 rounded p-2 w-full"
            name="dateofbirth"
        />

        @error('dateofbirth')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="firstday" class="inline-block text-lg mb-2">
            First date of work
        </label>
        <input
            type="date"
            class="border border-gray-200 rounded p-2 w-full"
            name="firstday"
        />

        @error('firstday')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="contracttype" class="inline-block text-lg mb-2">
            Contract type
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="contracttype"
        />

        @error('contracttype')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="contractlength" class="inline-block text-lg mb-2">
            Contract length
        </label>
        <input
            type="number"
            class="border border-gray-200 rounded p-2 w-full"
            name="contractlength"
        />

        @error('contractlength')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="department" class="inline-block text-lg mb-2">
            Department
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="department"
        />

        @error('department')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="vacationdays" class="inline-block text-lg mb-2">
            Vacation days
        </label>
        <input
            type="number"
            class="border border-gray-200 rounded p-2 w-full"
            name="vacationdays"
        />

        @error('vacationdays')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="freedays" class="inline-block text-lg mb-2">
            Free days
        </label>
        <input
            type="number"
            class="border border-gray-200 rounded p-2 w-full"
            name="freedays"
        />

        @error('freedays')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="sickleave" class="inline-block text-lg mb-2">
            Sick leave
        </label>
        <input
            type="number"
            class="border border-gray-200 rounded p-2 w-full"
            name="sickleave"
        />

        @error('sickleave')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            >Email</label
        >
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
        />
        @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="password"
            class="inline-block text-lg mb-2"
        >
            Password
        </label>
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password"
        />

        @error('password')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="password2"
            class="inline-block text-lg mb-2"
        >
            Confirm Password
        </label>
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password_confirmation"
        />
        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button
            type="submit"
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Create employee
        </button>
    </div>

</form>
</div>

@endsection