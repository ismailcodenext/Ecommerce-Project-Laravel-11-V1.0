<div class="modal animated zoomIn" style="z-index: 99999999 !important;" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category Add</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container" style="padding: 0 10px">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label">Name *</label>
                                        <input type="text" class="form-control test_form_input" id="categoryName">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mt-3">
                                            <img class="w-25 me-3" id="newImg" src="{{asset('images/default.jpg')}}"/>
                                            <div>
                                                <label class="form-label">Photo</label>
                                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="CategoryImg">
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
                <button id="modal-close" class="btn modal_close_btn" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn " style="width: auto;">Save</button>
            </div>
        </div>
    </div>
</div>



<script>
    async function Save() {
        try {
            let categoryName = document.getElementById('categoryName').value;
            let imgInput = document.getElementById('CategoryImg');
            let imgFile = imgInput.files[0];

            if (categoryName.length === 0) {
                errorToast("Category Name Required !");
            }
            else if (!imgInput.files || imgInput.files.length === 0) {
                errorToast("Photo Required !");
                return;
            }

            else {
                document.getElementById('modal-close').click();
                let formData = new FormData();
                formData.append('category_name',categoryName );
                formData.append('img', imgFile);

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        ...HeaderToken().headers
                    }
                }

                let res = await axios.post("/api/create-product-category", formData, config);


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

