$(document).ready(() => {
    const tbody = $(".table-bordered tbody");
    const form = $("form");
    const brand = $("#brand");
    const model = $("#model");

    getSummaryTable(tbody);
    getCarBrands(brand);
    changeModelByBrand(brand, model);
    submitForm(form, tbody);
});

function getSummaryTable(tbodyObj) {
    let tbodyUrl = tbodyObj.data('url');

    $.ajax({
        url: tbodyUrl,
        method: "GET",
        success: (data) => {
            $.each(data, (index, item) => {
                tbodyObj.append($("<tr></tr>")
                    .html("<th scope='row'>" + (index + 1) + "</th>" +
                        "<td>" + item.sale_date + "</td>" +
                        "<td>" + item.brand_name + "</td>" +
                        "<td>" + item.model_name + "</td>" +
                        "<td>" + item.sum + "</td>"
                    ));
            });
        }
    });
}

function changeModelByBrand(brandObj, modelObj) {
    brandObj.on('change', () => {
        let brandId = brandObj.find("option:selected").val();
        modelObj.prop('disabled', false);

        getCarModels(modelObj, brandId);
    });
}

function getCarBrands(brandObj) {
    let brandUrl = brandObj.data('url');

    $.ajax({
        url: brandUrl,
        method: "GET",
        success: (data) => {
            $.each(data, (index, brand) => {
                brandObj.append($("<option></option>").attr("value", brand.id).text(brand.name));
            });

            brandObj.selectpicker("refresh");
        }
    });
}

function getCarModels(modelObj, id) {
    let modelUrl = modelObj.data('url');

    $.ajax({
        url: modelUrl + '/' + id,
        method: "GET",
        success: (data) => {
            modelObj.empty();

            $.each(data, (index, model) => {
                modelObj.append($("<option></option>").attr("value", model.id).text(model.name));
            });

            modelObj.selectpicker("refresh");
        }
    });
}

function submitForm(formObj, tBodyObj) {
    formObj.on('submit', (e) => {
        e.preventDefault();

        let formData = formObj.serialize();
        let actionUrl = formObj.attr('action');

        $.ajax({
            url: actionUrl,
            method: "POST",
            data: formData,
            success: (res) => {
                tBodyObj.empty();
                getSummaryTable(tBodyObj);
                clearForm(formObj);
            }
        });
    });
}

function clearForm(formObj) {
    $("#brand").val('default').selectpicker("refresh");
    $("#model").val('default').selectpicker("refresh");
    formObj[0].reset();
}