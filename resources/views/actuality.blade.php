<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/actuality.css') }}">



    <title>Document</title>
</head>

<body>

    <!-- end loader -->
    <div class="full_bg">
        <!-- header -->
        <x-nav-bar />
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
                                        data-nc-id="CategoryBadgeList">
                                        @foreach ($publication->tags as $tag)
                                        <a
                                            class="transition-colors hover:text-white duration-300 nc-Badge inline-flex px-2.5 py-1 rounded-full font-medium text-xs relative text-red-800 bg-red-100 hover:bg-red-800"
                                            href="/">
                                                    <span>{{ $tag->name }}</span>
                                                    
                                                @endforeach
                                            </a></div>
                                        <div>
                                            <h2
                                                class="nc-card-title block font-semibold text-neutral-900 dark:text-neutral-100 text-xl">
                                                <a class="line-clamp-2"
                                                    title="Microsoft announces a five-year commitment to create bigger opportunities for people with disabilities"
                                                    href="/blog-single"> {{ $publication->title }}</a>
                                                </h2>
                                            <div class="hidden sm:block sm:mt-2"><span
                                                    class="text-neutral-500 dark:text-neutral-400 text-base ">{{ $publication->Contenu }}</span>
                                            </div>
                                        </div>
                                        <div class="nc-PostCardMeta inline-flex items-center fledx-wrap text-neutral-800 dark:text-neutral-200 text-sm leading-none"
                                            data-nc-id="PostCardMeta">
                                                <div>
                                                    
                                                    <i class='bx bx-message-rounded-dots text-2xl'id="comment-icon"></i>
                                                </div>
                                                <div class="sidebar hidden bg-gray-200 p-4">
                                                    <!-- Contenu des commentaires -->
                                                </div>
                                                <div class="flex items-center space-x-2">
                                                    <!-- Icône de like -->
                                                    <form action="{{ route('publication.like', $publication->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit">
                                                            @if (Auth::check() && $publication->likedByUser(Auth::user()))
                                                                <i class="fas fa-thumbs-up text-black text-xl"></i>
                                                            @else
                                                                <i class="far fa-thumbs-up text-xl"></i>
                                                            @endif
                                                        </button>
                                                    </form>

                                                    <!-- Icône de dislike -->
                                                    <form action="{{ route('publication.dislike', $publication->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit">
                                                            @if (Auth::check() && $publication->dislikedByUser(Auth::user()))
                                                                <i class="fas fa-thumbs-down text-black text-xl"></i>
                                                            @else
                                                                <i class="far fa-thumbs-down text-xl"></i>
                                                            @endif
                                                        </button>
                                                    </form>l

                                                </div>
                                                <span
                                                    class="block text-neutral-6000 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">By
                                                    {{ $publication->coach->user->name }}</span>
                                            </a><span
                                                class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span><span
                                                class="text-neutral-500 dark:text-neutral-400 font-normal line-clamp-1">AT
                                                {{ $publication->created_at->formatLocalized('%d %B %Y')}}</span>

                                            </div>
                                        </div>
                                    <!-- Placeholder pour les commentaires -->
                                     <form action="{{ route('comments.store') }}" method="POST">
                                        @csrf
                                        <div class="flex items-center mb-4 border-b border-gray-300 pb-2">
                                            <input type="hidden" name="publication_id" value="{{ $publication->id }}">
                                            <input type="text" name="content" placeholder="Add your comment..."
                                                class="border-none px-4 py-2 w-full">
                                            <button type="submit"
                                                class="bg-orange-600 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded">Comment</button>
                                      
                                            </div>
                                    </form>
                                     @foreach ($comments[$publication->id] as $comment)
                                        <div class="comment">
                                         
                                            <p>{{ $comment->content }}</p>
                                           
                                            <p>Commenté par : {{ $comment->client->user->name }}</p>
                                            @if(Auth::check() && $comment->client_id == Auth::user()->client->id)
                                            <button data-modal-target="update-modal" id=""
                                            data-modal-toggle="update-modal"
                                            data-comment-id="{{ $comment->id }}"
                                            data-comment-content="{{ $comment->content }}"
                                            class="update-comment block text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            update
                                        </button>
                                        
                                            <form action="{{ route('comments.destroy', ['comment' => $comment->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this comment?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        
@endif
</div>
                                    @endforeach 
                                </div>
                                    <div
                                        class="block flex-shrink-0 sm:w-56 sm:ml-6 rounded-3xl overflow-hidden mb-5 sm:mb-0">
                                        <a class="block w-full h-0 aspect-h-9 sm:aspect-h-16 aspect-w-16 "
                                            href="/blog-single">
                                            <div class="nc-NcImage absolute inset-0" data-nc-id="NcImage"> <img
                                                    class="object-cover w-full h-full"
                                                    src="{{ asset('storage/images/' . $publication->image) }}"
                                                    class="object-cover w-full h-full" alt="Image de la publication">
                                            </div>
                                            <span>
                                                <div class="nc-PostTypeFeaturedIcon absolute left-2 bottom-2"
                                                    data-nc-id="PostTypeFeaturedIcon"></div>
                                            </span>
                                        </a>
                                        <!-- Icônes de like et de dislike -->

                                    </div>
                                </div>

                            
                            </div>
                    @endforeach
                    <div class="flex flex-wrap justify-center mt-4">
                        {{-- Bouton "Previous" --}}
                        @if ($publications->previousPageUrl())
                            <a href="{{ $publications->previousPageUrl() }}"
                                class="px-3 py-1 bg-gray-200 text-gray-700 rounded mr-1">&laquo; Previous</a>
                        @else
                            <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded mr-1 cursor-not-allowed">&laquo;
                                Previous</span>
                        @endif

                        @for ($i = 1; $i <= $publications->lastPage(); $i++)
                            @if ($i == $publications->currentPage())
                                <span class="px-3 py-1 bg-orange-400 text-white rounded mr-1">{{ $i }}</span>
                            @else
                                <a href="{{ $publications->url($i) }}"
                                    class="px-3 py-1 bg-gray-200 text-gray-700 rounded mr-1">{{ $i }}</a>
                            @endif
                        @endfor

                           @if ($publications->nextPageUrl())
                            <a href="{{ $publications->nextPageUrl() }}"
                                class="px-3 py-1 bg-gray-200 text-gray-700 rounded mr-1">Next &raquo;</a>
                        @else
                            <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded mr-1 cursor-not-allowed">Next
                                &raquo;</span>
                        @endif
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
                                rel="noopener noreferrer" href="/"></a>
                        </div>
                        <div class="flex flex-wrap p-4 xl:p-5">
                            @foreach ($tags as $tag)
                                <a class="nc-Tag inline-block bg-white text-sm text-neutral-6000 dark:text-neutral-300 py-2 px-3 rounded-lg border border-neutral-100 md:py-2.5 md:px-4 dark:bg-neutral-700 dark:border-neutral-700 hover:border-neutral-200 dark:hover:border-neutral-6000 mr-2 mb-2"
                                    href="{{ route('publications.index', ['tag' => $tag->id]) }}">
                                    {{ $tag->name }} <span
                                        class="text-xs font-normal">({{ $tag->publications_count }})</span>
                                </a>
                            @endforeach
                        </div>

                    </div>

                    <div class="nc-WidgetPosts rounded-3xl overflow-hidden bg-neutral-100 dark:bg-neutral-800"
                        data-nc-id="WidgetPosts">
                        <div class="nc-WidgetHeading1 flex items-center justify-between p-4 xl:p-5 border-b border-neutral-200 dark:border-neutral-700 "
                            data-nc-id="WidgetHeading1">
                            <h2 class="text-lg text-neutral-900 dark:text-neutral-100 font-semibold flex-grow">🎯
                                Popular Posts</h2><a
                                class="flex-shrink-0 block text-primary-700 dark:text-primary-500 font-semibold text-sm"
                                rel="noopener noreferrer" href="/"></a>
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
                                            @foreach ($popularpublications as $popularpublication)
                                            <span
                                                class="block text-neutral-6000 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">{{ $popularpublication->auteur }}</span>
                                        </a><span
                                            class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span><span
                                            class="text-neutral-500 dark:text-neutral-400 font-normal line-clamp-1">{{ $popularpublication->created_at->formatLocalized('%d %B %Y') }}</span></div>
                                    <h2
                                        class="nc-card-title block text-base font-semibold text-neutral-900 dark:text-neutral-100">
                                        <a class=" line-clamp-2"
                                            title="New tools for Black pregnant and postpartum mothers to save lives"
                                            href="/blog-single">{{ $popularpublication->title }}</a>
                                    </h2>
                                </div><a title="New tools for Black pregnant and postpartum mothers to save lives"
                                    class="block sm:w-20 flex-shrink-0 relative rounded-lg overflow-hidden mb-5 sm:ml-4 sm:mb-0 group"
                                    href="/blog-single">
                                    <div class="w-full h-0 aspect-w-16 aspect-h-9 sm:aspect-h-16">
                                        <div class="nc-NcImage absolute inset-0" data-nc-id="NcImage"><img
                                                src="{{ asset('storage/images/' . $popularpublication->image) }}"
                                                class="nc-will-change-transform object-cover w-full h-full group-hover:scale-110 transform transition-transform duration-300"/>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                           
            </div>
        </div>
     
        <div>
        <div id="update-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative  p-6 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                           Update comment
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="update-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form method="post" action="{{ route('comments.update', ['comment' => $comment->id]) }}" class="p-4 md:p-5">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                        <input type="hidden" name="publication_id" value="{{ $comment->publication_id }}">

        
                        <div class="grid gap-4  p-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="content" id="content"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type product name" required="">
                                    
                                    
                                    <button type="submit"
                                    class="text-white mt-4 inline-flex items-center bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                            </svg>
                            Update
                        </button>
                    </form>
                </div>
            </div>
                </div>
            </div>
        
        
        </div>
        <script>
       
    const updateBtns = document.querySelectorAll('[data-modal-toggle="update-modal"]');
    updateBtns.forEach(btn => {
        btn.addEventListener("click", (event) => {
            const commentId = btn.getAttribute("data-comment-id");
            const commentContent = btn.getAttribute("data-comment-content");

            const modal = document.querySelector("#update-modal form");
            modal.action = `/comments/${commentId}/`;

            document.querySelector("input[name='content']").value = commentContent;
        });
    });


        </script>
        
        </body>

</html>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
