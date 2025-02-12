<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Create New Invoice</h2>

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Amount</label>
            <input type="text" wire:model="amount" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-2" 
                   placeholder="Enter amount" inputmode="decimal">
            @error('amount') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Due Date</label>
            <input type="date" wire:model="due_date" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-2">
            @error('due_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Customer</label>
            <select wire:model="customer_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-2">
                <option value="">-- Select Customer --</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
            @error('customer_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select wire:model="status" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-2">
                <option value="">-- Select Status --</option>
                @foreach($statuses as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            @error('status') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                Create Invoice
            </button>
        </div>
    </form>
</div>
