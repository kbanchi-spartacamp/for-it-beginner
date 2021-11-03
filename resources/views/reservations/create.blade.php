<x-app-layout>
    <div class="container lg:w-3/4 md:w-4/5 w-11/12 mx-auto my-8 px-4 py-4 bg-white shadow-md">

        <article class="mb-2">
            <div class="flex justify-between text-sm">
                <div>
                    <div>年齢:20代</div>
                    <div>講師歴:3年</div>
                </div>
                <div class="flex item-center">
                    <div class="border border-gray-900 px-2 h-7 leading-7 rounded-full">
                        ★★★☆☆</div>
                </div>
            </div>
            <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                山田太郎</h2>
            <div class="flex mt-1 mb-3">
                {{-- @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div><img src="" alt="" class="h-10 w-10 rounded-full object-cover mr-3"></div>
                @endif --}}
                <div><img src="/storage/images/shinnosuke.png" alt="" class="rounded-full object-cover mr-3">
                </div>
            </div>
            <p class="text-gray-700 text-base font-bold">自己紹介</p>
            <p class="text-gray-700 text-base">{!! nl2br(
    e('はじめまして。
            お気軽にどうぞ。'),
) !!}</p>
        </article>
        <div class="flex flex-col sm:flex-row items-center sm:justify-end text-center my-4">
            <form action="" method="post">
                @csrf
                <input type="submit" value="予約" onclick="if(!confirm('予約しますか？')){return false};"
                    class="w-full sm:w-40 bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 w-full sm:w-32">
            </form>
        </div>
    </div>
</x-app-layout>
