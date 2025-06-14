<div class="text-white bg-sky-950 space-y-7 p-10 rounded-lg border-2 border-sky-700">
    <h3 class="font-bold text-2xl">Sign In</h3>
    <form action="/sign_in" method="POST" class="flex flex-col items-center space-y-5">
        @csrf
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
            Sign In
        </button>
    </form>
</div>
