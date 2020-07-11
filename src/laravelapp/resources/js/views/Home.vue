<template>
  <div class="home relative">
    <div @click="openModal1" class="new-post-modal">
      <new-post></new-post>
    </div>
    <new-post-body v-model="modal1">
      <div class="contents" :mode="mode">
        <h1>MyModal1</h1>
        <button @click="closeModal1">閉じる</button>
      </div>
    </new-post-body>

    <post-lists></post-lists>

    <scroll-top></scroll-top>
  </div>
</template>

<script>
// 投稿情報をvuexで取得
import { mapGetters } from "vuex";
import Toggle from "../components/object/button/Toggle";

import PostLists from "../components/layout/main/post/PostLists";

import NewPost from "../components/layout/main/post/NewPost";
import NewPostBody from "../components/layout/main/post/NewPostBody";

import ScrollTop from "../Actions/ScrollTop";

export default {
  name: "Home",
  components: {
    Toggle,
    PostLists,
    ScrollTop,
    NewPost,
    NewPostBody
  },
  props: ["mode"],
  data() {
    return {
      modal1: false
    };
  },

  mounted() {
    this.$store.dispatch("fetchNewsPosts");
  },

  computed: {
    ...mapGetters({
      posts: "posts",
      newsStatus: "newsStatus"
    })
  },
  methods: {
    openModal1() {
      this.modal1 = true;
    },
    closeModal1() {
      this.modal1 = false;
    }
  }
};
</script>
<style lang="scss" scoped>
.home {
  .new-post-modal {
    position: fixed;
    right: 30px;
    bottom: 100px;
  }
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
  .contents {
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 500px;
    height: 500px;
    position: fixed;
    color: #000;
    background: #fff;
    border-radius: 5px;
    padding: 20px;
    -webkit-box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
  }
}
.dark {
  .home {
    .contents {
      color: #fff;
      background: #242627;
    }
  }
}
</style>
