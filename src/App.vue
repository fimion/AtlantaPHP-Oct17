<template>
  <div id="app" class="reveal">
    <div class="slides">
      <slide-1></slide-1>
      <slide-2></slide-2>
      <slide-3></slide-3>
      <slide-4></slide-4>
      <slide-5></slide-5>
    </div>
  </div>
</template>

<script>
import Slide1 from './components/Slide1'
import Slide2 from './components/Slide2'
import Slide3 from './components/Slide3'
import Slide4 from './components/Slide4'
import Slide5 from './components/Slide5'
import Reveal from 'reveal.js'
import HLJS from 'highlight.js'

export default {
  name: 'app',
  components: {
    Slide1,
    Slide2,
      Slide3,
      Slide4,
      Slide5
  },
  mounted(){
    HLJS.initHighlighting();
    Reveal.initialize();
  }
}
</script>

<style>
  @import '~reveal.js/css/reveal.css';
  @import '~reveal.js/css/theme/night.css';
  @import '~highlight.js/styles/darcula.css';
  .reveal pre code{
    max-height: 500px;
  }
</style>
