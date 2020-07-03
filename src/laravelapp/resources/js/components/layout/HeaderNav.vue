<template>
  <div>
    <!-- START NAV -->
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img :src="logo" alt="Logo" />
          </a>
          <span class="navbar-burger burger" data-target="navbarMenu">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenu" class="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="control has-icons-left">
                <input class="input is-rounded" type="email" placeholder="Search" />
                <span class="icon is-left">
                  <i class="fa fa-search"></i>
                </span>
              </div>
            </div>

            <!-- ダークモード切替 -->
            <div class="flex items-center justify-center">
              <toggle :mode="mode" @toggle="$emit('toggle')"></toggle>
            </div>

            <a class="navbar-item is-size-5 has-text-weight-semibold">Examples</a>
            <a class="navbar-item is-size-5 has-text-weight-semibold">Features</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAV -->
  </div>
</template>
<script>
import Toggle from "../../components/object/button/Toggle";

export default {
  name: "HeaderNav",
  data() {
    return {
      logo: require("../../../assets/bulma.png")
    };
  },
  components: {
    Toggle
  },
  props: ["mode"]
};
</script>
<style lang="scss" scoped>
nav.navbar {
  height: 6rem !important;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06) !important;
}

.dark nav.navbar {
  background: #15202b;
}
</style>
