<nav class="sticky top-0 z-40 border-b border-border px-6 bg-background/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Idea logo" width="100">
            </a>
        </div>
        <div class="flex items-center gap-x-5">
            @auth
                <a href="{{ route('profile.edit') }}" class="btn-secondary">Edit Profile</a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn">Log Out</button>
                </form>
            @endauth

            @guest
                <a href="/login">Sign In</a>
                <a href="/register" class="btn">Register</a>
            @endguest

        </div>
    </div>
</nav>
