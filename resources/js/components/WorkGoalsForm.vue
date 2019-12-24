
<template>
    <div>
    <form class="interest-form" method="post" action="/store-work-goals" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">

        <h2>My Goals</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="location">Where are you intending to work? </label>
                <select v-model="location" class="custom-select" id="location"    @change="errors.clear('location')">
                    <option value="none " selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <span class="help is-danger" v-text="errors.get('location')"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="gotjob">Have you gotten a job yet?</label>
                <select v-model="gotjob" class="custom-select"id="gotjob" @change="errors.clear('gotjob')">
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <span class="help is-danger" v-text="errors.get('gotjob')"></span>
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="form-group mb-md-0 col-md-6">
                <label for="profession">What career path are you thnking of going into?</label>
                <select v-model="profession" name="profession" class="custom-select" id="profession" @change="errors.clear('profession')">
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <span class="help is-danger" v-text="errors.get('profession')"></span>
            </div>
            <div class="form-group mb-0 col-md-6">
                <label for="certification">Do you have certification to work in the choosen career field?</label>
                <select v-model="certification" name="certification"  class="custom-select" id="certification" @change="errors.clear('certification')">
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <span class="help is-danger" v-text="errors.get('certification')"></span>
            </div>
        </div>

        <h2>My Future Plans</h2>

        <span class="sub-title">A. English proficiency test</span>

        <span class="help is-danger" v-text="errors.get('language')"></span>
        <ul class="radios-holder">
            <li>
                <div class="checkbox-radio">
                    <input  v-model="language"  type="checkbox" value="ielts" name="language" id="wielts" @change="errors.clear('language')">
                    <label for="wielts">IELTS</label>
                </div>
            </li> <li>
            <div class="checkbox-radio">
                <input  v-model="language"  type="checkbox" value="toeic" name="language" id="wtoeic" @change="errors.clear('language')">
                <label for="wtoeic">TOEIC</label>
            </div>
        </li>
            <li>
            <div class="checkbox-radio">
                <input  v-model="language" value="toefl" name="language"  type="checkbox" id="wtoefl" @change="errors.clear('language')">
                <label for="wtoefl">TOEFL</label>
            </div>
        </li>

        </ul>


        <div class="text-right mt-4">
            <button  class="button btn" :disabled="errors.any()">Save</button>
        </div>
    </form>
<work-experience-form></work-experience-form>
    </div>
</template>

<script>
                import WorkExperienceForm from "./WorkExperienceForm";

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
                components: {WorkExperienceForm},
                //props: ['study_goals'],
                data() {

                    return {
                        location: '',
                        gotjob: '',
                        profession: '',
                        certification: '',
                        undergraduate: [],
                        language: [],
                        postgraduate: [],
                        education: '',
                        grade: '',
                        recentmajorprogramme: '',
                        recentinstitution: '',
                        errors: new Errors(),

                    }
                },
                methods: {
                    onSubmit() {

                        axios.post('/store-work', this.$data)
                            .then(response => {
                                // this.study = response.data.study;
                                // this.subject = response.data.subject;
                                // this.destination = response.data.destination;
                                // this.when = response.data.when;
                                // this.undergraduate = response.data.undergraduate;
                                // this.language = response.data.language;
                                // this.undergraduate = response.data.undergraduate;
                                // this.postgraduate = response.data.postgraduate;
                                // this.education = response.data.education;
                                // this.grade = response.data.grade;
                                // this.recentmajorprogramme = response.data.recentmajorprogramme;
                                // this.recentinstitution = response.data.recentinstitution;
                                flash('Your working abroad goals has been updated.', 'success');
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
                    getWorkGoal() {
                        axios.get('/get-work').then(response => {

                            this.location = response.data.location;
                            this.gotjob = response.data.gotjob;
                            this.profession = response.data.profession;
                            this.certification = response.data.certification;

                           this.language = response.data.language.split(',');
                           this.undergraduate = response.data.undergraduate.split(',');
                           this.postgraduate = response.data.postgraduate.split(',');
                            // this.education = response.data.education;
                            // this.grade = response.data.grade;
                            // this.recentmajorprogramme = response.data.recentmajorprogramme;
                            // this.recentinstitution = response.data.recentinstitution;

                        }).catch(error => console.log(error.response.data.errors));
                    },
                },
                created() {
                    this.getWorkGoal();
                },
            }




</script>



