<div>
  <form class="flex items-start" wire:submit.prevent="saveGift">
    <input class="flex-1" type="text" wire:model.defer="newGift">
    <button class="ml-4 bg-black p-2 text-white w-48" type="submit">Add</button>
  </form>

  <div>
    @error('newGift')
      <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror

    @if ($added)
      <div class="p-4 text-green-500">You've added a new gift.</div>
    @endif
  </div>


  <div class="flex items-start">
    <select class="w-64 mr-6">
      @foreach ($gifts as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
      @endforeach
    </select>

    <textarea class="flex-1"></textarea>
  </div>

</div>
