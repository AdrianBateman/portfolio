/*******************************
 *
 *  Lazy load images on scroll
 *
 *******************************/
document.addEventListener("DOMContentLoaded", function () {
    let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
    let active = false;

    const lazyLoad = function () {
        if (active === false) {
            active = true;

            setTimeout(function () {
                lazyImages.forEach(function (lazyImage) {
                    if ((lazyImage.getBoundingClientRect().top <= window.innerHeight &&
                            lazyImage.getBoundingClientRect().bottom >= 0) &&
                        getComputedStyle(lazyImage).display !== "none") {
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.srcset = lazyImage.dataset.srcset;
                        lazyImage.classList.remove("lazy");

                        lazyImages = lazyImages.filter(function (image) {
                            return image !== lazyImage;
                        });

                        if (lazyImages.length === 0) {
                            document.removeEventListener("scroll", lazyLoad);
                            window.removeEventListener("resize", lazyLoad);
                            window.removeEventListener("orientationchange", lazyLoad);
                        }
                    }
                });

                active = false;
            }, 200);
        }
    };

    document.addEventListener("scroll", lazyLoad);
    window.addEventListener("resize", lazyLoad);
    window.addEventListener("orientationchange", lazyLoad);
});


/*******************************
 *
 *  menu scroll functions
 *
 *******************************/

function scrollTo(elem, style, unit, from, to, time, prop) {
    if (!elem) {
        return;
    }
    var start = new Date().getTime(),
        timer = setInterval(function () {
            var step = Math.min(1, (new Date().getTime() - start) / time);
            if (prop) {
                elem[style] = (from + step * (to - from)) + unit;
            } else {
                elem.style[style] = (from + step * (to - from)) + unit;
            }
            if (step === 1) {
                clearInterval(timer);
            }
        }, 25);
    if (prop) {
        elem[style] = from + unit;
    } else {
        elem.style[style] = from + unit;
    }
}

function menuClick(jsLinkFrom, jsLinkTo) {
    // scroll to for work link
    document.getElementsByClassName(jsLinkFrom)[0].addEventListener("click", function () {

        var target = document.getElementsByClassName(jsLinkTo)[0];

        scrollTo(document.scrollingElement || document.documentElement, "scrollTop", "", window.pageYOffset,
            target.offsetTop - 100, 500, true);
    });
}

menuClick("js-homeLink", "js-TopLinkTo");
menuClick("js-languagesLink", "js-languagesArticle");
menuClick("js-workLink", "js-workArticle");
menuClick("js-skillsLink", "js-skillsArticle");


/*******************************
 *
 *  menu link classes functions
 *
 *******************************/

function isVisible(ele) {
    const {
        top,
        bottom
    } = ele.getBoundingClientRect();
    const vHeight = (window.innerHeight || document.documentElement.clientHeight);

    return (
        (top > 0 || bottom > 0) &&
        top < vHeight
    );
}

function linkActive(navLink, articlePosition) {

    var link = document.getElementsByClassName(navLink)[0];
    var view = document.getElementsByClassName(articlePosition)[0];

    if (isVisible(view)) {
        link.classList.add('navigation--active');
    } else {
        if (link.classList.contains('navigation--active')) {
            link.classList.remove('navigation--active');
        }
    }
}

document.addEventListener("scroll", function () {
    linkActive("js-homeLink", "js-TopLinkTo");
    linkActive("js-languagesLink", "js-languagesArticle");
    linkActive("js-workLink", "js-workArticle");
    linkActive("js-skillsLink", "js-skillsArticle");
});