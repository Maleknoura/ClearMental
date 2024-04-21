
const updateBtn = document.querySelectorAll(".updatecomment");
console.log(updateBtn);
updateBtn.forEach(element => {
    element.addEventListener("click", (event) => {

        const commentId = element.getAttribute("data-comment-id");

        const commentName = element.getAttribute("data-comment-name");

        ;
        const modal = document.querySelector("#update-modal form");
        modal.action = `/comments/${comment}/`;


       
        document.querySelector("input[name='name']").value = commentName;
    });
});
