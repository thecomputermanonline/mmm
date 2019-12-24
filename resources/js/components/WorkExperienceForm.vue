<template>
<div>
    <h2>Work Experience (up to the last 10 years)</h2>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="company">Company</label>
            <input id="company" name="company" v-model="company" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius">
            <span class="help is-danger" v-text="errors.get('company')"></span>

        </div>
        <div class="form-group col-md-6">
            <label for="jobtitle">Job Title</label>
            <input id="jobtitle" name="jobtitle" v-model="jobtitle" class="form-control" type="text" placeholder="e.g.School Teacher">
            <span class="help is-danger" v-text="errors.get('jobtitle')"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="sdate">from</label>
            <input type="date" name="sdate" placeholder="Starting Date?" v-model="sdate" class="form-control" id="sdate">
            <span class="help is-danger" v-text="errors.get('sdate')"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="edate">To </label>
            <input type="date" name="edate" placeholder="Finishing Date?" v-model="edate" class="form-control" id="edate">
            <span class="help is-danger" v-text="errors.get('edate')"></span>
        </div>
    </div>

    <div class="form-group col-md-6">

    </div>
    <div class="btn-container">
        <button class="btn  btn-block btn-sm" :disabled="errors.any()" >Save and Add More</button>
    </div>
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
        name: "WorkExperienceForm",
        data(){
            return{
                company: '',
                job_level: '',
                job_title: '',
                location: '',
                errors: new Errors(),
            }
        },
        methods: {
            onSubmit() {

                axios.post('/work-exp', this.$data)
                    .then(response => {
                        flash('Your Work Experience has been recorded.', 'success');
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
            getEdu() {
                axios.get('/work-exp').then(response => {
                    // this.education = response.data.education;
                    // this.grade = response.data.grade;
                    // this.recentmajorprogramme = response.data.recentmajorprogramme;
                    // this.recentinstitution = response.data.recentinstitution;

                });
            },
        },
        created() {
            //this.getEdu();
        },
    }
</script>

<style scoped>

</style>
