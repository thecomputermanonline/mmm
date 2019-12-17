<template>
    <div class="profile-img" v-if="seen">
                        <div class="img-heading">Upload new picture</div>

        <div class="drag-drop-con">
            <div class="icon">
                <img src="images/icons/upload_ic.svg" alt="">
            </div>
    <div class="drag">
<!--        <p>Drag and drop here</p>-->
<!--        <p>or</p>-->
        <p>
            <input type="file"  class="hide" id="browse" accept="image/*" @change="onChange">
            <label for="browse" class="linkv btn btn-default btn-file">Browse</label>
        </p>

    </div>
            <div class="file-format">
                * Only following file types are supported:
                <div class="formats">JPG, JPEG, PNG (Below 64 MB)</div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['seen'],
        methods: {
            onChange(e) {
                if (! e.target.files.length) return;

                let file = e.target.files[0];

                let reader = new FileReader();

                reader.readAsDataURL(file);

                reader.onload = e => {
                    let src = e.target.result;

                    this.$emit('loaded', { src, file });
                };
            }
        }
    }
</script>

