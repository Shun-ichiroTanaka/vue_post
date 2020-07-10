<template>
  <div class="relative">
    <div
      class="flex items-center justify-center ml-8 h-full"
      @mouseover="mouseover"
      @mouseleave="mouseleave"
    >
      <!-- trigger -->
      <div class="flex justify-center items-center">
        <div
          class="mr-2 my-1 inline-flex justify-center items-center h-10 w-10 select-none border-2 border-white rounded-full shadow-inner overflow-hidden"
        >
          <img
            src="https://images.unsplash.com/photo-1548247416-ec66f4900b2e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
            alt
          />
        </div>
        <div class>Your Name</div>
      </div>

      <transition name="anime">
        <div v-if="show">
          <!-- menu -->
          <div
            class="profile max-w-xs absolute right-0 text-sm text-gray-800 bg-white rounded-sm shadow-lg z-50"
            　
          >
            <!-- header -->
            <div class="relative flex justify-center items-center border-b mx-3">
              <div
                class="flex items-center justify-start py-2 text-gray-700 font-bold tracking-wide whitespace-no-wrap"
              >
                <div
                  class="mr-2 my-1 inline-flex items-center h-10 w-10 select-none border-2 border-white rounded-full shadow-inner overflow-hidden"
                >
                  <img
                    src="https://images.unsplash.com/photo-1548247416-ec66f4900b2e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
                    alt
                  />
                </div>
                <div class>Your Name</div>
              </div>
            </div>

            <!-- menu list -->
            <ul class="my-2">
              <li>
                <a
                  class="block px-3 py-2 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-200"
                  href="#"
                >Settings</a>
              </li>
              <li class="m-2 border-b"></li>
              <li>
                <a
                  class="block px-3 py-2 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-200"
                  href="/logout"
                >Logout</a>
              </li>
            </ul>
          </div>
          <!-- //end toggle-component -->
        </div>
      </transition>
    </div>
  </div>
</template>
<script>
export default {
  name: "HeaderProfile",

  data() {
    return {
      show: false
    };
  },
  methods: {
    mouseover() {
      this.show = true;
    },
    mouseleave() {
      this.show = false;
    }
  }
};
</script>
<style lang="scss" scoped>
.profile {
  margin-top: 30px;
  width: 400px;
}
.anime-enter-active,
.anime-leave-active {
  transition: all 0.3s ease;
}
.anime-enter,
.dropdown-fade-leave-to {
  opacity: 0;
  transform: translateY(10px);
}
</style>
