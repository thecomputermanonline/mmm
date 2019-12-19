
<template>
    <form class="interest-form" method="post" action="/store-relocate-goals" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">

        <h2>My Goals</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="whyrelocate">Where are you trying to relocate to? </label>
                <select v-model="whyrelocate" class="custom-select" name="whyrelocate" id="whyrelocate" @change="errors.clear('whyrelocate')">
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="eligible">Are You eligible for the country's relocation process?</label>
                <select v-model="eligible" class="custom-select" name="eligible" id="eligible" @change="errors.clear('eligible')">
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="form-group mb-md-0 col-md-6">
                <label for="rconsultation" class="d-flex align-items-center">Would you like consultation on your relocation?
                    <span class="tool_tip">
														<a href="#" class="render-tooltip" data-original-title="" title="">
														  <img src="images/icons/info_ic.svg" alt="">
														</a>
														<span class="custom-tooltip" role="tooltip">
														  <span class="arrow"></span>
														  <span class="tooltip-inner">One of our consultants would reach out to you and mentor you through your relocation process.</span>
														</span>
													</span>
                </label>
                <select v-model="consultation" class="custom-select" name="consultation" id="rconsultation" @change="errors.clear('consultation')">
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <h2>My Future Plans</h2>

        <span class="sub-title">A. English proficiency test</span>
        <span class="help is-danger" v-text="errors.get('language')"></span>
        <ul class="radios-holder">
            <li>
                <div class="checkbox-radio">
                    <input  v-model="language" value="ietls" type="checkbox" id="rielts" @change="errors.clear('language')">
                    <label for="rielts">IELTS</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input  v-model="language" value="toefl"  type="checkbox" id="rtoefl" @change="errors.clear('language')">
                    <label for="rtoefl">TOEFL</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input  v-model="language" value="toeic" type="checkbox" id="rtoeic" @change="errors.clear('language')">
                    <label for="rtoeic">TOEIC</label>
                </div>
            </li>
        </ul>

        <span class="sub-title">B. Undergraduate Admissions Test</span>
        <ul class="adm-test">



            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" v-model="undergraduate" value="umat" type="checkbox" id="rtest1" >
                    <label for="rtest1">UMAT - Undergraduate Medical Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" v-model="undergraduate" value="gedh" type="checkbox" id="rtest2">
                    <label for="rtest2">GED - High School Diploma Equivalent</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" v-model="undergraduate" value="ukcat" type="checkbox" id="rtest3">
                    <label for="rtest3">UKCAT - United Kingdom Clinical Aptitude Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" v-model="undergraduate" value="gceal" type="checkbox" id="rtest4">
                    <label for="rtest4">GCE/A Level - General Certificate of Education</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" v-model="undergraduate" value="sat" type="checkbox" id="rtest5">
                    <label for="rtest5">SAT - Scholastic Assessment Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" type="checkbox" v-model="undergraduate" value="act" id="rtest6">
                    <label for="rtest6">ACT - Formerly American College Testing Program or American College Test </label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input name="undergraduate" type="checkbox" v-model="undergraduate" value="ged" id="rtest7">
                    <label for="rtest7">GED - General Equivalency Diploma</label>
                </div>
            </li>
        </ul>

        <span class="sub-title">C. Postgraduate / Professional Admission Tests</span>
        <ul class="adm-test pb-5">
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="gamsat" id="rtest8">
                    <label for="rtest8">GAMSAT - Graduate Medical Schools Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="lsat" id="rtest9">
                    <label for="rtest9">LSAT - Law School Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="mat" id="rtest10">
                    <label for="rtest10">MAT - Miller Analogies Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="gre" id="rtest11">
                    <label for="rtest11">GRE - Graduate Record Examination</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="gmat" id="rtest12">
                    <label for="rtest12">GMAT -  Graduate Management Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="mcat" id="rtest13">
                    <label for="rtest13">MCAT - Medical College Admission Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="dat" id="rtest14">
                    <label for="rtest14">DAT - Dental Aptitude Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="oat" id="rtest15">
                    <label for="rtest15">OAT - Optometry Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="pcat" id="rtest16">
                    <label for="rtest16">PCAT - Pharmacy College Admission Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="teas" id="rtest17">
                    <label for="rtest17">TEAS - Test of Essential Academic Skills</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="ahpat" id="rtest18">
                    <label for="rtest18">AHPAT - Allied Health Professions Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="lsatlaw" id="rtest19">
                    <label for="rtest19">LSAT - Law School Admissions Test</label>
                </div>
            </li>
        </ul>


        <h2>My Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="reducation">What is your current/highest education level?</label>
                <select  class="custom-select" id="reducation" v-model="education" @change="errors.clear('education')">>
                    <option selected>Please select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <span class="help is-danger" v-text="errors.get('education')"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="rrecentinstitution">What is your current or most recent institution?</label>
                <input id="rrecentinstitution" name="recentinstitution" v-model="recentinstitution" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius">
                <span class="help is-danger" v-text="errors.get('recentinstitution')"></span>
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="rgrade">What was your average score/achievement at this level?</label>
                <input id="rgrade" name="grade" v-model="grade" class="form-control" type="text" placeholder="Enter GPA score">
                <span class="help is-danger" v-text="errors.get('grade')"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="rrecentmajorprogramme">What is your current or most recent major/programme?</label>
                <input name="recentmajorprogramme" id="rrecentmajorprogramme" v-model="recentmajorprogramme" class="form-control" type="text" placeholder="Example: law">
                <span class="help is-danger" v-text="errors.get('recentmajorprogramme')"></span>
            </div>
        </div>
        <div class="text-right mt-4">
            <button  class="button btn" :disabled="errors.any()">Save</button>
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
        data() {
            return {
                whyrelocate: '',
                eligible: '',
                consultation: '',
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

                axios.post('/store-relocate', this.$data)
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
                        flash('Your relocation goals has been updated.', 'success');
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
            getRelocateGoal() {
                axios.get('/get-relocate').then(response => {

                    this.whyrelocate = response.data.whyrelocate;
                    this.eligible = response.data.eligible;
                    this.consultation = response.data.consultation;
                    //this.undergraduate = response.data.undergraduate;

                  this.language = response.data.language.split(',');
                    this.undergraduate = response.data.undergraduate.split(',');
                    this.postgraduate = response.data.postgraduate.split(',');
                    this.education = response.data.education;
                    this.grade = response.data.grade;
                    this.recentmajorprogramme = response.data.recentmajorprogramme;
                    this.recentinstitution = response.data.recentinstitution;

                });
            },
        },
        created() {
            this.getRelocateGoal();
        },
    }




</script>
