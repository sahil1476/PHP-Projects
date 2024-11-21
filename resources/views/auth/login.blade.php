<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login" >

        
        <x-forms.input label="Email" name="email" type="email" placeholder="john.doe@example.com" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Password" />
       
        <x-forms.button class="mt-10">Log In</x-forms.button>

    </x-forms.form>
</x-layout>