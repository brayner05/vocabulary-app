<x-layout title="Register">
    <div class="w-full p-10 flex flex-col items-center justify-center space-y-5">
        <div class="text-white bg-sky-950 space-y-7 px-10 py-7 rounded-lg border-2 border-sky-700">
            <h3 class="font-bold text-2xl">Create Account</h3>
            <form action="/users/register" method="POST" class="flex flex-col items-center space-y-5">
                @csrf
                <div class="space-y-3">
                    <label for="name" class="block text-sm text-white font-semibold">Name</label>
                    <x-login-input type="text" name="name" id="name"></x-login-input>
                </div>
                <div class="space-y-3">
                    <label for="email" class="block text-sm text-white font-semibold">Email</label>
                    <x-login-input type="email" name="email" id="email"></x-login-input>
                </div>
                <div class="space-y-3">
                    <label for="password" class="block  text-sm text-white font-semibold">Password</label>
                    <x-login-input type="password" name="password" id="password"></x-login-input>
                </div>
                <button type="submit"
                    class="mt-5 w-full bg-sky-700 px-5 py-3 cursor-pointer hover:bg-sky-600 duration-300 transition-colors text-white font-semibold text-sm rounded-lg">
                    Create Account
                </button>
            </form>
        </div>
        <p class="text-white">Already have an account?
            <a class="text-sky-500 font-semibold" href="/sign-in">Sign in</a>.
        </p>
    </div>
</x-layout>
