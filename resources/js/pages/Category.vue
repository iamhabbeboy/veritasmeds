<script>
import { mapState } from "vuex";
import helper from "../helper";

export default {
  name: "Category",
  data() {
    return {
      loading: false
    };
  },
  async mounted() {
      if (this.$store.state.categories.length == 0) {
          this.loading = true;
      }
      this.$store.dispatch('loadcategory')
      .then(response => this.loading = false);
  },
  computed: {
      ...mapState(['categories'])
  },
  methods: {
    choose_image() {
      this.$refs.photo.click();
    },
    process_image(event) {
      const files = event.target.files;
      let file,
        len = files.length;
      let preview = this.$refs.preview;

      const formData = new FormData();
      formData.append("file[]", files[0]);
      const img = document.createElement("img");

      img.src = window.URL.createObjectURL(files[0]);
      img.style.width = "150px";
      img.style.height = "150px";
      img.style.marginLeft = "5px";
      preview.innerHTML = "";
      preview.appendChild(img);  
      helper.storeFile(formData);
    },
    process_category(event) {
        const title = this.$refs.title;
        const desc = this.$refs.description;
        const image = this.$refs.photo;

        if (image.value === '') {
            return swal('Notification', 'Image is required !', 'error');
        } else if (title.value === '') {
            return title.focus();
        } else if (desc.value === ''){
            return desc.focus();
        } else {
            const e = event.currentTarget;
            e.setAttribute("disabled", "");
            e.innerHTML = "<i>please wait...</i> <i class='fa fa-cog fa-spin'></i>";
            const payload = { title: title.value, description: desc.value };
            this.$store.dispatch('storecategory', payload)
            .then(response => {
                swal('Notification', 'Category Added Successfully ', 'success');
                image.value = "";
                desc.value = "";
                title.value = "";
                e.removeAttribute("disabled");
                e.innerHTML = "Add <i class='fa fa-plus-circle'></i>";
            })
            .then(response => swal('Notification', 'Category Not Saved, reload the page', 'success'));
        }

    }
  }
};
</script>
<template>
  <div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">New Category</h4>
            <span class="box-controls pull-right">
              <!-- <a href="#">view more</a> -->
            </span>
          </div>
          <div class="box-body">
            <div class="form-group">
              <div
                class="font-size-40 text-center"
                style="padding: 20px;border: 1px solid #ccc;width: 200px;max-height:200px;margin-bottom: 10px;border-radius: 10px;"
                ref="preview"
                id="preview"
              >
                <i class="fa fa-camera-retro"></i>
              </div>
              <button class="btn btn-success btn-sm" @click="choose_image">
                Choose
                <i class="fa fa-plus-circle"></i>
              </button>
              <input type="file" ref="photo" style="visibility: hidden" @change="process_image">
            </div>
            <div class="form-group">
              <label for>Title</label>
              <input type="text" class="form-control" ref="title">
            </div>
            <div class="form-group">
              <label for>Description</label>
              <textarea class="form-control" ref="description"></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-info btn-lg" @click="process_category">
                Add
                <i class="fa fa-plus-circle"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Category List</h4>
            <span class="box-controls pull-right">
              <!-- <a href="#">view more</a> -->
            </span>
          </div>
          <div class="box-body">
            <span v-if="loading">
                <h3><i class="fa fa-cog fa-spin"></i> &nbsp; <i>please wait....</i></h3>
            </span>
            <ul class="list-group">
              <li class="list-group-item" v-for="(category, index) of categories" :key="index">
                <span class="float-right">
                    <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit </button>
                </span>
                 <span v-if="category.has_picture && category.has_picture.type == 'category'">
                     <img :src="'/'+category.has_picture.filepath" align="left" class="custom-img">
                 </span> &nbsp; <span class="medium">{{category.title}}</span>
                 <p> &nbsp; {{category.description}}</p>
                 <small> Products Added: 0 </small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.image-custom {
    width: 100px;
    max-width: 100%;
    margin-top: 10px;
    opacity: 0.4;
    padding: 10px;
    /*border: 1px solid #ccc;*/
}

.custom-img {
    width: 3vw;
    height: 3vw;
    align-self: auto;
}
.text-red {
  color: rgba(red, 0.6);
}

.medium {
    font-size: 15px;
    font-weight: bold;
}
</style>
