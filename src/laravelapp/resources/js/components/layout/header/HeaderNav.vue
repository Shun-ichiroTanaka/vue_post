<template>
  <div>
    <!-- START NAV -->
    <nav class="navbar">
      <div class="container h-full">
        <div class="navbar-brand h-full justify-between px-4">
          <router-link class="navbar-item" to="/">
            <img :src="logo" alt="Logo" />
          </router-link>

          <!-- スマホメニュー -->
          <sp-drawer></sp-drawer>
        </div>

        <div id="navbarMenu" class="navbar-menu">
          <div class="navbar-end">
            <!-- ダークモード切替 -->
            <div class="flex items-center justify-center">
              <toggle :mode="mode" @toggle="$emit('toggle')"></toggle>
            </div>
            <header-profile></header-profile>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAV -->
  </div>
</template>
<script>
import Toggle from "../../../components/object/button/Toggle";
import SpDrawer from "../../../components/layout/header/SpDrawer";
import HeaderProfile from "../../../components/layout/header/HeaderProfile";

export default {
  name: "HeaderNav",
  data() {
    return {
      logo: require("../../../../assets/bulma.png")
    };
  },
  components: {
    Toggle,
    SpDrawer,
    HeaderProfile
  },
  props: ["mode"]
};
</script>
<style lang="scss" scoped>
nav.navbar {
  top: 0;
  position: fixed !important;
  width: 100%;
  height: 6rem;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}
.navbar-brand {
  align-items: center !important;
}
</style>
