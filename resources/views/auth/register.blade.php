<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data" >

        
        <x-forms.input label="Name" name="name" type="text" placeholder="john doe" />
        <x-forms.input label="Email" name="email" type="email" placeholder="john.doe@example.com" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" placeholder="Confirm Password" />
    
        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />


        <x-forms.button class="mt-10">Create Account</x-forms.button>

    </x-forms.form>
</x-layout>