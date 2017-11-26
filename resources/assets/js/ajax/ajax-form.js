$(document).ready(() => {
    const form = $("form");
    submitForm(form);
});

function submitForm(formObj) {
    formObj.on('submit', (e) => {
        e.preventDefault();

        let formData = formObj.serialize();
        let actionUrl = formObj.attr('action');

        $.ajax({
            url: actionUrl,
            method: "POST",
            data: formData,
            success: (res) => {
                console.log(res);
                clearForm(formObj);
            }
        });
    });
}

function clearForm(formObj) {
    $("#brand").empty().selectpicker("refresh");
    $("#model").empty().selectpicker("refresh");
    formObj[0].reset();
}