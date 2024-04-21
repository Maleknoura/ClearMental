

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
