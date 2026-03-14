document.getElementById("add-job").onclick = function () {

    var div = document.createElement("div");

    div.className = "job-item";

    div.style.marginTop = "10px";

    div.innerHTML =
        '<div class="input-group mt-2">\
        <input type="text" name="jobs[]" placeholder="Job title" class="form-control"> \
        <button type="button" class="button remove-job">Remove</button></div>';

    document.getElementById("job-list").appendChild(div);

};

document.addEventListener("click", function (e) {

    if (e.target.classList.contains("remove-job")) {
        e.target.parentElement.remove();
    }

});

const fileInput = document.getElementById("company_images");
const form = document.getElementById("company_form");

fileInput.addEventListener("change", function () {

    let files = this.files;

    if (files.length > 10) {

        this.classList.add("is-invalid");

    } else {

        this.classList.remove("is-invalid");

    }

});

form.addEventListener("submit", function (e) {

    if (fileInput.files.length > 10) {

        fileInput.classList.add("is-invalid");

        e.preventDefault(); // chặn submit

        fileInput.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

    }

});
