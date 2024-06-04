<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzA91Q6kR8E2/ATz20D8Bhc/q1a6g3e0CvSR+PHF0gY" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        const homeLink = document.getElementById('homeLink');
        const currentPath = window.location.pathname;

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
            link.addEventListener('click', function() {
                navLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            });
        });

        homeLink.addEventListener('click', function() {
            navLinks.forEach(link => link.classList.remove('active'));
        });
    });
</script>
<!-- Web Dev section First slide  -->
<script>
    const trackFirst = document.querySelector('.slider-track-F');
    const slidesFirst = document.querySelectorAll('.slider-slide-F');
    const dotsContainerFirst = document.getElementById('dots-F');
    let currentSlideIndexF = 0;

    function showSlide(n) {
        slidesFirst.forEach(slide => slide.classList.remove('active'));
        currentSlideIndexF = (n + slidesFirst.length) % slidesFirst.length;
        slidesFirst[currentSlideIndexF].classList.add('active');
        trackFirst.style.transform = `translateX(-${currentSlideIndexF * slidesFirst[0].offsetWidth}px)`;
        updateDots();
    }

    function prevSlide() {
        showSlide(currentSlideIndexF - 1);
    }

    function nextSlide() {
        showSlide(currentSlideIndexF + 1);
    }

    function updateDots() {
        const dots = document.querySelectorAll('.dot');
        dots.forEach(dot => dot.classList.remove('active'));
        dots[currentSlideIndexF].classList.add('active');
    }
    // Create dots
    slidesFirst.forEach((_, index) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        dot.addEventListener('click', () => {
            showSlide(index);
        });
        dotsContainerFirst.appendChild(dot);
    });
    showSlide(currentSlideIndexF);
    // Event listeners for prev and next buttons
    document.querySelector('.prev-F').addEventListener('click', prevSlide);
    document.querySelector('.next-F').addEventListener('click', nextSlide);
</script>
<!--Web Dev section First slider End -->
<script src="{{asset('assets')}}/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.min.js"></script>

<!-- BG add Navbar -->
<script>
    const navbar = document.getElementById('navbar-scroll-bg');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) { // Adjust this value based on when you want the color to change
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

<!-- Customer Review Custom Slider -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.kagepisuceng__item');
        const indicators = document.querySelectorAll('.kagepisuceng__indicator');
        let currentIndex = 0;

        function showItem(index) {
            items.forEach(item => item.classList.remove('kagepisuceng__item_active'));
            items[index].classList.add('kagepisuceng__item_active');

            indicators.forEach(indicator => indicator.classList.remove('kagepisuceng__indicator_active'));
            indicators[index].classList.add('kagepisuceng__indicator_active');
        }

        document.querySelector('.kagepisuceng__control_prev').addEventListener('click', function(e) {
            e.preventDefault();
            const newIndex = (currentIndex - 1 + items.length) % items.length;
            showItem(newIndex);
            currentIndex = newIndex;
        });

        document.querySelector('.kagepisuceng__control_next').addEventListener('click', function(e) {
            e.preventDefault();
            const newIndex = (currentIndex + 1) % items.length;
            showItem(newIndex);
            currentIndex = newIndex;
        });

        indicators.forEach(indicator => {
            indicator.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-slide-to'));
                showItem(index);
                currentIndex = index;
            });
        });

        showItem(currentIndex);
    });
</script>
<!-- Customer Review Custom Slider End -->

<!-- FAQ Section Script -->
<script>
    const accordionBtns = document.querySelectorAll(".accordion__title");

    accordionBtns.forEach((button) => {
        button.addEventListener("click", (event) => {
            let accCollapse = button.nextElementSibling;

            if (!button.classList.contains("collapsing")) {
                // open accordion item
                if (!button.classList.contains("open")) {
                    accCollapse.style.display = "block";
                    let accHeight = accCollapse.clientHeight;

                    setTimeout(() => {
                        accCollapse.style.height = accHeight + "px";
                        accCollapse.style.display = "";
                    }, 1);

                    accCollapse.classList = "accordion__collapse collapsing";

                    setTimeout(() => {
                        accCollapse.classList = "accordion__collapse collapse open";
                    }, 300);
                }
                //close accordion item
                else {
                    accCollapse.classList = "accordion__collapse collapsing";

                    setTimeout(() => {
                        accCollapse.style.height = "0px";
                    }, 1);

                    setTimeout(() => {
                        accCollapse.classList = "accordion__collapse collapse";
                        accCollapse.style.height = "";
                    }, 300);
                }

                button.classList.toggle("open");
            }
        });
    });
</script>
<!-- FAQ Section Script End -->

<!-- Slider with updated functionality as per -->
<script>
    // vars
    'use strict'
    var testim = document.getElementById("testim"),
        testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
        testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
        testimLeftArrow = document.getElementById("left-arrow"),
        testimRightArrow = document.getElementById("right-arrow"),
        // testimSpeed = 4500,
        currentSlide = 0,
        currentActive = 0,
        testimTimer,
        touchStartPos,
        touchEndPos,
        touchPosDiff,
        ignoreTouch = 30;;

    window.onload = function() {

        // Testim Script
        function playSlide(slide) {
            for (var k = 0; k < testimDots.length; k++) {
                testimContent[k].classList.remove("active");
                testimContent[k].classList.remove("inactive");
                testimDots[k].classList.remove("active");
            }

            if (slide < 0) {
                slide = currentSlide = testimContent.length - 1;
            }

            if (slide > testimContent.length - 1) {
                slide = currentSlide = 0;
            }

            if (currentActive != currentSlide) {
                testimContent[currentActive].classList.add("inactive");
            }
            testimContent[slide].classList.add("active");
            testimDots[slide].classList.add("active");

            currentActive = currentSlide;

            clearTimeout(testimTimer);
            testimTimer = setTimeout(function() {
                playSlide(currentSlide += 1);
            }, testimSpeed)
        }

        testimLeftArrow.addEventListener("click", function() {
            playSlide(currentSlide -= 1);
        })

        testimRightArrow.addEventListener("click", function() {
            playSlide(currentSlide += 1);
        })

        for (var l = 0; l < testimDots.length; l++) {
            testimDots[l].addEventListener("click", function() {
                playSlide(currentSlide = testimDots.indexOf(this));
            })
        }

        playSlide(currentSlide);

        // keyboard shortcuts
        document.addEventListener("keyup", function(e) {
            switch (e.keyCode) {
                case 37:
                    testimLeftArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                default:
                    break;
            }
        })

        testim.addEventListener("touchstart", function(e) {
            touchStartPos = e.changedTouches[0].clientX;
        })

        testim.addEventListener("touchend", function(e) {
            touchEndPos = e.changedTouches[0].clientX;

            touchPosDiff = touchStartPos - touchEndPos;

            console.log(touchPosDiff);
            console.log(touchStartPos);
            console.log(touchEndPos);


            if (touchPosDiff > 0 + ignoreTouch) {
                testimLeftArrow.click();
            } else if (touchPosDiff < 0 - ignoreTouch) {
                testimRightArrow.click();
            } else {
                return;
            }

        })
    }
</script>
<!-- Slider with updated functionality as per End -->
<!-- Portfolio Popup  -->
<script>
    $(document).on("click", ".team-member-pop-up-link", (function(e) {
            $(this).closest("body").addClass("OpenPopup");
            var Popuptrue = $(this).closest(".team-member-pop-up-link").attr("href");
            $(this).closest(".our-team-list-outer").find(".member-card-popup-outer-Main" + Popuptrue).fadeIn()
        })),
        $(".Popup-close").on("click", (function(e) {
            var currentUrl = window.location.href.split("#")[0];
            window.location.href = currentUrl,
                e.preventDefault(),
                $(this).closest("body").removeClass("OpenPopup"),
                $(this).closest("body").find(".member-card-popup-outer-Main").fadeOut()
        })),
        $(document).on("click", ".team-member-pop-up-link", (function() {
            var name = $(this).closest(".member-card-outer").find(".member-name").text().replace(/ /g, ""),
                url = window.location.href,
                newHash = name;
            window.location.href = url + "#" + newHash
        }));
    const content = window.location.href.split("#")[1];
    void 0 !== content && $(".member-card-popup-outer-Main#" + content).fadeIn()
</script>
<!-- Portfolio Popup  End -->