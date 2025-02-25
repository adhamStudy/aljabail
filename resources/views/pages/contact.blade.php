<x-layout>
    <div>
        <h1 class="text-3xl text-center font bold my-5 text-blue-800">تواصل معنا</h1>
        <p class="text-center text-gray-600">في حالة وجود استفسار يرجى ملئ النموذج ، نسعد لاستقبال آرائكم</p>
        <form action="">
            <div class="flex justify-center my-5">
                <div class="w-1/3">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md">
                </div>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-1/3">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md">
                </div>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-1/3">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" class="mt-1 p-2 w-full border border-gray-300 rounded-md"></textarea>
                </div>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-1/3">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
