<template>
    <section>
        <section>
            <h2>Basic Vue.js Usage</h2>
        </section>
        <section>
            <pre>
                <code class="hljs" data-trim>
                    &lt;div id="app"&gt;
                            {{msgCode}}
                    &lt;/div&gt;
                    &lt;script&gt;
                    var app = new Vue({
                            el:"#app",
                            data:{
                                msg:"Hello, World!"
                            }
                      });
                    &lt;/script&gt;
                </code>
            </pre>
            <p class="fragment">
                Result:<br/>
                <code class="hljs">{{msg}}</code>
            </p>
        </section>
    </section>
</template>

<script>

    import HLJS from 'highlight.js'

    export default {
        name: "slide-3",
        mounted() {
          HLJS.initHighlighting();
        },
        data() {
            return {
              msgCode:"{{msg}}",
              msg:"Hello, World!",
            };
        },
        methods: {},

    }
</script>

<style scoped>
    @import '~highlight.js/styles/atom-one-dark.css';

</style>