
<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo et nom du site -->
            <div class="flex items-center gap-8">
                <a href="{{ route('espace') }}"
                   class="text-xl font-bold text-blue-700">
                    InfoTech Store
                </a>

                <!-- Menu ordinateur -->
                <div class="hidden sm:flex items-center gap-6">
                    <a href="{{ route('espace') }}"
                       class="text-sm font-medium text-gray-700 hover:text-blue-700">
                        Ma boutique
                    </a>

                    <a href="{{ route('profile.edit') }}"
                       class="text-sm font-medium text-gray-700 hover:text-blue-700">
                        Mon profil
                    </a>
                </div>
            </div>

            <!-- Menu du compte sur ordinateur -->
            <div class="hidden sm:flex items-center gap-4">
                <span class="text-sm text-gray-600">
                    Bonjour, {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="px-4 py-2 rounded-lg bg-red-600
                                   text-white text-sm font-semibold
                                   hover:bg-red-700">
                        Déconnexion
                    </button>
                </form>
            </div>

            <!-- Bouton menu téléphone -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open"
                        class="p-2 rounded-md text-gray-600 hover:bg-gray-100"
                        aria-label="Ouvrir le menu">
                    <svg class="h-6 w-6" stroke="currentColor"
                         fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }"
                              class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }"
                              class="hidden"
                              stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu téléphone -->
    <div x-show="open" x-transition class="sm:hidden border-t border-gray-100">
        <div class="px-4 py-3">
            <p class="font-semibold text-gray-800">
                {{ Auth::user()->name }}
            </p>
            <p class="text-sm text-gray-500">
                {{ Auth::user()->email }}
            </p>
        </div>

        <div class="px-4 pb-3 space-y-1">
            <a href="{{ route('espace') }}"
               class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
                Ma boutique
            </a>

            <a href="{{ route('profile.edit') }}"
               class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
                Mon profil
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full text-left px-3 py-2 rounded-md
                               text-red-600 hover:bg-red-50">
                    Déconnexion
                </button>
            </form>
        </div>
    </div>
</nav>
