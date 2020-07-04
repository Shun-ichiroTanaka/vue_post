<template>
  <div class="home" :class="mode">
    <header-nav :mode="mode" @toggle="toggle"></header-nav>

    <footer-nav :mode="mode"></footer-nav>
  </div>
</template>
<script>
import HeaderNav from "../components/layout/header/HeaderNav";
import FooterNav from "../components/layout/footer/FooterNav";

export default {
  name: "Home",
  components: {
    HeaderNav,
    FooterNav
  },
  data() {
    return {
      mode: "light"
    };
  },
  created() {
    window.addEventListener("keyup", this.keyPress);
  },
  methods: {
    keyPress(e) {
      if (e.key === "t") {
        this.toggle();
      }
    },
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
<style lang="scss" scoped>
.body-columns {
  margin-top: 10vh;
}
.card {
  margin-top: 5rem;
}
.card .header {
  padding: 5px 10px;
}
.card-footer .columns {
  width: 100%;
}
.card-footer .columns input {
  border: none;
  border-radius: 0;
  box-shadow: none;
}
.card-footer .columns .column:last-child {
  display: flex;
  align-items: center;
}
.card-footer .columns .column:last-child button {
  border: none;
}
</style>
