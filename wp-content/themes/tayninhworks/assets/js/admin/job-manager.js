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