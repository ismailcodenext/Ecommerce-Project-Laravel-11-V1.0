<div class="modal animated zoomIn" style="z-index: 99999999 !important;" id="update-modal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Doctor Page</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="UpdateProductName">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">BD Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="UpdateBDPrice">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">USD Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="UpdateUSDPrice">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Product Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="UpdateProductCode">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Stock <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control test_form_input" id="UpdateProductStock">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select class="form-select" id="UpdateProductStatus"
                                            aria-label="Default select example">
                                            <option value="">Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="UnActive">UnActive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Description <span
                                                class="text-danger">*</span></label><br>
                                        <textarea name="" id="UpdateProductDescription" cols="80" rows="10"></textarea>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="d-flex align-items-center mt-3">
                                            <img class="w-25 me-3" id="oldImg"
                                                 src="{{ asset('images/default.jpg') }}" />
                                            <div>
                                                <label class="form-label">Photo</label>
                                                <input oninput="updatePreview(this)" type="file" class="form-control"
                                                       id="UpdateProductImage">
                                                <input class="d-none" id="updateID">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="update-modal-close" class="btn modal_close_btn" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
                <button onclick="Update(event)" id="update-btn" class="btn modal_update_btn">Update</button>
            </div>
        </div>
    </div>
</div>

<script>
    async function updatePreview(input, imageUrl) {
        const oldImg = document.getElementById('oldImg');

        if (input.files && input.files[0]) {
            oldImg.src = window.URL.createObjectURL(input.files[0]);
        } else if (imageUrl) {
            oldImg.src = imageUrl;
        } else {
            oldImg.src = "{{ asset('images/default.jpg') }}";
        }
    }


    async function FillUpUpdateForm(id) {
        try {
            document.getElementById('updateID').value = id;
            showLoader();
            let res = await axios.post("/api/product-by-id", { id: id.toString() }, HeaderToken());
            hideLoader();

            let data = res.data.rows;
            document.getElementById('UpdateProductName').value = data.product_name;
            document.getElementById('UpdateBDPrice').value = data.bd_price;
            document.getElementById('UpdateUSDPrice').value = data.usd_price;
            document.getElementById('UpdateProductCode').value = data.product_code;
            document.getElementById('UpdateProductStock').value = data.stock;
            document.getElementById('UpdateProductStatus').value = data.status;
            document.getElementById('UpdateProductDescription').value = data.description;
            // Update the preview with the existing image URL
            updatePreview(document.getElementById('UpdateProductImage'), data.img_url);
        } catch (e) {
            unauthorized(e.response.status);
        }
    }


    async function Update() {
        try {
            let UpdateProductName = document.getElementById('UpdateProductName').value;
            let UpdateBDPrice = document.getElementById('UpdateBDPrice').value;
            let UpdateUSDPrice = document.getElementById('UpdateUSDPrice').value;
            let UpdateProductCode = document.getElementById('UpdateProductCode').value;
            let UpdateProductStock = document.getElementById('UpdateProductStock').value;
            let UpdateProductStatus = document.getElementById('UpdateProductStatus').value;
            let UpdateProductDescription = document.getElementById('UpdateProductDescription').value;
            let UpdateProductImage = document.getElementById('UpdateProductImage').files[0];
            let updateID = document.getElementById('updateID').value;

            // if (!CastNameUpdate || !CasttitleUpdate || !CastViewLinkUpdate || !updateID) {
            //     errorToast("All fields are required!");
            //     return;
            // }

            document.getElementById('update-modal-close').click();

            let formData = new FormData();
            formData.append('product_name', UpdateProductName);
            formData.append('bd_price', UpdateBDPrice);
            formData.append('usd_price', UpdateUSDPrice);
            formData.append('product_code', UpdateProductCode);
            formData.append('stock', UpdateProductStock);
            formData.append('status', UpdateProductStatus);
            formData.append('description', UpdateProductDescription);
            formData.append('img', UpdateProductImage);
            formData.append('id', updateID);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            showLoader();

            let res = await axios.post("/api/update-product", formData, config);
            hideLoader();

            if (res.data.status === "success") {
                successToast(res.data.message);
                let modal = new bootstrap.Modal(document.getElementById('update-modal'));
                modal.hide();
                await getList();
            } else {
                errorToast(res.data.message);
            }

        } catch (e) {
            unauthorized(e.response.status);
        }
    }
</script>
