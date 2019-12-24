<template>
    <div class=" ">

        <div >

<!--            <div  class="m-b-md">-->
<!--                <h2 class="title m-b-md">-->
<!--                    Migration Master-->
<!--                </h2>-->
<!--            -->
<!--            </div>-->
<!--            <profile></profile>-->
            <div class="container">


                <div class="row">
                    <div class="col-lg-8 col-md-7 column-xl-9">

                        <div class="inner">
                            Instructions go here
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
        </div>
    </div>

</template>
<script>
    import Profile from "./Profile";
    export default {
        components: {Profile},

    }
</script>

<style scoped>
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 60px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
        color: #000000;
    }
</style>
