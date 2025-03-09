<div>
    <flux:modal name="create-post" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Create Post</flux:heading>
                <flux:subheading>Add details of this post</flux:subheading>
            </div>

            <flux:input wire:model="title" label="Title" placeholder="Post Title" />
            <flux:textarea wire:model="content" label="Content" placeholder="Post content" />


            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click="submit">Save</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
