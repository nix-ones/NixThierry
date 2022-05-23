<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <form method="POST" action="{{URL('/addArticle')}}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="Titre" :value="__('Titre')" />

                <x-input id="Titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required autofocus />
            </div>
            <div>
                <x-label for="Text" :value="__('Text')" />

                <x-input id="Text" class="block mt-1 w-full" type="text" name="email" :value="old('text')" required autofocus />
            </div>
            <div>
                <x-label for="Image" :value="__('Image')" />

                <x-input id="Image" class="block mt-1 w-full" type="file" name="img" :value="old('img')" required autofocus />
            </div>

            <button type="submit" class="primary">Enregistrer</button>

        </form>
    </x-auth-card>
</x-guest-layout>
