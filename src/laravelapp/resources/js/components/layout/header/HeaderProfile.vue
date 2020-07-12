<template>
    <div :mode="mode" class="relative">
        <div
            class="flex items-center justify-center ml-8 h-full"
            @mouseover="mouseover"
            @mouseleave="mouseleave"
        >
            <!-- trigger -->
            <div class="flex justify-center items-center cursor-pointer">
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
                        class="profile max-w-xs absolute right-0 text-sm rounded shadow z-50"
                        　
                    >
                        <!-- header -->
                        <div
                            class="profile-header relative flex justify-start items-center m-3 rounded-lg"
                        >
                            <div
                                class="flex items-center justify-start p-2 font-bold tracking-wide whitespace-no-wrap cursor-pointer"
                            >
                                <div
                                    class="mr-2 my-1 inline-flex items-center h-10 w-10 select-none border-2 border-white rounded-full shadow-inner overflow-hidden"
                                >
                                    <img
                                        src="https://images.unsplash.com/photo-1548247416-ec66f4900b2e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
                                        alt
                                    />
                                </div>
                                <div class="flex flex-col">
                                    Your Name
                                    <div
                                        class="text-xs font-normal inline-flex items-center"
                                    >
                                        自分のプロフィールを見る
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- menu list -->
                        <ul class="px-2 pb-2">
                            <li class="p-2 rounded-lg">
                                <a
                                    class="flex p-2 focus:outline-none focus:bg-gray-200"
                                    href="#"
                                    ><settings-icon
                                        size="1.5x"
                                        class="mr-4"
                                    ></settings-icon>
                                    <p>各種設定</p>
                                </a>
                            </li>
                            <li class="p-2 rounded-lg">
                                <a
                                    class="flex p-2 focus:outline-none focus:bg-gray-200"
                                    href="/logout"
                                    ><log-out-icon
                                        size="1.5x"
                                        class="mr-4"
                                    ></log-out-icon>
                                    <p>ログアウト</p>
                                </a>
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
import Toggle from "../../../components/object/button/Toggle";
import { LogOutIcon } from "vue-feather-icons";
import { SettingsIcon } from "vue-feather-icons";

export default {
    name: "HeaderProfile",

    data() {
        return {
            show: false
        };
    },
    components: {
        Toggle,
        LogOutIcon,
        SettingsIcon
    },
    props: ["mode"],
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
@import "../../../../sass/_variables.scss";

.profile {
    margin-top: 30px;
    width: 400px;
    background: $white;
    &-header {
        border-bottom: 1px solid $gray;
        &:hover {
            background: $btn-white;
        }
    }

    li {
        a {
            color: $black;
        }
        &:hover {
            background: $btn-white;
        }
    }
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

.dark {
    .profile {
        background: $secondary-black;
        &-header {
            border-bottom: 1px solid $btn-gray-hover;
            &:hover {
                background: $btn-gray-hover;
            }
        }
        a {
            color: $white;
        }
        li {
            &:hover {
                background: $btn-gray-hover;
            }
        }
    }
}
</style>
