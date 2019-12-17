
<template>
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

        <span class="sub-title">B. Undergraduate Admissions Test</span>
        <ul class="adm-test">
            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" v-model="undergraduate" value="umat" type="checkbox" id="wtest1" >
                    <label for="wtest1">UMAT - Undergraduate Medical Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate"  name="undergraduate"  value="gedh" type="checkbox" id="wtest2">
                    <label for="wtest2">GED - High School Diploma Equivalent</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate"  name="undergraduate"  value="ukcat" type="checkbox" id="wtest3">
                    <label for="wtest3">UKCAT - United Kingdom Clinical Aptitude Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate" name="undergraduate"  value="gceal" type="checkbox" id="wtest4">
                    <label for="wtest4">GCE/A Level - General Certificate of Education</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate" name="undergraduate" value="sat" type="checkbox" id="wtest5">
                    <label for="wtest5">SAT - Scholastic Assessment Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="undergraduate" value="act" id="wtest6">
                    <label for="wtest6">ACT - Formerly American College TEsting Program or American College Test </label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="undergraduate" value="ged" id="wtest7">
                    <label for="wtest7">GED - General Equivalency Diploma</label>
                </div>
            </li>
        </ul>

        <span class="sub-title">C. Postgraduate / Professional Admission Tests</span>
        <ul class="adm-test pb-5">
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="gamsat" id="wtest8">
                    <label for="wtest8">GAMSAT - Graduate Medical Schools Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="lsat" id="wtest9">
                    <label for="wtest9">LSAT - Law School Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox"  name="undergraduate"  v-model="postgraduate" value="mat" id="wtest10">
                    <label for="wtest10">MAT - Miller Analogies Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="gre" id="wtest11">
                    <label for="wtest11">GRE - Graduate Record Examination</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="gmat" id="wtest12">
                    <label for="wtest12">GMAT -  Graduate Management Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="mcat" id="wtest13">
                    <label for="wtest13">MCAT - Medical College Admission Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="dat" id="wtest14">
                    <label for="wtest14">DAT - Dental Aptitude Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="oat" id="wtest15">
                    <label for="wtest15">OAT - Optometry Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox"  name="undergraduate" v-model="postgraduate" value="pcat" id="wtest16">
                    <label for="wtest16">PCAT - Pharmacy College Admission Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="teas" id="wtest17">
                    <label for="wtest17">TEAS - Test of Essential Academic Skills</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="ahpat" id="wtest18">
                    <label for="wtest18">AHPAT - Allied Health Professions Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" name="undergraduate"  v-model="postgraduate" value="lsatlaw" id="wtest19">
                    <label for="wtest19">LSAT - Law School Admissions Test</label>
                </div>
            </li>
        </ul>


        <h2>My Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="weducation">What is your current/highest education level?</label>
                <select  class="custom-select" name="education"  id="weducation" v-model="education" @change="errors.clear('education')">>
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <span class="help is-danger" v-text="errors.get('education')"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="wrecentinstitution">What is your current or most recent institution?</label>
                <input id="wrecentinstitution" name="recentinstitution" v-model="recentinstitution" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius">
                <span class="help is-danger" v-text="errors.get('recentinstitution')"></span>
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="wgrade">What was your average score/achievement at this level?</label>
                <input id="wgrade" name="grade" v-model="grade" class="form-control" type="text" placeholder="Enter GPA score">
                <span class="help is-danger" v-text="errors.get('grade')"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="wrecentmajorprogramme">What is your current or most recent major/programme?</label>
                <input name="recentmajorprogramme" id="wrecentmajorprogramme" v-model="recentmajorprogramme" class="form-control" type="text" placeholder="Example: law">
                <span class="help is-danger" v-text="errors.get('recentmajorprogramme')"></span>
            </div>
        </div>
        <div class="text-right mt-4">
            <button  class="button btn full" :disabled="errors.any()">Save</button>
        </div>
    </form>

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
                            this.education = response.data.education;
                            this.grade = response.data.grade;
                            this.recentmajorprogramme = response.data.recentmajorprogramme;
                            this.recentinstitution = response.data.recentinstitution;

                        }).catch(error => console.log(error.response.data.errors));
                    },
                },
                created() {
                    this.getWorkGoal();
                },
            }




</script>



