<template>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div id="preview" class="ml-4 bg-white p-2 rounded-lg shadow-lg float-right">
            <h1 class="text-2xl ml-2 font-bold mb-2 text-gray-800">Preview</h1>
            <hr>
            <div class="container px-8 py-5 lg:py-8 mx-auto xl:px-5 max-w-screen-lg !pt-0">
                <div class="max-w-screen-md mx-auto">
                    <h1 class="mt-2 mb-3 text-3xl font-semibold tracking-tight text-center lg:leading-snug text-brand-primary lg:text-4xl dark:text-white"> 
                        {{ form.title }}
                    </h1>
                    <div id="previewCover" class="flex justify-center mt-4">
                        <img v-if="url" :src="url" class="w-full border-none rounded shadow"/>
                    </div>
                </div>
                <article class="max-w-screen-md mx-auto text-lg">
                    <div class="mx-auto my-3 prose prose-base dark:prose-invert prose-a:text-blue-500">
                        <blockquote v-html="content"></blockquote>
                    </div>
                </article>
            </div>
            <!-- <p class="text-gray-700">This is my cool new card!</p> -->
            <!-- <div class="ql-snow">
                <div class="ql-editor" v-html="content">
                </div>
            </div> -->
        </div>
        <h1 class="text-2xl font-bold text-gray-800">
            Create Post
        </h1>
        <form method="POST" @submit.prevent="saveArticle()" enctype="multipart/form-data">
            <div class="mb-4 mt-6 md:w-1/3">
                <input type="hidden" name="user_id" :value="user_id">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input v-model="form.title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text"
                :class="{ 'is-invalid': form.errors.has('title') }">
                <has-error :form="form" field="title"></has-error>
            </div>
            <div class="mb-4 md:w-1/3">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cover_image">
                    Upload Cover Image <i v-if="image_file_name">({{ image_file_name }})</i>
                </label>
                <!-- <input type="file" @change="imageProduct" ref="fileupload" name="image" 
                class="form-input"> -->
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-gray-700">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Select a file</span>
                    <input type='file' class="hidden"  @change="imageProduct" ref="fileupload" name="image" id="cover_image"/>
                </label>
            </div>
            <div class="mt-2 flex flex-wrap mb-4">
                <vue-editor id="editor" 
                v-model="form.content" 
                :editor-toolbar="customToolbar" />
                <!-- <div id="preview" class="ml-4 bg-white p-2 rounded-lg shadow-lg">
                    <h1 class="text-2xl ml-2 font-bold mb-2 text-gray-800">Preview</h1>
                    <hr>
                    <div id="previewCover">
                        <img v-if="url" :src="url" />
                    </div>
                    <div class="ql-snow">
                        <div class="ql-editor" v-html="content">
                        </div>
                    </div>
                </div> -->
            </div>
            <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Submit</button>
        </form>
    </div>
</template>

<script>
import { VueEditor, Quill } from "vue2-editor";
export default {
    props: ['user_id'],
    components: {
        VueEditor
    },
    data() {
        return {
            content: "<i>Write something here...</i>",
            customToolbar: [
                [{ header: [false, 1, 2, 3, 4, 5, 6] }],
                ["bold", "italic", "underline"],
                [{ list: "ordered" }, { list: "bullet" }],
                // [
                //     { align: "" },
                //     { align: "center" },
                //     { align: "right" },
                //     { align: "justify" }
                // ],
                ["blockquote", "code-block"],
                [{ color: [] }],
                ['link', 'image'/**, 'video', 'formula'*/],
                [{ 'direction': 'rtl' }],
                ['clean'],
            ],
            form: new Form({
                user_id: this.user_id,
                title: '',
                content: '',
                image: '',
            }),
            url: null,
            image_file_name: null
        };
    },

    mounted() {
        
    },

    methods: {
        imageProduct(e)
        {
            this.image = e.target.files[0];
            this.url = URL.createObjectURL(this.image);
            let file = e.target.files[0];
            let reader = new FileReader();  
            this.image_file_name = file.name
            if(file['size'] < 2111775) {
                reader.onloadend = (file) => {
                    this.form.image = reader.result;
                }              
                reader.readAsDataURL(file);
            } else {
                alert('File size can not be bigger than 2 MB')
            }
        },
        saveArticle()
        {
            this.form.post('/api/posts/create', {image: this.form.image})
            .then(() => {
                this.form.reset();
                this.$refs.fileupload.value=null;
                this.url = null;
            })
            .catch(() => {
                this.$Progress.fail();
            })
            // axios.post('/api/patient', {
            //     firstname: this.form.firstname, 
            //     middlename: this.form.middlename,
            //     lastname: this.form.lastname,
            //     age: this.form.age,
            //     contact_no: this.form.contact_no,
            //     address: this.form.address,
            //     pet_name: this.form.pet_name,
            //     pet_type: this.form.pet_type,
            //     pet_note: this.form.pet_note,
            //     });
            // alert('test');
        }
    },
};
</script>

<style>
#editor {
  width: 700px;
  height: 350px;
}
#preview {
  width: 650px;
  /* height: 400px; */
}

#previewCover {
  display: flex;
  justify-content: center;
  align-items: center;
}
#previewCover img {
  max-width: 100%;
  max-height: 300px;
}
</style>