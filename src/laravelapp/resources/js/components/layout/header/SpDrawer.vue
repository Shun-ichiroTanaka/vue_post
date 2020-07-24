<template>
  <div class="block lg:hidden">
    <input id="drawer-checkbox" type="checkbox" />
    <label id="drawer-icon" for="drawer-checkbox">
      <span class="navbar-burger burger" data-target="navbarMenu">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </label>
    <label id="drawer-close" for="drawer-checkbox"></label>

    <div id="drawer-content">ここがドロワーとして出てくる部分です。</div>
  </div>
</template>
<script>
export default {};
</script>
<style lang="scss" scoped>
#drawer-checkbox {
  display: none;
}

#drawer-content {
  overflow: auto;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 40;
  width: 75%;
  max-width: 90%;
  height: 100%;
  background: #fff;
  transition: all 0.2s ease;
  transform: translateX(100%);
}
#drawer-checkbox:checked ~ #drawer-content {
  transform: translateX(0);
  box-shadow: 6px 0 25px rgba(0, 0, 0, 0.16);
}

#drawer-close {
  display: none;
  position: fixed;
  z-index: 39;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: 0;
  transition: all 0.2s ease;
}
#drawer-checkbox:checked ~ #drawer-close {
  display: block;
  opacity: 0.3;
}
</style>