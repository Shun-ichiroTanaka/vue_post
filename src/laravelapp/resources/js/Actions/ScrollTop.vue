<template>
  <div @click="toTop" class="w-full h-full cursor-pointer">
    <transition name="anime">
      <div id="pagetop" class="fixed" v-show="scY != 0">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="48"
          height="48"
          viewBox="0 0 24 24"
          fill="none"
          stroke="#4a5568"
          stroke-width="1"
          stroke-linecap="square"
          stroke-linejoin="arcs"
        >
          <path d="M18 15l-6-6-6 6" />
        </svg>
      </div>
    </transition>
  </div>
</template>
<script>
export default {
  name: "ScrollTop",
  data() {
    return {
      scTimer: 0,
      scY: 0
    };
  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll);
  },
  methods: {
    handleScroll: function() {
      if (this.scTimer) return;
      this.scTimer = setTimeout(() => {
        this.scY = window.scrollY;
        clearTimeout(this.scTimer);
        this.scTimer = 0;
      }, 100);
    },
    toTop: function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }
  }
};
</script>
<style lang="scss" scoped>
#pagetop {
  background: #fff;
  border-radius: 8px;
  display: block;
  -webkit-box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
  bottom: 30px;
  right: 30px;
  z-index: 1000;
}
.anime-enter-active,
.anime-leave-active {
  transition: all 0.5s ease;
}
.anime-enter,
.dropdown-fade-leave-to {
  opacity: 0;
  transform: translateY(-30px);
}
</style>