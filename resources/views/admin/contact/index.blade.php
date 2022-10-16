<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mb-5">
            <x-button-link :href="route('admin.contact.create')">{{ __('Create a contact') }}</x-button-link>
        </div>
        <table class="table table-bordered w-100">
            <thead>
            <tr>
                <th class="text-left">{{ __('Firstname') }}</th>
                <th class="text-left">{{ __('Lastname') }}</th>
                <th class="text-left">{{ __('Email') }}</th>
                <td class="w-28"></td>
                <td class="w-28"></td>
            </tr>
            </thead>
            <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $contact->firstname }}</td>
                    <td>{{ $contact->lastname }}</td>
                    <td>{{ $contact->email }}</td>
                    <td><x-button-link :href="route('admin.contact.edit', $contact)">{{ __('Modify') }}</x-button-link></td>
                    <td>
                        <form class="delete-form" action="{{ route('admin.contact.destroy', $contact) }}" method="post" enctype="application/x-www-form-urlencoded">
                            @csrf
                            @method('delete')
                            <x-button>{{ __('Delete') }}</x-button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">{{ __('No contact') }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
