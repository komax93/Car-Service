$(document).ready(() => {
    const brand = $("#brand");
    const model = $("#model");

    getCarBrands(brand);
    changeModelByBrand(brand, model);
});

function changeModelByBrand(brandObj, modelObj) {
    brandObj.on('change', () => {
        let brandId = brandObj.find("option:selected").val();

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