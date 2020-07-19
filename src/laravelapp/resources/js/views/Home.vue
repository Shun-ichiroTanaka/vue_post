<template>
    <div class="home relative p-4 w-full" :mode="mode">
        <div @click="openModal1" class="new-post-modal">
            <new-post></new-post>
        </div>

        <div class="w-full flex justify-center items-center">
            <div
                @click="openModal1"
                class="btn-shadow w-1/3 aaa rounded-lg mt-24 flex justify-center"
            >
                <div class="flex justify-between items-center p-3 w-full">
                    <img
                        src="https://images.unsplash.com/photo-1548247416-ec66f4900b2e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
                        alt
                        class="absolute w-6 h-6 rounded-full object-cover"
                    />
                    <input
                        type="text"
                        placeholder="最新情報を投稿"
                        class="pl-8 w-full h-full resize-none focus:outline-none text-sm"
                    />
                    <div
                        class="ml-4 rounded-full p-2 flex justify-center items-center cursor-pointer"
                    >
                        <camera-icon size="20" class="text-gray"></camera-icon>
                    </div>
                </div>
            </div>
        </div>

        <new-post-body v-model="modal1">
            <div class="contents flex flex-col p-2">
                <div class="p-2">
                    <h2 class="text-xl bold text-center pb-2">
                        投稿を作成
                    </h2>
                    <button
                        @click="closeModal1"
                        class="close-btn rounded-full p-2 focus:outline-none"
                    >
                        <x-icon size="1.5x" class="custom-class"></x-icon>
                    </button>
                </div>
                <div class="px-2 flex justify-start items-center">
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
                <div class="p-2 w-full h-full">
                    <textarea
                        name
                        id
                        placeholder="今日の幸せな出来事をシェアしよう"
                        class="w-full h-full resize-none text-xl p-4 focus:outline-none"
                    ></textarea>
                </div>
                <div class="p-2 w-full h-full">
                    <button
                        type="submit"
                        class="text-lg bg-primary w-full h-50 p-2 text-white rounded focus:outline-none"
                    >
                        投稿する
                    </button>
                </div>
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

// icon
import { XIcon } from "vue-feather-icons";
import { CameraIcon } from "vue-feather-icons";

export default {
    name: "Home",
    components: {
        Toggle,
        PostLists,
        ScrollTop,
        NewPost,
        NewPostBody,
        // icon
        XIcon,
        CameraIcon
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
@import "../../sass/_variables.scss";
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
        color: $black;
        background: $white;
        border-radius: 5px;
        -webkit-box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
        h2 {
            border-bottom: 1px solid $gray;
        }
    }
    .close-btn {
        position: absolute;
        right: 20px;
        top: 10px;
        color: $btn-chick-gray;
        background: $btn-white;
        &:hover {
            background: $btn-hover-white;
        }
    }
    .aaa,
    input {
        background: $white !important;
    }

    textarea {
        background: $white !important;
        height: 300px;
    }
}

.dark {
    .home {
        .contents {
            color: $white;
            background: $secondary-black;
            h2 {
                border-bottom: 1px solid $btn-chick-gray;
            }
        }
        .close-btn {
            color: $btn-gray;
            background: $btn-black;

            &:hover {
                background: $btn-gray-hover;
            }
        }
        .aaa,
        input,
        textarea {
            background: $secondary-black !important;
            color: $white !important;
        }
        textarea {
            height: 300px;
        }
    }
}
</style>
