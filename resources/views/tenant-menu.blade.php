@if (auth()->user()->setting->top_navigation)
    <div class="mt-8 flex">
        <x-filament::tenant-menu />
    </div>
@endif
