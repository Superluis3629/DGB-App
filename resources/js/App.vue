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
                        <h6 class="mb-0" style="color:black">(DLLC Ethical Clean Center - Home page screen sample)</h6>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company" style="color:black">Group of Complainant (<span
                                style="color: red">*</span>)</label>
                        <div class="col-sm-10">
                            <select id="largeSelect" v-model="FormCompliance.group_of_complaints" class="form-select">
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
                            <select id="largeSelect" v-model="FormCompliance.type_of_complaints" class="form-select">
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
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="file" accept = 'image/jpeg , image/jpg, image/png' class="form-control mt-2" @change="onSelected">
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
    name: 'DGBAppApp',

    data() {
        return {
            image_Compliance1: '',
            // FormData: false,
            FormCompliance: {
                group_of_complaints: '',
                type_of_complaints: '',
                detail_of_event: '',
            }
        };
    },

    mounted() {

    },
    computed: {
        check_input() {
            if (this.FormCompliance.group_of_complaints == ''
                || this.FormCompliance.type_of_complaints == ''
                || this.FormCompliance.detail_of_event == ''
                || this.FormCompliance.image_Compliance1 == ''
            ) {
                return true;
            } else {
                return false;
            }
        }
    },

    methods: {
        onSelected(event) {
            this.image_Compliance1 = event.target.files[0]
            let reader = new FileReader();
        },

        save_compliance() {
            let forDataCompliance = new FormData();
            forDataCompliance.append("group_of_complaints", this.FormCompliance.group_of_complaints);
            forDataCompliance.append("type_of_complaints", this.FormCompliance.type_of_complaints);
            forDataCompliance.append("detail_of_event", this.FormCompliance.detail_of_event);
            forDataCompliance.append("file", this.image_Compliance1);

            this.$axios.post("api/app/add", forDataCompliance).then((response) => {
                console.log(response.data);
                this.FormCompliance.group_of_complaints = '';
                this.FormCompliance.type_of_complaints = '';
                this.FormCompliance.detail_of_event = '';
                this.image_Compliance1 = '';

            }).catch((error)=>{
                console.log(error);
            })
        },
    },
};
</script>

<style lang="scss" scoped>

</style>