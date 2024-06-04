<script src="{{asset('assets')}}/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
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
<!-- BG add Navbar End -->

<!-- Scrollable Slide section -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ScrollTrigger.defaults({
            markers: false
        });

        var points = gsap.utils.toArray(".point");

        var height = 100 * points.length;

        var pinner = gsap.timeline({
            scrollTrigger: {
                trigger: ".philosophie .wrapper",
                start: "top top",
                end: "+=" + height + "%",
                scrub: true,
                pin: true,
                id: "pinning",
                markers: false
            }
        });

        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".philosophie",
                start: "top center",
                end: "+=" + height + "%",
                scrub: true,
                id: "points"
            }
        });

        points.forEach(function(elem, i) {
            gsap.set(elem, {
                position: "absolute",
                top: 0,
                opacity: 0,
                visibility: 'hidden'
            });

            tl.set(elem, {
                zIndex: 100
            });
            tl.to(elem, {
                opacity: 1,
                visibility: 'visible',
                duration: 0.5
            }, i);
            tl.from(elem.getElementsByClassName("split right"), {
                opacity: 0
            }, i);
            tl.from(
                elem.getElementsByClassName("centered"), {
                    opacity: 0,
                    translateY: 100
                },
                i
            );

            if (i != points.length - 1) {
                tl.to(
                    elem.getElementsByClassName("centered"), {
                        opacity: 0,
                        translateY: -100
                    },
                    i + 0.5
                );
                tl.to(elem.getElementsByClassName("split right"), {
                    opacity: 1
                }, i + 0.5);
            } else {
                tl.to(elem, {
                    opacity: 1,
                    visibility: 'visible'
                }, i);
            }
        });
    });
</script>
<!-- Scrollable Slide section End -->
<!-- 4th section right slider -->
<script>
    const track = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slider-slide');
    const dotsContainer = document.getElementById('dots');
    let currentSlideIndex = 0;

    function showSlide(n) {
        slides.forEach(slide => slide.classList.remove('active'));
        currentSlideIndex = (n + slides.length) % slides.length;
        slides[currentSlideIndex].classList.add('active');
        track.style.transform = `translateX(-${currentSlideIndex * slides[0].offsetWidth}px)`;
        updateDots();
    }

    function prevSlide() {
        showSlide(currentSlideIndex - 1);
    }

    function nextSlide() {
        showSlide(currentSlideIndex + 1);
    }

    function updateDots() {
        const dots = document.querySelectorAll('.dot');
        dots.forEach(dot => dot.classList.remove('active'));
        dots[currentSlideIndex].classList.add('active');
    }

    // Create dots
    slides.forEach((_, index) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        dot.addEventListener('click', () => {
            showSlide(index);
        });
        dotsContainer.appendChild(dot);
    });

    showSlide(currentSlideIndex);

    // Event listeners for prev and next buttons
    document.querySelector('.prev').addEventListener('click', prevSlide);
    document.querySelector('.next').addEventListener('click', nextSlide);
</script>

<!-- 4th section right slider End -->
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