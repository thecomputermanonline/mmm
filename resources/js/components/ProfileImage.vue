<template>
    <div class="profile-container">
        <a href="#" class="profile-pic">
            <span class="img" style="background-image: url('images/header/profile_ic.jpg')"></span>
            <span class="camera-icon">
                    <span class="holder">
<!--                      <img src="images/camera.svg" alt="" width="24" height="20">-->
                        <img :src="image" class="img-responsive">
                      <span class="text">Change your <br>picture</span>
                    </span>
                  </span>

        </a>

        <div class="profile-img">
            <div class="img-heading">Upload new picture</div>

            <div class="drag-drop-con">
                <div class="icon">
                    <img src="images/icons/upload_ic.svg" alt="">
                </div>

                <div class="drag">
                    <p>Drag and drop here</p>
                    <p>or</p>
                    <p>

                        <input type="file" v-on:change="onFileChange" id="browse" class="hide">
                        <label for="browse" class="link">browse</label>
                    </p>
                </div>
            </div>

            <button type="button" @click="upload" class="btn btn-block">UPLOAD</button>

            <div class="file-format">
                * Only following file types are supported:
                <div class="formats">JPG, JPEG, PNG (Below 64 MB)</div>
            </div>
        </div>
    </div>
<!--    <div class="row">-->
<!--        <div class="col-md-12">-->
<!--            <div class="col-md-2">-->
<!--                <img :src="image" class="img-responsive">-->
<!--            </div>-->
<!--            <div class="col-md-8">-->
<!--                <input type="file" v-on:change="onFileChange" class="form-control">-->
<!--            </div>-->
<!--            <div class="col-md-2">-->
<!--                <button class="btn btn-success btn-block" @click="upload">Upload</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</template>
<style scoped>
    img{
        max-height: 36px;
    }
</style>
<script>
    export default{
        data(){
            return {
                image: ''
            }
        },
        methods: {
            onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            upload(){
                axios.post('/api/upload',{image: this.image}).then(response => {

                });
            }
        }
    }
</script>
