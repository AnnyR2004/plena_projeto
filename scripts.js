
window.addEventListener("resize", function(){

    const video = this.document.querySelector("video");
    const section = this.document.querySelector("section");
    const overlay = this.document.querySelector("overlay");
    const body = this.document.querySelector("body");
    const head = this.document.querySelector("head");

    section.style.height = video.offsetHeight + "px";
    section.style.height = video.offsetHeight + "px";

}, true);