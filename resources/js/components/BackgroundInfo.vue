
<template>
    <div>
    <form class="interest-form" method="post" action="/store-background-info" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">

        <h2>Medical Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="familytuberculosis">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="familytuberculosis" class="custom-select" name="familytuberculosis" id="familytuberculosis" @change="errors.clear('familytuberculosis')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="mentaldisorder">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="mentaldisorder" class="custom-select" name="mentaldisorder" id="mentaldisorder" @change="errors.clear('mentaldisorder')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfomedical">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="moreinfomedical" class="custom-select" name="moreinfomedical" placeholder="More Info Abouth your medical Background" id="moreinfomedical" @change="errors.clear('familytuberculosis')"></textarea>

            </div>

        </div>


        <h2>Visa Background</h2>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="beyondvalidity">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="beyondvalidity" class="custom-select" name="beyondvalidity" id="beyondvalidity" @change="errors.clear('beyondvalidity')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="refusedentry">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="refusedentry" class="custom-select" name="refusedentry" id="refusedentry" @change="errors.clear('refusedentry')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="previousapplication">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="previousapplication" class="custom-select" name="previousapplication" id="previousapplication" @change="errors.clear('previousapplication')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfovisa">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="moreinfovisa" class="custom-select" name="moreinfovisa" placeholder="More Info About your visa Background" id="moreinfovisa" @change="errors.clear('moreinfovisa')"></textarea>

            </div>

        </div>

        <h2>Criminal Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="policecertificate">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="policecertificate" class="custom-select" name="policecertificate" id="policecertificate" @change="errors.clear('policecertificate')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="criminaloffence">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="criminaloffence" class="custom-select" name="criminaloffence" id="criminaloffence" @change="errors.clear('criminaloffence')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfocriminal">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="moreinfocriminal" class="custom-select" name="moreinfocriminal" placeholder="More Info About your criminal Background" id="moreinfocriminal" @change="errors.clear('moreinfocriminal')"></textarea>

            </div>

        </div>

        <h2>Court Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="courtproceduresabroad">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="courtproceduresabroad" class="custom-select" name="courtproceduresabroad" id="courtproceduresabroad" @change="errors.clear('courtproceduresabroad')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="courtprocedureshome">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="courtprocedureshome" class="custom-select" name="courtprocedureshome" id="courtprocedureshome" @change="errors.clear('courtprocedureshome')">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfocourt">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="moreinfocourt" class="custom-select" name="moreinfocourt" placeholder="More Info Abouth your medical Background" id="moreinfocourt" @change="errors.clear('moreinfocourt')"></textarea>

            </div>

        </div>





<!--        <div class="form-row mb-5">-->
<!--            <div class="form-group mb-md-0 col-md-6">-->
<!--                <label for="rconsultation" class="d-flex align-items-center">Would you like consultation on your relocation?-->
<!--                    <span class="tool_tip">-->
<!--														<a href="#" class="render-tooltip" data-original-title="" title="">-->
<!--														  <img src="images/icons/info_ic.svg" alt="">-->
<!--														</a>-->
<!--														<span class="custom-tooltip" role="tooltip">-->
<!--														  <span class="arrow"></span>-->
<!--														  <span class="tooltip-inner">One of our consultants would reach out to you and mentor you through your relocation process.</span>-->
<!--														</span>-->
<!--													</span>-->
<!--                </label>-->
<!--                <select v-model="consultation" class="custom-select" name="consultation" id="rconsultation" @change="errors.clear('consultation')">-->
<!--                    <option selected>Please select</option>-->
<!--                    <option value="1">One</option>-->
<!--                    <option value="2">Two</option>-->
<!--                    <option value="3">Three</option>-->
<!--                </select>-->
<!--            </div>-->
<!--        </div>-->



        <div class="text-right mt-4">
            <button  class="btn  btn-sm" :disabled="errors.any()">Save</button>
        </div>
    </form>
    <countries-visited></countries-visited>
    </div>
</template>

<script>


    class Errors{
        constructor(){

            this.errors={};
        }
        get(field){
            if(this.errors[field])
            {
                return this.errors[field][0];
            }
        }
        record(errors){
            this.errors = errors;
        }
        clear(field){
            delete this.errors[field];
        }
        any(){
            return Object.keys(this.errors).length > 0;
        }
    }
    export default {

        data() {
            return {

                familytuberculosis: '',
                mentaldisorder: '',
                moreinfomedical: '',
                beyondvalidity: '',
                refusedentry: '',
                previousapplication: '',
                moreinfovisa: '',
                policecertificate: '',
                criminaloffence: '',
                moreinfocriminal: '',
                courtproceduresabroad: '',
                courtprocedureshome: '',
                moreinfocourt: '',
                errors: new Errors(),

            }
        },
        methods: {
            onSubmit() {

                axios.post('/store-background-info', this.$data)
                    .then(response => {

                        flash('Background Info Saved.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });

                    }).catch(error => {
                        this.errors.record(error.response.data.errors);
                    flash('The given data was invalid.', 'warning');
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                });
            },
            getBackgroundInfo() {
                axios.get('/get-background-info').then(response => {

                    this.whyrelocate = response.data.whyrelocate;
                //mapping array
                });
            },
        },
        created() {
            this.getBackgroundInfo();
        },
    }




</script>
