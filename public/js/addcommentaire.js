

document.addEventListener("DOMContentLoaded", function() {
    var submitButton = document.getElementById('submitButton');
    submitButton.addEventListener('click', function() {
        var commentInput = document.getElementById('commentInput').value;
        const idComment = this.value
        addComment(commentInput, idComment);
    });

    let showCommentBtn = document.querySelector("#showCommentBtn");
    showCommentBtn.addEventListener("click", () => {
        let id = showCommentBtn.getAttribute("data-publication-id");

        fetchComments(id)
        submitButton.value = id
    })

    function fetchComments(publicationId) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', `/comments/${publicationId}`, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var comments = JSON.parse(xhr.responseText);
                    console.log(comments.result)
                    displayComments(comments.result);
                } else {
                    console.error('Error fetching comments:', xhr.status);
                }
            }
        };

        xhr.send();
    }

    function displayComments(comments) {
        var commentsContainer = document.getElementById('commentsContainer');
        commentsContainer.innerHTML = ''; 

        comments.forEach(function(comment) {
        
            var commentDiv = document.createElement('div');
            commentDiv.textContent = comment.content;
            commentsContainer.appendChild(commentDiv);
        });
    }



    function addComment(commentInput, idComment) {
        var publicationId = document.getElementById('publicationId').value;

        var requestData = {

            content: commentInput,
            publication_id: idComment
        };

        fetch('/comments', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify(requestData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error adding comment: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                fetchComments(idComment)

            })
            .catch(error => {
                console.error(error);
            });


        var requestData = {

            content: commentInput,
            publication_id: idComment
        };



    }

    function displayComment(comment) {
        var commentsContainer = document.getElementById('commentsContainer');
        var commentDiv = document.createElement('div');
        commentDiv.textContent = comment.body;
        commentsContainer.appendChild(commentDiv);
    }

    fetchComments();
});
