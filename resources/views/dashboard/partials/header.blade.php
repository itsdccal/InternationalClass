<div class="flex justify-end items-center">
    <!-- Right Side: Profile and User Menu -->
    <div class="flex items-center gap-1.5 tracking-tight whitespace-nowrap text-zinc-800">
        <div class="dropdown dropdown-end">
            <!-- Trigger Dropdown -->
            <label tabindex="0" class="btn m-1 bg-blue-50 border-none gap-2 px-3.5 py-1.5 rounded-xl flex items-center">
                <img src="{{ asset('images/profilePicture.png') }}"
                    class="object-contain shrink-0 rounded-xl aspect-[1.18] w-[47px]" alt="Profile picture" />
                <span class="my-auto">{{ Auth::user()->name ?? 'user' }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.92l3.71-4.69a.75.75 0 011.08 1.02l-4 5a.75.75 0 01-1.08 0l-4-5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </label>

            <!-- Dropdown Menu -->
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box w-52 p-2 shadow">
                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                <li><a href="{{ route('profile.edit') }}">Settings</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left">Sign Out</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>