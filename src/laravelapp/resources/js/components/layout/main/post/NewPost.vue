<template>
    <div class="relative new-post mr-4">
        <div class="new-post-btn">
            <button
                class="btn ripple shadow rounded-full w-12 h-12 text-4xl flex justify-center items-center"
            >
                +
            </button>
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
        // position: absolute;
        // right: 0;
        // bottom: 0;
    }
    .btn {
        border: none;
        user-select: none;
        outline: none;
        color: #181a1b;
        background: #e4e6eb;
        text-align: center;
        padding-bottom: 7px;
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2),
            0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12) !important;
        &:hover {
            background: #d0d2d8;
        }
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
        animation: ripple 0.6s;
        opacity: 0.8;
    }

    @keyframes ripple {
        to {
            opacity: 0;
            transform: scale(2);
        }
    }
}
</style>
