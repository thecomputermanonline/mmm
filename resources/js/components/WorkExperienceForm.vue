<template>
<div>
    <h2>Work Experience (up to the last 10 years)</h2>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="weducation">Job Title</label>
            <select  class="custom-select" name="education"  id="weducation" v-model="education" @change="errors.clear('education')">>
                <option selected>Please select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <span class="help is-danger" v-text="errors.get('education')"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="wrecentinstitution">Company</label>
            <input id="wrecentinstitution" name="recentinstitution" v-model="recentinstitution" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius">
            <span class="help is-danger" v-text="errors.get('recentinstitution')"></span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="grade">grade?</label>
            <input id="grade" name="grade" v-model="grade" class="form-control" type="text" placeholder="Enter GPA score">
            <span class="help is-danger" v-text="errors.get('grade')"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="recentmajorprogramme">course</label>
            <input name="recentmajorprogramme" id="recentmajorprogramme" v-model="recentmajorprogramme" class="form-control" type="text" placeholder="Example: law">
            <span class="help is-danger" v-text="errors.get('recentmajorprogramme')"></span>
        </div>

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
