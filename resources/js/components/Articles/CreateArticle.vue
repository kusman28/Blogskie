<template>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <h1 class="text-lg font-bold text-black">
            Create Post
        </h1>
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <vue-editor id="editor" v-model="content" :editor-toolbar="customToolbar" />
            <div class="ql-snow">
                <div class="ql-editor" v-html="content">
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
            content: "<h1>Some initial content</h1>",
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
                [{ color: [] }]
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
  width: 550px;
  height: 350px;
}
</style>