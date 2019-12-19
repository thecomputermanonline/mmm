<template>

        <div class="container">


            <div class="row">
                <div class="col-lg-8 col-md-7 column-xl-9">

                    <div class="inner">
                        Instructions go here
<!--                        <div class="profile-info">-->
<!--                            <div class="head">-->
<!--                                <div class="text-left">-->
<!--                                    <strong class="title d-block font-weight-medium">Profile</strong>-->
<!--&lt;!&ndash;                                    <span class="sub-title">As seen by your markers</span>&ndash;&gt;-->
<!--                                </div>-->
<!--                                <router-link :to="{ name: 'profile' }" class="btn btn-whitedropdown-item" > Update</router-link>-->
<!--                                <a href="/my-account" class="">Update</a>-->
<!--                            </div>-->
<!--                            <div class="user-info">-->
<!--                                <div class="img-holder">-->


<!--                                    <img :alt=" name" src="/images/header/profile_ic.jpg" />-->



<!--                                </div>-->
<!--                                <ul class="info-holder">-->
<!--                                    <li class="name" v-text="name"> </li>-->
<!--                                    <li class="joining-date">{{ created_at}}</li>-->
<!--                                    <li class="region"><span class="icon-holder"><img src="images/icons/pin.svg" alt="" width="11" height="15"></span>Lagos, Nigeria</li>-->
<!--                                    <li class="target"><span class="icon-holder"><img src="images/icons/pencil.svg" alt="" width="13" height="13"></span>Target: 9.0</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="tags-container">-->
<!--                            <span class="heading d-block">My reason(s) for Migration:</span>-->

<!--                            <ul class="tags">-->
<!--                                <li><span>WORK ABROAD</span></li>-->
<!--                                <li><span>STUDY ABROAD</span></li>-->
<!--                                <li><span>RELOCATION</span></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>

                </div>
                <div class="col-lg-4 col-md-5 column-xl-3">
<!--                    <div class="date">23:14, Thursday, Feb 26, 2018</div>-->


                    <div class="right-container">
                        <div id="app" class="inner">
                           <div class="heading">Checklist For Procedures:</div>

<!--                            <div class="accordion" id="accordionOne">-->
<!--                                <range-slider score-type="Previous" :total="7.5"  scores="scores" ></range-slider>-->

<!--                                <range-slider score-type="Target"   :total="9.0"  scores="scores" ></range-slider>-->

<!--                            </div>-->
                            <form class="form" method="POST" action="#">
                                <div class="praticing-reason">
                                    <div class="reason-head">List of Tasks to do:</div>

                                    <div class="checkbox-radio">
                                        <div class="check-inner">
                                            <input type="checkbox" id="work-abroad">
                                            <label for="work-abroad">Submit Personal Profile</label>
                                        </div>

                                        <div class="check-inner">
                                            <input type="checkbox" id="relocate">
                                            <label for="relocate">Submit Education History</label>
                                        </div>

                                        <div class="check-inner">
                                            <input type="checkbox" id="study-abroad">
                                            <label for="study-abroad">Submit Employment History</label>
                                        </div>

                                        <div class="check-inner other">
                                            <input type="checkbox" id="others">
                                            <label for="others">Financial Details
                                                <input type="text" class="form-control w-100 mt-3 bg-transparent" placeholder="Please specify">
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-block">Manage</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


<!--    <div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="deleteAccountLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-body">-->
<!--                    <div class="inner">-->
<!--                        <div class="modal-heading">Are you Sure?</div>-->
<!--                        <div class="body">After you delete your account, you will not be able to practice for your IELTS with prepmewell.com, your profile will not be accessible.</div>-->
<!--                    </div>-->

<!--                    <div class="modal-btn ">-->
<!--                        <a href="#" class="btn  full d-block" data-dismiss="modal" aria-hidden="true">Keep My Account</a>-->
<!--                        <a href="index.html" class="link">Delete Account </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</template>

<script>
    export default {
        name: "Profile",
        data(){
            return{
                name:'',
                created_at: '',
            }
        }
    }
</script>

<style scoped>

</style>
