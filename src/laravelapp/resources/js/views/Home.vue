<template>
    <div class="home relative" :class="mode">
        <header-nav :mode="mode" @toggle="toggle"></header-nav>

        <post-lists></post-lists>
        <new-post></new-post>

        <scroll-top></scroll-top>

        <footer-nav :mode="mode"></footer-nav>
    </div>
</template>

<script>
// 投稿情報をvuexで取得
import { mapGetters } from "vuex";
import PostLists from "../components/layout/main/post/PostLists";
import NewPost from "../components/layout/main/post/NewPost";

import HeaderNav from "../components/layout/header/HeaderNav";
import FooterNav from "../components/layout/footer/FooterNav";

import ScrollTop from "../Actions/ScrollTop";

export default {
    name: "Home",
    components: {
        PostLists,
        HeaderNav,
        FooterNav,
        ScrollTop,
        NewPost
    },
    data() {
        return {
            mode: "light"
        };
    },
    created() {
        window.addEventListener("keyup", this.keyPress);
    },
    mounted() {
        this.$store.dispatch("fetchNewsPosts");
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
    },
    computed: {
        ...mapGetters({
            posts: "posts",
            newsStatus: "newsStatus"
        })
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
