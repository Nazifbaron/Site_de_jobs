<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl" >Trouvons votre prochain Travail</h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Developpeur Web........"/>
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>Feactured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($feacturedJob as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="my-6 space-x-1" >
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
                
               
            </div>
        </section>
        <section>
            <x-section-heading>Jobs Recent</x-section-heading>
            <div class="my-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
        
    </div>
</x-layout>