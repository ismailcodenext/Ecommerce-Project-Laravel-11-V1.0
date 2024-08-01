<div class="modal animated zoomIn" style="z-index: 99999999 !important;" id="create-modal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Add</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container" style="padding: 0 10px">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Product Category<span class="text-danger">*</span></label>
                                        <select class="form-select" id="ProductCategory" aria-label="Default select example">
                                            <option value="none">Select Category</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Product Brand<span class="text-danger">*</span></label>
                                        <select class="form-select" id="ProductBrand" aria-label="Default select example">
                                            <option value="none">Select Brand</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="ProductName">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">BD Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="BDPrice">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">USD Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="USDPrice">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Product Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="ProductCode">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Stock <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="Stock">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select class="form-select" id="Status" aria-label="Default select example">
                                            <option value="">Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="UnActive">UnActive</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-center mt-3">
                                            <img class="w-10 me-3" id="newImg" src="{{asset('images/default.jpg')}}" />
                                            <div>
                                                <label class="form-label">Photo</label>
                                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])"
                                                    type="file" class="form-control" id="ProductImage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Description <span
                                                class="text-danger">*</span></label><br>
                                        <textarea name="" id="ProductDescription" cols="80" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn modal_close_btn" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn " style="width: auto;">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    ProductCategoryShow();
    ProductBrandShow();



    async function ProductCategoryShow() {
        try {
            let res = await axios.get("/api/product-category-list", HeaderToken());
            let Categories = res.data.ProductCategoryData;
            let optionsHtmlCategory = Categories.map(Categories => `<option value="${Categories.id}">${Categories.category_name}</option>`).join('');

            // Add the "Select Category" option as the first option
            optionsHtmlCategory = `<option value="none" selected>Select Category</option>` + optionsHtmlCategory;

            $("#ProductCategory").html(optionsHtmlCategory);

        } catch (error) {
            console.error("Error occurred while fetching sessions:", error);
        }
    }

    async function ProductBrandShow() {
        try {
            let res = await axios.get("/api/brand-list", HeaderToken());
            let Brands = res.data.BrandData;
            let optionsHtmlBrand = Brands.map(Brands => `<option value="${Brands.id}">${Brands.brand_name}</option>`).join('');

            // Add the "Select Brand" option as the first option
            optionsHtmlBrand = `<option value="none" selected>Select Brand</option>` + optionsHtmlBrand;

            $("#ProductBrand").html(optionsHtmlBrand);

        } catch (error) {
            console.error("Error occurred while fetching Brand:", error);
        }
    }


    async function Save() {
        try {
            let ProductName = document.getElementById('ProductName').value;
            let BDPrice = document.getElementById('BDPrice').value;
            let USDPrice = document.getElementById('USDPrice').value;
            let ProductCode = document.getElementById('ProductCode').value;
            let Stock = document.getElementById('Stock').value;
            let Status = document.getElementById('Status').value;
            let ProductDescription = document.getElementById('ProductDescription').value;
            let ProductCategory = document.getElementById('ProductCategory').value;
            let ProductBrand = document.getElementById('ProductBrand').value;
            let imgInput = document.getElementById('ProductImage');
            let imgFile = imgInput.files[0];

            if (ProductName.length === 0) {
                errorToast("Product Name Required !");
            }

            else if (ProductCategory.length === 0) {
                errorToast("Product Category Required !");
            }

            else if (ProductBrand.length === 0) {
                errorToast("Product Brand Required !");
            }

            else if (BDPrice.length === 0) {
                errorToast("BD Price Required !");
            }

            else if (USDPrice.length === 0) {
                errorToast("USD Price Required !");
            }

            else if (ProductCode.length === 0) {
                errorToast("Product Code Required !");
            }

            else if (Stock.length === 0) {
                errorToast("Stock Required !");
            }

            else if (Status.length === 0) {
                errorToast("Status Required !");
            }

            else if (ProductDescription.length === 0) {
                errorToast("Product Description Required !");
            }

            else if (!imgInput.files || imgInput.files.length === 0) {
                errorToast("Product Photo Required !");
                return;
            }

            else {
                document.getElementById('modal-close').click();
                let formData = new FormData();
                formData.append('product_name', ProductName);
                formData.append('bd_price', BDPrice);
                formData.append('usd_price', USDPrice);
                formData.append('product_code', ProductCode);
                formData.append('stock', Stock);
                formData.append('status', Status);
                formData.append('description', ProductDescription);
                formData.append('category_id', ProductCategory);
                formData.append('brand_id', ProductBrand);
                formData.append('img', imgFile);

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        ...HeaderToken().headers
                    }
                }

                let res = await axios.post("/api/create-product", formData, config);


                if (res.data['status'] === "success") {
                    successToast(res.data['message']);
                    document.getElementById("save-form").reset();
                    await getList();
                } else {
                    errorToast(res.data['message'])
                }
            }

        } catch (e) {
            unauthorized(e.response.status)
        }
    }
</script>


