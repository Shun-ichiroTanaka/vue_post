<template>
    <div class="relative new-post" :mode="mode">
        <div class="new-post-btn">
            <button
                class="btn ripple shadow rounded-full flex justify-center items-center"
            >
                +
            </button>
        </div>
    </div>
</template>
<script>
import Toggle from "../../../../components/object/button/Toggle";

export default {
    name: "NewPost",
    components: {
        Toggle
    },
    props: ["mode"],

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
@import "../../../../../sass/_variables.scss";

.new-post {
    .btn {
        width: 50px;
        height: 50px;
        font-size: 35px;
        font-weight: 300;
        border: none;
        user-select: none;
        outline: none;
        color: $black;
        background: $btn-white;
        padding-bottom: 7px;
        text-align: center;
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2),
            0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12) !important;
        &:hover {
            background: $btn-hover-white;
        }
    }
    .ripple {
        position: relative;
        overflow: hidden;
    }

    .ripple .ripple-active {
        position: absolute;
        pointer-events: none;
        background: $btn-white;
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.5s;
        opacity: 0.8;
    }

    @keyframes ripple {
        to {
            opacity: 0;
            transform: scale(2);
        }
    }
}
.dark {
    .new-post {
        .btn {
            color: $white;
            background: $third-black;
            &:hover {
                background: $btn-gray-hover;
            }
        }
        .ripple .ripple-active {
            pointer-events: none;
            background: $white;
            opacity: 0.3;
        }
    }
}
</style>
