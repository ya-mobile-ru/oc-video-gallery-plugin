addEventListener("DOMContentLoaded", () => {
	const lazyVideos = document.querySelectorAll("[data-lazy-video]");

	lazyVideos.forEach((lazyVideo) => {
        lazyVideo.addEventListener("click", () => {
            const source = `${lazyVideo.dataset.lazyVideo}?autoplay=1`;
            const embedVideo = document.createElement("iframe");

            lazyVideo.querySelector('.video__cover').remove();
            lazyVideo.querySelector('.video__button').remove();

            embedVideo.setAttribute("frameborder", "0");
            embedVideo.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");
            embedVideo.setAttribute("allowfullscreen", "");
            embedVideo.setAttribute("src", source);
            embedVideo.classList.add("video__iframe");
            lazyVideo.appendChild(embedVideo);
        });
	});
});
