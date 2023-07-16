<div class="p-16 flex justify-center gap-6 items-center">
    {{-- The best athlete wants his opponent at his best. --}}
    <button class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white"  wire:click="increment">+</button>
    <span>{{ $count }}</span>
    <button  class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white"  wire:click="decrement">-</button>
</div>
