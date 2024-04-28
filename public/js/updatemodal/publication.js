const updateBtn = document.querySelectorAll(".update-modal");
console.log(updateBtn);
updateBtn.forEach(element => {
    element.addEventListener("click", (event) => {

        const publicationid = element.getAttribute("data-publication-id");

        const publicationtitle = element.getAttribute("data-publication-title");
        const publicationcontenu = element.getAttribute("data-publication-contenu");
        const publicationimage = element.getAttribute("data-publication-image");

        const modal = document.querySelector("#update-modal form");
        modal.action = `/publication/update/${publicationid}`;

        document.querySelector("input[name='title']").value = publicationtitle;
        document.querySelector("input[name='content']").value = publicationcontenu;
        document.querySelector("input[name='image']").value = publicationimage; 

    });
});

document.getElementById('tags').addEventListener('change', function() {
var selectElement = document.getElementById('tags');
var selectedIndex = selectElement.selectedIndex;
var selectedValue = selectElement.options[selectedIndex].text;
var selectedTagsElement = document.getElementById('selected-tags');
var tagElement = document.createElement('span');
tagElement.classList.add('inline-block', 'px-2', 'py-1', 'bg-blue-200', 'text-blue-800', 'rounded', 'mr-2', 'mb-2', 'cursor-pointer');
tagElement.textContent = selectedValue;
selectedTagsElement.appendChild(tagElement);
});
