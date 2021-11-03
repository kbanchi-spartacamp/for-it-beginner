<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- 日付 --}}
                <div>
                    <div class="flex items-center mb-3">
                        <ul class="flex">
                            <li class="ml-10">
                                <a href="" class="text-3xl hover:text-blue-500">11/1(月)</a>
                            </li>
                            <li class="ml-10">
                                <a href="" class="text-3xl hover:text-blue-500">11/2(火)</a>
                            </li>
                            <li class="ml-10">
                                <a href="" class="text-3xl hover:text-blue-500 text-green-500 font-bold">11/3(水)</a>
                            </li>
                            <li class="ml-10">
                                <a href="" class="text-3xl hover:text-blue-500">11/4(木)</a>
                            </li>
                            <li class="ml-10">
                                <a href="" class="text-3xl hover:text-blue-500">11/5(金)</a>
                            </li>
                            <li class="ml-10">
                                <a href="" class="text-3xl hover:text-blue-500">11/6(土)</a>
                            </li>
                            <li class="ml-10">
                                <a href="" class="text-3xl hover:text-blue-500">11/7(日)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- カテゴリ --}}
                <div>
                    <select name="category_id"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3">
                        <option disabled selected value="">カテゴリ</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                {{-- メンター一覧 --}}
                <div>
                    <div class="w-full">
                        @foreach ($schedules as $schedule)
                            <div class="bg-white w-full px-10 py-8 hover:shadow-2xl transition duration-500">
                                <div class="mt-4">
                                    <div class="flex justify-between text-sm items-center mb-4">
                                        <div class="text-gray-700">
                                            <div>年齢:20代</div>
                                            <div>講師歴:3年</div>
                                        </div>
                                        <div class="border border-gray-900 px-2 h-7 leading-7 rounded-full text-right">
                                            ★★★☆☆</div>
                                    </div>
                                    <h2 class="text-lg text-gray-700 font-semibold">{{ $schedule->mentor->name }}</h2>
                                    <div class="flex justify-between items-center">
                                        <div class="mt-4 flex items-center space-x-4 py-6">
                                            <div>
                                                {{-- @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                    <img class="h-8 w-8 rounded-full object-cover" src="storage/images/shinnosuke.png" alt="" />
                                                @endif --}}
                                                <img class="rounded-full object-cover"
                                                    src="/storage/images/shinnosuke.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <a href=""
                                                class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 mx-2">18:00</a>
                                            <a href=""
                                                class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 mx-2">18:30</a>
                                            <a href=""
                                                class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 mx-2">19:00</a>
                                            <a href=""
                                                class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 mx-2">19:30</a>
                                            <a href=""
                                                class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 mx-2">20:00</a>
                                            <a href=""
                                                class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 mx-2">20:30</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
