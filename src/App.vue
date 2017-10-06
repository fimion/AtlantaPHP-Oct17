<template>
  <div id="app" class="reveal">
    <div class="slides">
      <slide-1></slide-1>
    </div>
  </div>
</template>

<script>
import Slide1 from './components/Slide1'

import Reveal from '../node_modules/reveal.js/js/reveal'

export default {
  name: 'app',
  components: {
    Slide1
  },
  mounted(){
    Reveal.initialize();
  }
}
</script>

<style>
  @import '~reveal.js/css/reveal.css';
  @import '~reveal.js/css/theme/night.css';

</style>
