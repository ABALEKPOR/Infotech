
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mon profil — InfoTech Store
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Carte d'identité -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-6">
                <div class="flex flex-col sm:flex-row items-center gap-5">
                    <div class="w-20 h-20 rounded-full bg-blue-100
                                flex items-center justify-center
                                text-3xl font-bold text-blue-700">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>

                    <div class="text-center sm:text-left">
                        <h1 class="text-2xl font-bold text-gray-900">
                            Bonjour, {{ $user->name }} !
                        </h1>

                        <p class="text-gray-500 mt-1">
                            Bienvenue dans votre espace personnel.
                        </p>

                        <p class="text-sm text-gray-400 mt-2">
                            Membre depuis le
                            {{ $user->created_at->format('d/m/Y') }}
                        </p>
                    </div>

                    <div class="sm:ml-auto">
                        <a href="{{ route('espace') }}"
                           class="inline-block bg-blue-600 hover:bg-blue-700
                                  text-white font-semibold px-5 py-3 rounded-lg">
                            Retour à la boutique
                        </a>
                    </div>
                </div>
            </div>

            <!-- Informations personnelles -->
            <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8 mb-6">
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Informations personnelles
                </h3>

                <p class="text-sm text-gray-500 mb-6">
                    Consultez et modifiez les informations de votre compte.
                </p>

                <div class="border-t border-gray-100 pt-6">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Mot de passe -->
            <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8 mb-6">
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Sécurité du compte
                </h3>

                <p class="text-sm text-gray-500 mb-6">
                    Modifiez votre mot de passe pour protéger votre compte.
                </p>

                <div class="border-t border-gray-100 pt-6">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Suppression du compte -->
            <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8">
                <h3 class="text-lg font-bold text-red-600 mb-2">
                    Supprimer mon compte
                </h3>

                <p class="text-sm text-gray-500 mb-6">
                    Cette action supprimera définitivement votre compte.
                </p>

                <div class="border-t border-gray-100 pt-6">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
