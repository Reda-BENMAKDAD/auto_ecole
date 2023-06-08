<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Vos informations') }}
        </h2>
        @if(Auth::user()->hasRole('manager'))
        <p class="mt-1 text-sm text-gray-600">
            {{ __("Modifiez les informations de votre compte") }}
        </p>
        @endif
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" name="nom" type="text" class="mt-1 block w-full" :value="old('nom', Auth::user()->employe->nom)" required autofocus autocomplete="nom" :disabled="!Auth::user()->hasRole('manager')" cursor="{{ Auth::user()->hasRole('manager') ? 'pointer' : 'not-allowed' }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('nom')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Prenom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" :disabled="!Auth::user()->hasRole('manager')" cursor="{{ Auth::user()->hasRole('manager') ? 'pointer' : 'not-allowed' }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" :disabled="!Auth::user()->hasRole('manager')" cursor="{{ Auth::user()->hasRole('manager') ? 'pointer' : 'not-allowed' }}" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="date_naiss" :value="__('Date de naissance')" />
            <x-text-input id="date_naiss" name="date_naiss" type="date" class="mt-1 block w-full" :value="old('date_naiss', Auth::user()->employe->date_naiss)" required autofocus autocomplete="date_naiss" :disabled="!Auth::user()->hasRole('manager')" cursor="{{ Auth::user()->hasRole('manager') ? 'pointer' : 'not-allowed' }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('date_naiss')" />
        </div>

        <div>
            <x-input-label for="salaire" :value="__('Sexe')" />
            <x-text-input id="sexe" name="sexe" type="text" class="mt-1 block w-full" :value="old('sexe', Auth::user()->employe->sexe)" required autofocus autocomplete="sexe" :disabled="!Auth::user()->hasRole('manager')" cursor="{{ Auth::user()->hasRole('manager') ? 'pointer' : 'not-allowed' }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('sexe')" />
        </div>
        
        <div>
            <x-input-label for="salaire" :value="__('salaire')" />
            <x-text-input id="salaire" name="salaire" type="text" class="mt-1 block w-full" :value="old('salaire', strval(Auth::user()->employe->salaire) . 'dh')" required autofocus autocomplete="salaire" :disabled="!Auth::user()->hasRole('manager')" cursor="{{ Auth::user()->hasRole('manager') ? 'pointer' : 'not-allowed' }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('salaire')" />
        </div>


        
        @if(Auth::user()->hasRole('manager'))
        <div class="flex items-center gap-4">
            <x-primary-button :disabled="!Auth::user()->hasRole('manager')"  cursor="{{ Auth::user()->hasRole('manager') ? 'pointer' : 'not-allowed' }}">Enregistrer</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
        @endif
    </form>
</section>
