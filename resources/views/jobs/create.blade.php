<x-layout>
    <x-forms.page-heading>Nouveau Travail</x-forms.page-heading>

    <x-forms.form action="/jobs" method="POST">
                <x-forms.input label="Titre" name="title" placeholder="SAFTEL"/>
                <x-forms.input label="Salaire" name="salary" placeholder="100 000F CFA"/>
                <x-forms.input label="Localisation" name="location" placeholder="Cotonou 12ème"/>

                <x-forms.select label="Contrat" name="contrat">
                    <option>Full Time</option>
                    <option>Part Time</option>
                </x-forms.select>
                
                <x-forms.input label="URL" name="url" placeholder="http:://acme.com/jobs"/>
                <x-forms.checkbox  label="Paiements" name="feactured"/>

                <x-forms.divider /> 

                <x-forms.input  label="Balise(virgule pour la séparation)" name="tags" placeholder="Video, Production"/>
                
                <x-forms.button>Publier</x-forms.button>
    </x-forms.form>

</x-layout>