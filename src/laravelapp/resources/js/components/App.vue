<template>
    <div class="box-border" :class="mode">
        <header-nav :mode="mode" @toggle="toggle"></header-nav>

        <div class="overflow-y-screen">
            <router-view></router-view>
        </div>

        <footer-nav :mode="mode"></footer-nav>
    </div>
</template>

<script>
import HeaderNav from "../components/layout/header/HeaderNav";
import FooterNav from "../components/layout/footer/FooterNav";

export default {
    name: "App",
    data() {
        return {
            mode: "light"
        };
    },
    components: {
        HeaderNav,
        FooterNav
    },
    created() {
        window.addEventListener("keyup", this.keyPress);
    },
    methods: {
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
<style lang="scss">
@import "../../sass/_variables.scss";

body {
    background: $bg-white;
    box-sizing: border-box !important;
    clear: both !important;
}

.dark {
    background: $black;
    color: $white;

    a {
        color: $primary;
    }

    strong {
        color: $white;
    }
}
</style>
