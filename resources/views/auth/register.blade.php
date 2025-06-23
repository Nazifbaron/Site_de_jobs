<x-layout>
    <x-forms.page-heading>Inscrivez-vous</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data" >
        <x-forms.input label="Identiter" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirmer Password" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Nom Employeur " name="employer"  />
        <x-forms.input label="Logo d'Entreprise" name="logo" type="file" />

        <x-forms.button>Créer votre Compte</x-forms.button>
    </x-forms.form>
</x-layout>