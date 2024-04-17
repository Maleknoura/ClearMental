let searchInput = document.querySelector(".search-input");
let token = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
let searchResults = document.getElementById("search-results");

searchInput.addEventListener("keyup", (event) => {
    sendRequest(event.target.value);
});

function sendRequest(query) {
    const url = "/search";

    const data = {
        _token: token,
        query: query,
    };

    const options = {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json, text-plain ",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token,
        },
        method: "POST",
        body: JSON.stringify(data),
    };

    fetch(url, options)
        .then((response) => response.json())
        .then((data) => displayResults(data))
        .catch((error) => console.error(error));
}

function displayResults(books) {
    searchResults.innerHTML = "";

    if (books.data.length === 0) {
        searchResults.innerHTML = "<p>No results found</p>";
        return;
    }
    const flexContainer = document.createElement("div");
    flexContainer.classList.add("flex", "flex-wrap", "mx-4");

    console.log(books);
    books.data.forEach((book) => {
        const bookDiv = document.createElement("div");
        bookDiv.classList.add(
            "w-full",
            "sm:w-1/2",
            "m-7",
            "md:w-1/3",
            "lg:w-1/4",
            "xl:w-1/5",
            "px-4",
            "mb-4"
        );
        bookDiv.innerHTML = `
<div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
    <div class="relative pb-48 overflow-hidden">
        <img class="absolute inset-0 h-full w-full object-cover" src="${
            book.image
        }">
    </div>
    <div class="p-4">
        <div class="flex">
        <h2 class="mt-2 mb-2  font-bold">${book.title}</h2>
        <i class='bx bx-show text-xl text-gray-600'></i>
            </div>
        <p class="text-sm">${book.content.slice(0, 100)}</p>
        <div class="mt-3 flex items-center">
            <span class="text-sm font-semibold"></span>&nbsp;<span class="font-bold text-xl">${
                book.auteur
            }</span>&nbsp;<span class="text-sm font-semibold"></span>
        </div>
    </div>
    <div class="p-4 border-t border-b text-xs text-gray-700">
        <span class="flex items-center mb-1">
            <i class="far fa-clock fa-fw mr-2 text-gray-900"></i> 
        </span>
    </div>
</div>
</div>

`;

        searchResults.appendChild(bookDiv);
    });
}
