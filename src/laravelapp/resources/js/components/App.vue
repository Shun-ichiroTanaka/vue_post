<template>
    <div class="">
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {};
    },
    components: {}
};
</script>
<style lang="scss">
body {
    background: #f0f2f6;
}
.dark {
    background: #181a1b;
    color: #f8fafc;

    a {
        color: #38b2ac;
    }

    strong {
        color: #f8fafc;
    }
}
</style>
