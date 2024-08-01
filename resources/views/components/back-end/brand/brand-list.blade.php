<div class="container-fluid" style="padding-top: 20px;">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="wrapper">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Brand List</h4>
                    </div>
                    <div class="align-items-center col">
                        <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end create_btn">Create Brand</button>
                    </div>
                </div>

                <hr class="bg-dark "/>

                <div class="table-responsive">
                    <table class="table invoice_table" id="tableData">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th class="hideEditDelete">Action</th>
                        </tr>
                        </thead>
                        <tbody id="tableList">

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>


<script>

    getList();
    async function getList() {

        try {
            showLoader();
            let res=await axios.get("api/brand-list",HeaderToken());
            hideLoader();

            let tableList=$("#tableList");
            let tableData=$("#tableData");

            tableData.DataTable().destroy();
            tableList.empty();

            res.data['BrandData'].forEach(function (item, index) {
                let row = `<tr>
                        <td>${index + 1}</td>
                        <td><img style="width: 60px; height: auto" alt="" src="${item['brand_img']}"></td>
                        <td>${item['brand_name']}</td>
                        <td>
                            <div style="display: flex; text-end;">
                                <button title="Edit" data-id="${item['id']}" class="button editBtn"><i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button title="Delete" data-id="${item['id']}" class="button deleteBtn"><i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </td>
                     </tr>`;
                tableList.append(row);
            });

            $('.editBtn').on('click', async function () {
                let id= $(this).data('id');
                await FillUpUpdateForm(id)
                $("#update-modal").modal('show');
            })

            $('.deleteBtn').on('click',function () {
                let id= $(this).data('id');
                $("#delete-modal").modal('show');
                $("#deleteID").val(id);
            })

            new DataTable('#tableData',{
                order:[[0,'desc']],
                lengthMenu:[5,10,15,20,30]
            });


        }catch (e) {
            unauthorized(e.response.status)
        }

    }


</script>
