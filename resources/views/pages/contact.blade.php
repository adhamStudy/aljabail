<x-layout title="تواصل معنا">
    <div>

        @if (session('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                x-transition:enter="transition ease-out duration-500 transform"
                x-transition:enter-start="opacity-0 scale-75 translate-y-5"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-500 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-75 translate-y-5"
                class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
                🎉 {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                x-transition:enter="transition ease-out duration-500 transform"
                x-transition:enter-start="opacity-0 scale-75 translate-y-5"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-500 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-75 translate-y-5"
                class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg">
                {{ session('error') }}
            </div>
        @endif


        <h1 class="text-3xl text-center font bold my-5 text-blue-800">تواصل معنا</h1>
        <p class="text-center text-gray-600">في حالة وجود استفسار يرجى ملئ النموذج ، نسعد لاستقبال آرائكم</p>
        <form action="{{ route('store') }}" method="POST" class="mt-5">
            @csrf
            <div class="flex justify-center my-5">
                <div class="w-full sm:w-2/3 md:w-1/3 px-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input value="{{ old('name') }}" type="text" name="name" id="name"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-center my-5">
                <div class="w-full sm:w-2/3 md:w-1/3 px-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input value="{{ old('email') }}" type="email" name="email" id="email"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-center my-5">
                <div class="w-full sm:w-2/3 md:w-1/3 px-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-center my-5">
                <div class="w-full sm:w-2/3 md:w-1/3 px-4">
                    <button type="submit"
                        class="w-full sm:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Submit
                    </button>
                </div>
            </div>
        </form>



        <div class="mt-20">
            <h1 class="text-4xl font-extrabold text-center text-blue-800 mb-8">عرض آراء عملائنا</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($messages as $message)
                    <div class="flex justify-center my-5">
                        <div
                            class="w-full max-w-sm bg-white border border-gray-300 rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="p-6">
                                <p class="text-lg font-semibold text-gray-800 mb-4">{{ $message->message }}</p>
                                <p class="text-gray-500">{{ $message->name }}</p>
                                <p class="text-gray-400 text-sm">{{ $message->email }}</p>
                            </div>

                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-600 mt-5 text-xl font-semibold">لا يوجد آراء حاليا</p>
                @endforelse
            </div>
        </div>

</x-layout>
