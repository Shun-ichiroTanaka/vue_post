<template>
    <div class="relative new-post">
        <div class="new-post-btn">
            <button class="btn ripple rounded-full w-12 h-12"></button>
        </div>
    </div>
</template>
<script>
export default {
    components: {},
    mounted() {
        (() => {
            const rippleEffect = event => {
                let target = event.target;

                if (!target) {
                    return;
                }

                const cover = document.createElement("span");
                const coverSize = target.offsetWidth;
                const loc = target.getBoundingClientRect();

                const x =
                    event.pageX - loc.left - window.pageXOffset - coverSize / 2;
                const y =
                    event.pageY - loc.top - window.pageYOffset - coverSize / 2;

                const pos = `top: ${y}px; left: ${x}px; height: ${coverSize}px; width: ${coverSize}px;`;

                target.appendChild(cover);
                cover.setAttribute("style", pos);
                cover.setAttribute("class", "ripple-active");

                setTimeout(() => {
                    cover.remove();
                }, 2000);
            };

            document.addEventListener("DOMContentLoaded", () => {
                Array.from(document.querySelectorAll(".ripple")).forEach(
                    elem => {
                        elem.addEventListener("click", rippleEffect);
                    }
                );
            });
        })();
    }
};
</script>
<style lang="scss">
.new-post {
    &-btn {
        position: absolute;
        right: 0;
        bottom: 0;
    }
    .custom-class {
        right: 5px;
        bottom: 5px;
    }
    .btn {
        border: none;
        user-select: none;
        outline: none;
        padding: 10px 25px;
        color: #ffffff;
        background: #4fc3f7;
        text-align: center;
    }
    .ripple {
        position: relative;
        overflow: hidden;
    }

    .ripple .ripple-active {
        position: absolute;
        pointer-events: none;
        background: #fff;
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.8s;
        opacity: 0.3;
    }

    @keyframes ripple {
        to {
            opacity: 0;
            transform: scale(2);
        }
    }
}
</style>
