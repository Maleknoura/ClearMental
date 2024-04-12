<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="{{ asset('css/actuality.css') }}">



    <title>Document</title>
</head>

<body>

    <!-- end loader -->
    <div class="full_bg">
        <!-- header -->
        <header class="header-area">
            <div class="container">
                <div class="row d_flex">
                    <div class=" col-md-3 col-sm-3">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="navbar-area">
                            <nav class="site-navbar">
                                <div class="logo">
                                    <img src="/images/logo.png" alt="" width="80px" height="140px">
                                </div>
                                <ul>
                                    <li><a class="active" href="">Home</a></li>
                                    <li><a href="">Actuality</a></li>
                                    <li><a href="">Library</a></li>

                                    {{-- <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user"
                                                aria-hidden="true"></i></a></li>
                                    <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search"
                                                aria-hidden="true"></i></a></li> --}}
                                </ul>
                                <ul>
                                    <li><a href=""><a href="Javascript:void(0)"><i class="fa fa-user"
                                                    aria-hidden="true"></i></a></li>
                                    <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                                <button class="nav-toggler">
                                    <span></span>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="nc-SectionLatestPosts relative px-12 py-16 lg:py-28">
            <div class="flex flex-col lg:flex-row">
                <div class="w-full lg:w-3/5 xl:w-2/3 xl:pr-14">
                    <div
                        class="nc-Section-Heading relative flex flex-col sm:flex-row sm:items-end justify-between mb-12 lg:mb-16 text-neutral-900 dark:text-neutral-50">
                        <div class="max-w-2xl">
                            <h2 class="text-3xl md:text-4xl font-semibold">Publications 🎈</h2><span
                                class="mt-2 md:mt-3 font-normal block text-base sm:text-xl text-neutral-500 dark:text-neutral-400">

                        </div>
                    </div>
                    @foreach ($publications as $publication)
                        <div class="grid gap-6 mb-4 md:gap-8 grid-cols-1">
                            <div class="nc-Card3 relative flex flex-col-reverse sm:flex-row sm:items-center rounded-[40px] group "
                                data-nc-id="Card3">
                                <div class="flex flex-col flex-grow">
                                    <div class="space-y-5 mb-4">
                                        <div class="nc-CategoryBadgeList flex flex-wrap space-x-2"
                                            data-nc-id="CategoryBadgeList"><a
                                                class="transition-colors hover:text-white duration-300 nc-Badge inline-flex px-2.5 py-1 rounded-full font-medium text-xs relative text-red-800 bg-red-100 hover:bg-red-800"
                                                href="/">
                                                @foreach ($publication->tags as $tag)
                                                    <span>{{ $tag->name }}</span>
                                                @endforeach
                                            </a></div>
                                        <div>
                                            <h2
                                                class="nc-card-title block font-semibold text-neutral-900 dark:text-neutral-100 text-xl">
                                                <a class="line-clamp-2"
                                                    title="Microsoft announces a five-year commitment to create bigger opportunities for people with disabilities"
                                                    href="/blog-single">Microsoft announces a five-year commitment to
                                                    create
                                                    bigger opportunities for people with disabilities</a>
                                            </h2>
                                            <div class="hidden sm:block sm:mt-2"><span
                                                    class="text-neutral-500 dark:text-neutral-400 text-base line-clamp-1">{{ substr($publication->Contenu, 0, 150) }}</span>
                                            </div>
                                        </div>
                                        <div class="nc-PostCardMeta inline-flex items-center fledx-wrap text-neutral-800 dark:text-neutral-200 text-sm leading-none"
                                            data-nc-id="PostCardMeta"><a
                                                class="flex-shrink-0 relative flex items-center space-x-2"
                                                href="/author">
                                                <div
                                                    class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-7 w-7 text-sm ring-1 ring-white dark:ring-neutral-900">
                                                   <span class="wil-avatar__name">P</span>
                                                </div>
                                                <span
                                                    class="block text-neutral-6000 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">By {{ $publication->coach->user->name }}</span>
                                            </a><span
                                                class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span><span
                                                class="text-neutral-500 dark:text-neutral-400 font-normal line-clamp-1">AT {{ $publication->created_at->format('Y-m-d H:i:s') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="block flex-shrink-0 sm:w-56 sm:ml-6 rounded-3xl overflow-hidden mb-5 sm:mb-0">
                                    <a class="block w-full h-0 aspect-h-9 sm:aspect-h-16 aspect-w-16 "
                                        href="/blog-single">
                                        <div class="nc-NcImage absolute inset-0" data-nc-id="NcImage"> <img   class="object-cover w-full h-full" src="{{ asset('storage/images/' . $publication->image) }}" class="object-cover w-full h-full" alt="Image de la publication">                            </div><span>
                                            <div class="nc-PostTypeFeaturedIcon absolute left-2 bottom-2"
                                                data-nc-id="PostTypeFeaturedIcon"></div>
                                        </span>
                                    </a></div>
                            </div>
                           


                    </div>
                    @endforeach
                        <div
                            class="flex flex-col mt-12 md:mt-20 space-y-5 sm:space-y-0 sm:space-x-3 sm:flex-row sm:justify-between sm:items-center">
                            <nav class="nc-Pagination inline-flex space-x-1 text-base font-medium "><span
                                    class="inline-flex w-11 h-11 items-center justify-center rounded-full bg-primary-6000 text-white focus:outline-none">1</span><a
                                    class="inline-flex w-11 h-11 items-center justify-center rounded-full bg-white hover:bg-neutral-100 border border-neutral-200 text-neutral-6000 dark:text-neutral-400 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:border-neutral-700 focus:outline-none"
                                    href="/blog">2</a><a
                                    class="inline-flex w-11 h-11 items-center justify-center rounded-full bg-white hover:bg-neutral-100 border border-neutral-200 text-neutral-6000 dark:text-neutral-400 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:border-neutral-700 focus:outline-none"
                                    href="/blog">3</a><a
                                    class="inline-flex w-11 h-11 items-center justify-center rounded-full bg-white hover:bg-neutral-100 border border-neutral-200 text-neutral-6000 dark:text-neutral-400 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:border-neutral-700 focus:outline-none"
                                    href="/blog">4</a></nav><button
                                class="nc-Button relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6  ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-6000 dark:focus:ring-offset-0">Show
                                me more</button>
                        </div>
                </div>
                <div class="w-full space-y-7 mt-24 lg:mt-0 lg:w-2/5 lg:pl-10 xl:pl-0 xl:w-1/3 ">
                    <div class="nc-WidgetTags rounded-3xl overflow-hidden bg-neutral-100 dark:bg-neutral-800"
                        data-nc-id="WidgetTags">
                        <div class="nc-WidgetHeading1 flex items-center justify-between p-4 xl:p-5 border-b border-neutral-200 dark:border-neutral-700 "
                            data-nc-id="WidgetHeading1">
                            <h2 class="text-lg text-neutral-900 dark:text-neutral-100 font-semibold flex-grow">🏷
                                Discover more tags</h2><a
                                class="flex-shrink-0 block text-primary-700 dark:text-primary-500 font-semibold text-sm"
                                rel="noopener noreferrer" href="/">View all</a>
                        </div>
                        <div class="flex flex-wrap p-4 xl:p-5">
                            @foreach($tags as $tag)
                                <a class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                   href="{{ route('publications.index', ['tag' => $tag->id]) }}">
                                    {{ $tag->name }} <span class="text-xs font-normal">({{ $tag->publications_count }})</span>
                                </a>
                            @endforeach
                        </div>
                        {{-- </div><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Health<span class="text-xs font-normal">
                                    (4)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Electronics<span class="text-xs font-normal">
                                    (7)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Industrial<span class="text-xs font-normal">
                                    (26)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Health<span class="text-xs font-normal">
                                    (20)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Toys<span class="text-xs font-normal">
                                    (22)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Sports<span class="text-xs font-normal">
                                    ()</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Automotive<span class="text-xs font-normal">
                                    (9)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Computers<span class="text-xs font-normal">
                                    (26)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Design<span class="text-xs font-normal">
                                    (15)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Beauty<span class="text-xs font-normal">
                                    (27)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Books<span class="text-xs font-normal">
                                    (25)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">life Style<span class="text-xs font-normal">
                                    (18)</span></a><a
                                class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                data-nc-id="Tag" href="/">Graphic Design<span class="text-xs font-normal">
                                    (25)</span></a></div> --}}
                    </div>

                    <div class="nc-WidgetPosts rounded-3xl overflow-hidden bg-neutral-100 dark:bg-neutral-800"
                        data-nc-id="WidgetPosts">
                        <div class="nc-WidgetHeading1 flex items-center justify-between p-4 xl:p-5 border-b border-neutral-200 dark:border-neutral-700 "
                            data-nc-id="WidgetHeading1">
                            <h2 class="text-lg text-neutral-900 dark:text-neutral-100 font-semibold flex-grow">🎯
                                Popular Posts</h2><a
                                class="flex-shrink-0 block text-primary-700 dark:text-primary-500 font-semibold text-sm"
                                rel="noopener noreferrer" href="/">View all</a>
                        </div>
                        <div class="flex flex-col divide-y divide-neutral-200 dark:divide-neutral-700">
                            <div class="nc-Card3Small relative flex flex-col-reverse sm:flex-row sm:justify-between sm:items-center p-4 xl:px-5 xl:py-6 hover:bg-neutral-200 dark:hover:bg-neutral-700"
                                data-nc-id="Card3Small"><a class=" absolute inset-0"
                                    title="New tools for Black pregnant and postpartum mothers to save lives"
                                    href="/blog-single"></a>
                                <div class="relative space-y-2">
                                    <div class="nc-PostCardMeta inline-flex items-center fledx-wrap text-neutral-800 dark:text-neutral-200 text-sm leading-none"
                                        data-nc-id="PostCardMeta"><a
                                            class="flex-shrink-0 relative flex items-center space-x-2" href="/author">
                                            <div
                                                class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-7 w-7 text-sm ring-1 ring-white dark:ring-neutral-900">
                                                <img class="absolute inset-0 w-full h-full object-cover rounded-full"
                                                    src="./static/media/Image-5.b1088376a574bcedc983.png"
                                                    alt="Tousy Vita"><span class="wil-avatar__name">T</span>
                                            </div>
                                            <span
                                                class="block text-neutral-6000 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">Tousy
                                                Vita</span>
                                        </a><span
                                            class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span><span
                                            class="text-neutral-500 dark:text-neutral-400 font-normal line-clamp-1">May
                                            20, 2021</span></div>
                                    <h2
                                        class="nc-card-title block text-base font-semibold text-neutral-900 dark:text-neutral-100">
                                        <a class=" line-clamp-2"
                                            title="New tools for Black pregnant and postpartum mothers to save lives"
                                            href="/blog-single">New tools for Black pregnant and postpartum mothers to
                                            save lives</a>
                                    </h2>
                                </div><a title="New tools for Black pregnant and postpartum mothers to save lives"
                                    class="block sm:w-20 flex-shrink-0 relative rounded-lg overflow-hidden mb-5 sm:ml-4 sm:mb-0 group"
                                    href="/blog-single">
                                    <div class="w-full h-0 aspect-w-16 aspect-h-9 sm:aspect-h-16">
                                        <div class="nc-NcImage absolute inset-0" data-nc-id="NcImage"><img
                                                src="https://images.pexels.com/photos/8241135/pexels-photo-8241135.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                                                class="nc-will-change-transform object-cover w-full h-full group-hover:scale-110 transform transition-transform duration-300"
                                                alt="nc-imgs"
                                                title="New tools for Black pregnant and postpartum mothers to save lives">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nc-Card3Small relative flex flex-col-reverse sm:flex-row sm:justify-between sm:items-center p-4 xl:px-5 xl:py-6 hover:bg-neutral-200 dark:hover:bg-neutral-700"
                                data-nc-id="Card3Small"><a class=" absolute inset-0"
                                    title="People who inspired us in 2019 " href="/blog-single"></a>
                                <div class="relative space-y-2">
                                    <div class="nc-PostCardMeta inline-flex items-center fledx-wrap text-neutral-800 dark:text-neutral-200 text-sm leading-none"
                                        data-nc-id="PostCardMeta"><a
                                            class="flex-shrink-0 relative flex items-center space-x-2" href="/author">
                                            <div
                                                class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-7 w-7 text-sm ring-1 ring-white dark:ring-neutral-900">
                                                <img class="absolute inset-0 w-full h-full object-cover rounded-full"
                                                    src="./static/media/Image-10.93048ca791076288cf69.png"
                                                    alt="Fones Mimi"><span class="wil-avatar__name">F</span>
                                            </div>
                                            <span
                                                class="block text-neutral-6000 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">Fones
                                                Mimi</span>
                                        </a><span
                                            class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span><span
                                            class="text-neutral-500 dark:text-neutral-400 font-normal line-clamp-1">May
                                            20, 2021</span></div>
                                    <h2
                                        class="nc-card-title block text-base font-semibold text-neutral-900 dark:text-neutral-100">
                                        <a class=" line-clamp-2" title="People who inspired us in 2019 "
                                            href="/blog-single">People who inspired us in 2019 </a>
                                    </h2>
                                </div><a title="People who inspired us in 2019 "
                                    class="block sm:w-20 flex-shrink-0 relative rounded-lg overflow-hidden mb-5 sm:ml-4 sm:mb-0 group"
                                    href="/blog-single">
                                    <div class="w-full h-0 aspect-w-16 aspect-h-9 sm:aspect-h-16">
                                        <div class="nc-NcImage absolute inset-0" data-nc-id="NcImage"><img
                                                src="https://images.pexels.com/photos/4226100/pexels-photo-4226100.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                                                class="nc-will-change-transform object-cover w-full h-full group-hover:scale-110 transform transition-transform duration-300"
                                                alt="nc-imgs" title="People who inspired us in 2019 "></div>
                                    </div>
                                </a>
                            </div>
                            <div class="nc-Card3Small relative flex flex-col-reverse sm:flex-row sm:justify-between sm:items-center p-4 xl:px-5 xl:py-6 hover:bg-neutral-200 dark:hover:bg-neutral-700"
                                data-nc-id="Card3Small"><a class=" absolute inset-0"
                                    title="How architects visualize design for world’s biggest airport"
                                    href="/blog-single"></a>
                                <div class="relative space-y-2">
                                    <div class="nc-PostCardMeta inline-flex items-center fledx-wrap text-neutral-800 dark:text-neutral-200 text-sm leading-none"
                                        data-nc-id="PostCardMeta"><a
                                            class="flex-shrink-0 relative flex items-center space-x-2" href="/author">
                                            <div
                                                class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-7 w-7 text-sm ring-1 ring-white dark:ring-neutral-900">
                                                <img class="absolute inset-0 w-full h-full object-cover rounded-full"
                                                    src="./static/media/Image-9.d879028d45de09c9ca3b.png"
                                                    alt="Pillifant Vern"><span class="wil-avatar__name">P</span>
                                            </div>
                                            <span
                                                class="block text-neutral-6000 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">Pillifant
                                                Vern</span>
                                        </a><span
                                            class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span><span
                                            class="text-neutral-500 dark:text-neutral-400 font-normal line-clamp-1">May
                                            20, 2021</span></div>
                                    <h2
                                        class="nc-card-title block text-base font-semibold text-neutral-900 dark:text-neutral-100">
                                        <a class=" line-clamp-2"
                                            title="How architects visualize design for world’s biggest airport"
                                            href="/blog-single">How architects visualize design for world’s biggest
                                            airport</a>
                                    </h2>
                                </div><a title="How architects visualize design for world’s biggest airport"
                                    class="block sm:w-20 flex-shrink-0 relative rounded-lg overflow-hidden mb-5 sm:ml-4 sm:mb-0 group"
                                    href="/blog-single">
                                    <div class="w-full h-0 aspect-w-16 aspect-h-9 sm:aspect-h-16">
                                        <div class="nc-NcImage absolute inset-0" data-nc-id="NcImage"><img
                                                src="https://images.pexels.com/photos/3225528/pexels-photo-3225528.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                                                class="nc-will-change-transform object-cover w-full h-full group-hover:scale-110 transform transition-transform duration-300"
                                                alt="nc-imgs"
                                                title="How architects visualize design for world’s biggest airport">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nc-Card3Small relative flex flex-col-reverse sm:flex-row sm:justify-between sm:items-center p-4 xl:px-5 xl:py-6 hover:bg-neutral-200 dark:hover:bg-neutral-700"
                                data-nc-id="Card3Small"><a class=" absolute inset-0"
                                    title="Take a 3D tour through a Microsoft datacenter" href="/blog-single"></a>
                                <div class="relative space-y-2">
                                    <div class="nc-PostCardMeta inline-flex items-center fledx-wrap text-neutral-800 dark:text-neutral-200 text-sm leading-none"
                                        data-nc-id="PostCardMeta"><a
                                            class="flex-shrink-0 relative flex items-center space-x-2" href="/author">
                                            <div
                                                class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-7 w-7 text-sm ring-1 ring-white dark:ring-neutral-900">
                                                <img class="absolute inset-0 w-full h-full object-cover rounded-full"
                                                    src="./static/media/Image-2.405c62ff9ad88c47e28c.png"
                                                    alt="Birrell Chariot"><span class="wil-avatar__name">B</span>
                                            </div><span
                                                class="block text-neutral-6000 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">Birrell
                                                Chariot</span>
                                        </a><span
                                            class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span><span
                                            class="text-neutral-500 dark:text-neutral-400 font-normal line-clamp-1">May
                                            20, 2021</span></div>
                                    <h2
                                        class="nc-card-title block text-base font-semibold text-neutral-900 dark:text-neutral-100">
                                        <a class=" line-clamp-2" title="Take a 3D tour through a Microsoft datacenter"
                                            href="/blog-single">Take a 3D tour through a Microsoft datacenter</a>
                                    </h2>
                                </div><a title="Take a 3D tour through a Microsoft datacenter"
                                    class="block sm:w-20 flex-shrink-0 relative rounded-lg overflow-hidden mb-5 sm:ml-4 sm:mb-0 group"
                                    href="/blog-single">
                                    <div class="w-full h-0 aspect-w-16 aspect-h-9 sm:aspect-h-16">
                                        <div class="nc-NcImage absolute inset-0" data-nc-id="NcImage"><img
                                                src="https://images.pexels.com/photos/2507007/pexels-photo-2507007.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                                                class="nc-will-change-transform object-cover w-full h-full group-hover:scale-110 transform transition-transform duration-300"
                                                alt="nc-imgs" title="Take a 3D tour through a Microsoft datacenter">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
