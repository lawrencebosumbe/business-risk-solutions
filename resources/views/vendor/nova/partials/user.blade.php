<dropdown-trigger class="h-9 flex items-center">
    @isset($user->email)
        <img
            src="https://secure.gravatar.com/avatar/{{ md5($user->email) }}?size=512"
            class="rounded-full w-8 h-8 mr-3"
        />
    @endisset
    <span class="text-90">
        {{ $user->first_name . ' ' . $user->last_name ?? __('Nova User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ route('document_management') }}" class="block no-underline text-90 hover:bg-30 p-3">
                Management Home
            </a>
        </li>
        <li>
            <a href="{{ route('modules') }}" class="block no-underline text-90 hover:bg-30 p-3">
                Management Modules
            </a>
        </li>
        <li>
            <a href="{{ route('iso_management_modules') }}" class="block no-underline text-90 hover:bg-30 p-3">
                ISO Modules
            </a>
        </li>  
        <li>
            <a href="{{ route('home') }}" class="block no-underline text-90 hover:bg-30 p-3">
                Read User Agreement
            </a>
        </li>
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
