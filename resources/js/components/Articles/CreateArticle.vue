<template>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <h1 class="text-2xl font-bold text-gray-800">
            Create Post
        </h1>
        <div class="mb-4 mt-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
            Title
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text">
        </div>
        <div class="mt-2 flex flex-wrap">
            <vue-editor id="editor" 
            v-model="content" 
            :editor-toolbar="customToolbar" />
            <div id="preview" class="ml-4 bg-white p-2 rounded-lg shadow-lg">
                <h1 class="text-2xl ml-2 font-bold mb-2 text-gray-800">Preview</h1>
                <hr>
                <!-- <p class="text-gray-700">This is my cool new card!</p> -->
                <div class="ql-snow">
                    <div class="ql-editor" v-html="content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { VueEditor, Quill } from "vue2-editor";
export default {
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
        };
    },

    mounted() {
        
    },

    methods: {
        
    },
};
</script>

<style>
#editor {
  width: 700px;
  height: 350px;
}
#preview {
  width: 600px;
  /* height: 400px; */
}
</style>