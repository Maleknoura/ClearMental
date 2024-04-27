
    const updateBtn = document.querySelectorAll(".update-modal");
    console.log(updateBtn);
    updateBtn.forEach(element => {
        element.addEventListener("click", (event) => {

            const bookid = element.getAttribute("data-book-id");

            const bookTitle = element.getAttribute("data-book-title");
            const bookContent = element.getAttribute("data-book-content");
            const bookAuthor = element.getAttribute("data-book-author");

            const modal = document.querySelector("#update-modal form");
            modal.action = `/books/update/${bookid}`;

            document.querySelector("input[name='title']").value = bookTitle;
            document.querySelector("input[name='content']").value = bookContent;
            document.querySelector("input[name='auteur']").value = bookAuthor;
            document.querySelector("input[name='image']").value = image; 

        });
    });
