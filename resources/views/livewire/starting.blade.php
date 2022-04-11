<div style="margin:100px">
    <input type="text" style="height:30px;border:red solid 2px" wire:model.lazy="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model='greeting'>
        <option>Hello</option>
        <option>Good Morning</option>
        <option>How are you,</option>
        <option>Happy Birthday</option>

    </select>
    <h3>{{ $greeting }} {{ $name }} @if($loud) ! @endif</h3>
    <form action="#" wire:submit.prevent="$set('name','bingo')"><button>Reset Name</button></form>
</div>