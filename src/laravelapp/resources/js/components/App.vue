<template>
  <div class :class="mode">
    <header-nav :mode="mode" @toggle="toggle"></header-nav>

    <div class="overflow-y-screen">
      <router-view></router-view>
    </div>

    <footer-nav :mode="mode"></footer-nav>
  </div>
</template>

<script>
import HeaderNav from "../components/layout/header/HeaderNav";
import FooterNav from "../components/layout/footer/FooterNav";

export default {
  name: "App",
  data() {
    return {
      mode: "light"
    };
  },
  components: {
    HeaderNav,
    FooterNav
  },
  created() {
    window.addEventListener("keyup", this.keyPress);
  },
  methods: {
    toggle() {
      if (this.mode === "dark") {
        this.mode = "light";
      } else {
        this.mode = "dark";
      }
    }
  }
};
</script>
<style lang="scss">
body {
  background: #f0f2f6;
}

.dark {
  background: #181a1b;
  color: #f8fafc;

  a {
    color: #38b2ac;
  }

  strong {
    color: #f8fafc;
  }
}
</style>
