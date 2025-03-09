<x-layouts.app title="Dashboard">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Posts') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your all Posts') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <livewire:posts />
</x-layouts.app>
