<template>
    <section>
        <section>
            <h2>Basic Vue.js in Laravel Usage</h2>
        </section>
        <section>
            <p>Things you need:</p>
            <ul>
                <li class="fragment">PHP</li>
                <li class="fragment">Composer</li>
                <li class="fragment">Node.js</li>
                <li class="fragment">NPM</li>
            </ul>
        </section>
        <section>
            <h2>Installation</h2>
            <pre class="fragment"><code class="hljs shell">$ composer create-project --prefer-dist laravel/laravel project-name</code></pre>
            <pre class="fragment"><code class="hljs shell">$ cd project-name</code></pre>
            <pre class="fragment"><code class="hljs shell">$ composer install</code></pre>
            <pre class="fragment"><code class="hljs shell">$ npm install</code></pre>
        </section>
        <section>
            <h2>Node Packages</h2>
            <p class="fragment">Vue.js</p>
            <p class="fragment">Axios (a promise based http client, making requests easier)</p>
            <p class="fragment">lodash (a utility library)</p>
            <p class="fragment">...and jQuery.</p>
        </section>
        <section>
            <h2>Where can I find the files?</h2>
            <code class="hljs fragment">resources/assets/js/</code>
            <p class="fragment">app.js has your Vue application</p>
            <span class="fragment">add new components to app with <pre><code class="hljs">Vue.component('example',require('./components/Example.vue'));</code></pre></span>
        </section>
        <section>
            <h2>So what does the code look like?</h2>
            <p class="fragment">Vue uses .vue files for components</p>
            <p class="fragment">has a template tag for how to render, a script tag for the logic, and a style tag for any styles you want.</p>
            <p class="fragment">Styles can be scoped to the component.</p>
        </section>
        <section>
            <p>HelloWorld.vue</p>
            <pre><code class="hljs" data-trim>
                    &lt;template&gt;
                        &lt;div&gt;
                            {{msgCode}}
                        &lt;/div&gt;
                    &lt;/template&gt;
                    &lt;script&gt;
                    export default {
                        name:'hello-world'
                        data:function(){
                            return {
                                msg:"Hello, World!"
                            }
                        },
                    }
                    &lt;/script&gt;</code></pre>
            <p class="fragment">
                <pre><code class="hljs">&lt;hello-world&gt;&lt;/hello-world&gt;</code></pre>
                <code class="hljs">{{msg}}</code>
            </p>
        </section>
        <section>
        <pre><code class="hljs" data-trim>&lt;template&gt;&lt;div&gt;
        {{msgCode}} &lt;button v-on:click="buttonClick"&gt;Click Me!&lt;/button&gt;
&lt;/div&gt;&lt;/template&gt;
&lt;script&gt;
export default {
        data:function(){ return { msg:"Hello, World!"} },
        methods: {
          buttonClick(){
            fetch('static/demo.json')
            .then( response =>{return response.json()})
            .then(this.handleJson)
          },
          handleJson(response){
            this.msg = response.newMsg;
          }
        },
  }
&lt;/script&gt;</code></pre></section>
        <section>
            <p>{{msg}}</p>
            <p><button v-on:click="buttonClick()">Click Me!</button></p>
        </section>
        <section>
            <p class="fragment">Let's Make a Todo App</p>
        </section>
    </section>
</template>

<script>


    export default {
        name: "slide-3",
        mounted() {
        },
        data() {
            return {
              msgCode:"{{msg}}",
              msg:"Hello, World!",
            };
        },
        methods: {
          buttonClick(){
            fetch('static/demo.json')
              .then( response =>{return response.json()})
              .then(this.handleJson);
          },
          handleJson(response){
            this.msg = response.newMsg;
          }
        },

    }
</script>

<style scoped>


</style>