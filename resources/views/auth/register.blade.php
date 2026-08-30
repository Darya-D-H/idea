<x-layout>
    <x-form title="Register an Account" description="Start tracking your ideas today.">
        <form action="/register" method="POST" class="mt-10 space-y-4">
            @csrf 

            <x-form.field name="name" label="Name" />
            <x-form.field name="email" label="Email" type="email" />
            <x-form.field name="password" label="Password" type="password" />

            <button type="submit" class="btn w-full mt-2 h-10">Create Account</button>
        </form>
    </x-form>
</x-layout>