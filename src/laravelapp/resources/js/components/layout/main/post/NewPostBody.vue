<template>
  <transition name="anime">
    <div class="my-modal fixed w-full flex justify-center items-center" v-if="modal">
      <p class="my-modal-close" @click.self="close">✖</p>
      <slot class="contents" />
    </div>
  </transition>
</template>

<script>
export default {
  props: {
    value: {
      type: Boolean,
      required: true
    }
  },
  computed: {
    modal: {
      get() {
        return this.value;
      },
      set(value) {
        this.$emit("input", value);
      }
    }
  },
  methods: {
    close() {
      this.modal = false;
    }
  }
};
</script>

<style lang="scss" scoped>
.my-modal {
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100%;
  z-index: 1000 !important;
}
.anime-enter-active,
.anime-leave-active {
  transition: opacity 0.3s;
}
.anime-enter,
.anime-leave-to {
  opacity: 0;
}
.anime-enter-active > .contents,
.anime-leave-active > .contents {
  transition: all 0.3s;
}
.anime-enter > .contents {
  transform: translateY(-100px);
}
.anime-leave-to > .contents {
  transform: translateY(-100px);
}
</style>


