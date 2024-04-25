const favoriteBtns = document.querySelectorAll(".favorite-btn");
let token = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
// console.log(favoriteBtns)
favoriteBtns.forEach((element) => {
    element.addEventListener("click", (event) => {
        let url = "/favoris";
        let coachId = element.dataset.coachId;
        console.log(coachId);

        const data = {
            _token: token,
            coach_id: coachId,
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
           
            .then((data) => handleResponse(data, element))
            .catch((error) => console.error(error));
    });
});

const handleResponse = (data, element) => {
    if (element.innerHTML.trim() === '<i class="bx bx-heart"></i>') {
        element.innerHTML = "<i class='bx bxs-heart' ></i>";
    } else {
        element.innerHTML = "<i class='bx bx-heart' ></i>";
    }
};
