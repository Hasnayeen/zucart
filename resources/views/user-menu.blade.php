<div class="p-6 flex items-center gap-x-3 border-t">
    <x-filament::user-menu />
    <div
        @if (filament()->isSidebarCollapsibleOnDesktop())
            x-data="{}"
            x-show="$store.sidebar.isOpen"
        @endif
    >
        <p class="font-medium tracking-tight">
            {{ filament()->getUserName(auth()->user()) }}
        </p>
    </div>
</div>
