<div >


        <x-button color="red" wire:click="remove">Minus</x-button>
        <x-button color="green"  wire:loading.class="bg-green-100 cursor-not-allowed" wire:loading.attr="disabled" wire:click="add" >Add More</x-button>
        <span wire:loading.delay.longest>saving</span>


        <x-input wire:model="count" name="txt"/>
</div>
