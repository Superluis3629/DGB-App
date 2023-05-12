<template>
    <div>
        <div class="col-xxl black">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h5 style="font-size: 24px; color: black; font-weight: bold;" class="mb-0">DLLC Ethical Clean Center
                        (Anonymity)</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <h6 class="mb-0" style="color:black">(DLLC Ethical Clean Center- Home page screen sample)</h6>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company" style="color:black">Group of Complainant (<span
                                style="color: red">*</span>)</label>
                        <div class="col-sm-10">
                            <select id="largeSelect" v-model="FormCompliance.title" class="form-select">
                                <option disabled value="">Choose the type of reports</option>
                                <option value="DLLC Customer">DLLC Customer</option>
                                <option value="Employee">Employee</option>
                                <option value="Other">Other</option>>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company" style="color:black">Type of Complaints (<span
                                style="color: red">*</span>)</label>
                        <div class="col-sm-10">
                            <select id="largeSelect" v-model="FormCompliance.title" class="form-select">
                                <option disabled value="">Choose the type of reports</option>
                                <option value="Lease Contractual Dispute">Lease Contractual Dispute</option>
                                <option value="Labor Dispute">Labor Dispute</option>
                                <option value="Other">Other</option>>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message" style="color:black">Details of
                            event (<span style="color: red">*</span>)</label>
                        <div class="col-sm-10">
                            <div class="form-text"> <span style="color: red">*</span>Please describe the details of an accident specifically. </div>
                            <div class="input-group input-group-merge">
                                <textarea id="basic-default-message" v-model="FormCompliance.detail_of_event"
                                    class="form-control" style="height: 94px;"></textarea>
                            </div>
                            <div class="form-text"> <span style="color: red">*</span>The details of an accident include the description of the accident, place, time andrelated evidence(reliable evidence and valid). 
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company" style="color:black">The attached
                            file (<span style="color: red">*</span>)</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                <input type="file" @change="onSelected" class="form-control" id="inputGroupFile02">
                                <button type="button" class="btn btn-icon btn-outline-primary">
                                    <i class='bx bx-plus'></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                    <i class='bx bx-minus'></i>
                                </button>
                            </div>
                            <div class="form-text"> <span style="color: red">*</span>It is possible to register up to 5
                                files, up to 2MB per file, and up to 10MB in total. (jpg, jpeg, png) </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="d-grid gap-2 col-lg-2 mx-auto">
                            <button type="submit" class="btn btn-outline-primary" :disabled="check_input"
                                @click="save_compliance()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'DGBAppComplianceApp',

    data() {
        return {
            image_Product: '',
            FormData: false,
            FormCompliance: {
                recipient: '',
                type_of_report: '',
                title: '',
                company: '',
                department: '',
                name: '',
                date_time: '',
                place_of_the_event: '',
                detail_of_event: '',
                mention_anyone: '',
                feel_free: '',
                problem_happen: '',
                problem_has_lasted: '',
            }
        };
    },

    mounted() {

    },
    computed: {
        check_input() {
            if (this.FormCompliance.recipient == ''
                || this.FormCompliance.type_of_report == ''
                || this.FormCompliance.title == ''
                || this.FormCompliance.company == ''
                || this.FormCompliance.department == ''
                || this.FormCompliance.name == ''
                || this.FormCompliance.date_time == ''
                || this.FormCompliance.place_of_the_event == ''
                || this.FormCompliance.detail_of_event == ''
                || this.FormCompliance.image_Product == ''
                || this.FormCompliance.mention_anyone == ''
                || this.FormCompliance.feel_free == ''
                || this.FormCompliance.problem_happen == ''
                || this.FormCompliance.problem_has_lasted == ''
                || this.image_Product == ''
            ) {
                return true;
            } else {
                return false;
            }
        }
    },

    methods: {
        onSelected(event) {
            this.image_Product = event.target.files[0]
            let reader = new FileReader();
        },

        save_compliance() {
            let forDataCompliance = new FormData();
            forDataCompliance.append("recipient", this.FormCompliance.recipient);
            forDataCompliance.append("type_of_report", this.FormCompliance.type_of_report);
            forDataCompliance.append("title", this.FormCompliance.title);
            forDataCompliance.append("company", this.FormCompliance.company);
            forDataCompliance.append("department", this.FormCompliance.department);
            forDataCompliance.append("name", this.FormCompliance.name);
            forDataCompliance.append("date_time", this.FormCompliance.date_time);
            forDataCompliance.append("place_of_the_event", this.FormCompliance.place_of_the_event);
            forDataCompliance.append("detail_of_event", this.FormCompliance.detail_of_event);
            forDataCompliance.append("mention_anyone", this.FormCompliance.mention_anyone);
            forDataCompliance.append("feel_free", this.FormCompliance.feel_free);
            forDataCompliance.append("problem_happen", this.FormCompliance.problem_happen);
            forDataCompliance.append("problem_has_lasted", this.FormCompliance.problem_has_lasted);
            forDataCompliance.append("file", this.image_Product);
            // forDataStore.append("file", this.image_Product);
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios.post("api/compliance/add", forDataCompliance).then((response) => {
                    console.log(response.data);
                    if (response.data.success) {
                        this.FormCompliance.recipient = '';
                        this.FormCompliance.type_of_report = '';
                        this.FormCompliance.title = '';
                        this.FormCompliance.company = '';
                        this.FormCompliance.department = '';
                        this.FormCompliance.name = '';
                        this.FormCompliance.date_time = '';
                        this.FormCompliance.place_of_the_event = '';
                        this.FormCompliance.detail_of_event = '';
                        this.FormCompliance.mention_anyone = '';
                        this.FormCompliance.feel_free = '';
                        this.FormCompliance.problem_happen = '';
                        this.FormCompliance.problem_has_lasted = '';
                        this.image_Product = '';
                        // this.image_Product = '';
                        // this.imagePreview = window.location.origin + '/assets/img/no-image.png';

                        this.getCompliance();

                        this.$swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'ບັນທຶກຂໍ້ມູນສຳເລັດ!',
                            showConfirmButton: false,
                            timer: 5000,
                        })
                    } else {
                        this.$swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: 'ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດ!',
                            showConfirmButton: false,
                            timer: 5000,
                        })
                    }
                }).catch((error) => {
                    console.log(error);
                    if (error.response.status == 401) {
                        this.$storage.setStorageSync("vue-isLoggin", false)
                        window.location.reload()
                    }
                });
            })
        },
    },
};
</script>

<style lang="scss" scoped>

</style>