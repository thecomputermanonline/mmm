<template>
<div>



<!--    <span class="img"  :style="avatarstyle"></span>-->
<!--<image-upload></image-upload>-->
<!--            <div class="profile-container">-->
<!--                <a href="#" class="profile-pic">-->

<!--                    <span class="img"  :style="avatarstyle"></span>-->
<!--                    <span class="camera-icon">-->
<!--                        <span class="holder">-->
<!--                          <img src="images/camera.svg"  width="24" height="24">-->
<!--                          <span class="text">Change your <br>picture</span>-->
<!--                        </span>-->
<!--                      </span>-->

<!--                </a>-->

<!--            </div>-->

<!--        {{{Auth::user()->fname }}}-->

<!--        <div class="profile-container">-->
<!--            <a href="#" class="profile-pic">-->
<!--                <span class="img" style="background-image: url('images/header/profile_ic.jpg')"></span>-->
<!--                <span class="camera-icon">-->
<!--                    <span class="holder">-->
<!--                      <img src="images/camera.svg" alt="" width="24" height="20">-->
<!--                      <span class="text">Change your <br>picture</span>-->
<!--                    </span>-->
<!--                  </span>-->

<!--            </a>-->

<!--            <div class="profile-img d-none">-->
<!--                <div class="img-heading">Upload new picture</div>-->

<!--                <div class="drag-drop-con">-->
<!--                    <div class="icon">-->
<!--                        <img src="images/icons/upload_ic.svg" alt="">-->
<!--                    </div>-->

<!--                    <div class="drag">-->
<!--                        <p>Drag and drop here</p>-->
<!--                        <p>or</p>-->
<!--                        <p>-->
<!--                            <input type="file" class="hide" id="browse">-->
<!--                            <label for="browse" class="link">browse</label>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <button type="button" class="btn btn-block">UPLOAD</button>-->

<!--                <div class="file-format">-->
<!--                    * Only following file types are supported:-->
<!--                    <div class="formats">JPG, JPEG, PNG (Below 64 MB)</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->



    <div class="row px-5">
        <div class="col-lg-8 col-md-8 column-xl-9 ">
            <h2 class="heading">My Profile</h2>
            <div class="tabs-holder">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="study-tab" data-toggle="tab" href="#study" role="tab" aria-controls="study" aria-selected="false">Study Abroad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work" aria-selected="false">Work Abroad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="relocate-tab" data-toggle="tab" href="#relocate" role="tab" aria-controls="relocate" aria-selected="false">Relocate Abroad</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">



                        <avatar :avatarstyle="avatarstyle"></avatar>

                        <form  method="POST" action="/updateAuthUser" @submit.prevent="onSubmit"
                               @change="errors.clear($event.target.name)" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" placeholder="First Name" class="form-control" v-model="fname" id="fname">
                                        <span class="help is-danger" v-text="errors.get('fname')"></span>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" placeholder="Last Name"  v-model="lname" class="form-control" id="lname">
                                        <span class="help is-danger" v-text="errors.get('lname')"></span>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" placeholder="Email" disabled="true" v-model="email" class="form-control" id="email">
                                    </div>
                                    <span class="help is-danger" v-text="errors.get('email')"></span>
                                </div>

                                <div class="col-md-6">
                                    <label>Gender</label>

                                    <div class="checkbox_small">
                                        <div class="check-inner">
                                            <input type="radio" id="male" value="male" v-model="gender" name="gender" checked>
                                            <label for="male">Male</label>
                                        </div>

                                        <div class="check-inner">
                                            <input type="radio" id="female" value="female" v-model="gender" name="gender">
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                    <span class="help is-danger" v-text="errors.get('gender')"></span>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select class="custom-select" id="country" v-model="country" name="country">
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                        </select>
                                        <span class="help is-danger" v-text="errors.get('country')"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="custom-select" v-model="state" name="state" id="state">
                                            <option value="Lagos">Lagos</option>
                                            <option value="Lagos 2">Lagos 2</option>
                                            <option value="Lagos 3">Lagos 3</option>
                                            <option value="Lagos 4">Lagos 4</option>
                                            <option value="Lagos 5">Lagos 5</option>
                                            <option value="Lagos 6">Lagos 6</option>
                                        </select>

                                    </div> <span class="help is-danger" v-text="errors.get('state')"></span>
                                </div>
                            </div>

                            <div class="btn-con">
                                <button class="btn " type="submit" :disabled="errors.any()">Update</button>
                            </div>
                        </form>



                    </div>
                    <div class="tab-pane fade " id="study" role="tabpanel" aria-labelledby="study-tab">



                        <study-goals-form></study-goals-form>


                    </div>
                    <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">

                        <work-goals-form></work-goals-form>



                    </div>
                    <div class="tab-pane fade" id="relocate" role="tabpanel" aria-labelledby="relocate-tab">
                        <relocate-goals-form></relocate-goals-form>


                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 column-xl-3">
            <div class="date">23:14, Thursday, Feb 26, 2018</div>

            <div class="right-container style2">

                <div class="inner">
                    <strong class="heading d-block mb-2 pb-0">Important Factors To consider</strong>
                    <span class="sub-title d-block">RE-ARRANGE CARDS IN ORDER OF IMPORTANCE.</span>




                    <task-draggable></task-draggable>


                </div>

                <div class="inner">
                    <fin-plan-form></fin-plan-form>

                </div>
            </div>
        </div>
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
props:['user'],
        data() {
            return {
                fname : '',
                email : '',
                lname : '',
                country : '',
                state : '',
                gender : [],
                avatar : '/images/header/profile_ic.jpg',
               avatarstyle: 'background-image: url("/images/header/profile_ic.jpg")' ,
                errors: new Errors(),
            }
        },

    mounted() {
        this.getProfile();
    },

    methods: {

        onSubmit() {
            //this.$data.append('image', this.image);
            axios.put('/userProfileUpdate', this.$data)
                .then(response => {
                    flash('Your profile has been updated.', 'success');
                  //  window.scrollTo(0,0);
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                }).catch(error => {
                    this.errors.record(error.response.data.errors);
                flash('The given data was invalid.', 'warning');
                });
        },
        getProfile() {
            axios.get('/userProfileGet').then(response => {

                this.fname = response.data.fname;
                this.lname = response.data.lname;
                this.country= response.data.country;
                this.state = response.data.state;
                this.gender = response.data.gender;
                this.email = response.data.email;
                if(!response.data.avatar){
                    this.avatar = '/images/header/profile_ic.jpg';
                    this.avatarstyle = 'background-image: url("/images/header/profile_ic.jpg")' ;
                }else{
                    this.avatar = response.data.avatar;
                    this.avatarstyle = 'background-image: url("/storage/'+ this.avatar + '")' ;
                }



            });
        },
    }
    }
</script>
