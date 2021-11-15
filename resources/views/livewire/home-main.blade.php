<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <livewire:client.header />
    <livewire:client.home.nous />
    <livewire:client.home.actualites />
    <livewire:client.home.projets />
    <livewire:client.home.volontaires />
    @if (count($temoignages) > 0)
    <livewire:client.home.temoignages />
    @endif
    <livewire:client.home.partenaires />
    <livewire:client.nav />
    <livewire:client.footer />
</div>
