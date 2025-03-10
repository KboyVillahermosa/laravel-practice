<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!---------- MiddleName ---------------------->
        <div>
            <x-input-label for="middlename" :value="__('Middlename')" />
            <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename"
                :value="old('middlename')" required autofocus autocomplete="middlename" />
            <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
        </div>

        <!-- User name Name -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Department -->
        <div class="mt-4">
            <x-input-label for="department" :value="__('Department')" />
            <select id="department" name="department"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                required>
                <option value="">Select Department</option>
                <option value="BSIT">BSIT - Bachelor of Science in Information Technology</option>
                <option value="BSCS">BSCS - Bachelor of Science in Computer Science</option>
                <option value="BSECE">BSECE - Bachelor of Science in Electronics Engineering</option>
                <option value="BSBA">BSBA - Bachelor of Science in Business Administration</option>
                <option value="BSN">BSN - Bachelor of Science in Nursing</option>
                <option value="BSED">BSED - Bachelor of Secondary Education</option>
            </select>
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>
        <!-- crriculum-->
        <div class="mt-4">
            <x-input-label for="curriculum" :value="__('Curriculum')" />
            <select id="curriculum" name="curriculum"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                required>
                <option value="">Select Curriculum</option>
                <option value="BSIT-2024">BSIT - 2024 Curriculum</option>
                <option value="BSIT-2020">BSIT - 2020 Curriculum</option>
                <option value="BSCS-2024">BSCS - 2024 Curriculum</option>
                <option value="BSCS-2020">BSCS - 2020 Curriculum</option>
                <option value="BSECE-2024">BSECE - 2024 Curriculum</option>
                <option value="BSECE-2020">BSECE - 2020 Curriculum</option>
            </select>
            <x-input-error :messages="$errors->get('curriculum')" class="mt-2" />
        </div>
        <!-- ID number -->
        <div class="mt-4">
            <x-input-label for="student_id" :value="__('Student ID Number')" />
            <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id"
                :value="old('student_id')" required />
            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>