import "bootstrap/dist/js/bootstrap.bundle.min.js";
import "@/bootstrap.ts";
import { toggleClassesToAnimate } from "@/animation.ts";

import.meta.glob(["./../assets/images/**", "./../assets/fonts/**"]);

window.onload = () => {
    toggleClassesToAnimate(".hidden", "show");
};
