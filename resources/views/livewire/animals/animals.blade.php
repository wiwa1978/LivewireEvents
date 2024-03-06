
<div class="mx-auto w-full m-16 px-6 lg:px-8">
    <div class="mx-auto w-full lg:mx-0 text-center">
      <h2 class="text-3xl font-bold tracking-tight text-rose-900 sm:text-4xl">Animals</h2>
      <ul role="list" class="mx-auto mt-6 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
        @foreach($animals as $animal)
            <!-- @include('livewire.animals.animal-card', ['animal' => $animal]) -->
            
          <li class="border rounded-2xl">
            <img class="aspect-[3/2] w-full rounded-t-2xl object-cover" src="{{ $animal->photo_featured}}" alt="">
            <div class="p-6">
                <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">{{ $animal->name }}</h3>
                <p class="text-base leading-7 text-gray-600">{{ $animal->location }}</p>
            </div>
            <button wire:click="viewAnimalDetails" type="button" class="text-sm">
                See details
            </button>
            
          </li>

        @endforeach
      </ul>
      
    </div>
  </div>
