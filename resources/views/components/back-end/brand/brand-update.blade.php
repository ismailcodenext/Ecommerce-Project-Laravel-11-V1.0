<div class="modal animated zoomIn" style="z-index: 99999999 !important;" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label">Brand Name *</label>
                                        <input type="text" class="form-control test_form_input" id="UpdateBrandName">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mt-3">
                                            <img class="w-25 me-3" id="oldImg" src="{{ asset('images/default.jpg') }}"/>
                                            <div>
                                                <label class="form-label">Photo</label>
                                                <input oninput="updatePreview(this)" type="file" class="form-control" id="UpdateBrandImage">
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
                <button id="update-modal-close" class="btn modal_close_btn" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Update(event)" id="update-btn" class="btn modal_update_btn" >Update</button>
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
            let res = await axios.post("api/brand-by-id", { id: id.toString() }, HeaderToken());
            hideLoader();

            let data = res.data.rows;
            document.getElementById('UpdateBrandName').value = data.brand_name;
            // Update the preview with the existing image URL
            updatePreview(document.getElementById('UpdateBrandImage'), data.brand_img);
        } catch (e) {
            unauthorized(e.response.status);
        }
    }




    async function Update() {
        try {
            let UpdateBrandName = document.getElementById('UpdateBrandName').value;
            let updateID = document.getElementById('updateID').value;
            let UpdateBrandImage = document.getElementById('UpdateBrandImage').files[0];



            document.getElementById('update-modal-close').click();

            let formData = new FormData();
            formData.append('brand_name', UpdateBrandName);
            formData.append('img', UpdateBrandImage);
            formData.append('id', updateID);
            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            showLoader();

            let res = await axios.post("api/update-brand", formData, config);
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


