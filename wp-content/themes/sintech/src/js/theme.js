// Add all JS development here
jQuery(function ($) {
	$(document).ready(function () {
		// Typing animation for "We think big and..."
		const text = "We think big and...";
		const typingElement = document.getElementById("typing-text");
		if (typingElement) {
			let index = 0;

			function typeNextChar() {
				if (index < text.length) {
					typingElement.textContent += text.charAt(index);
					index++;
					setTimeout(typeNextChar, 120); // speed in milliseconds
				}
			}

			typeNextChar();
		}

		// Custom select dropdown functionality
		const trigger = document.getElementById("placeholder");
		const optionsBox = document.getElementById("options");
		const doneBtn = document.getElementById("doneBtn");
		const optionElements = document.querySelectorAll(".option");

		if (trigger && optionsBox && doneBtn) {
			let selectedOptions = [];

			// Toggle dropdown
			trigger.addEventListener("click", function (e) {
				e.stopPropagation();
				optionsBox.style.display =
					optionsBox.style.display === "block" ? "none" : "block";
			});

			// Select/Deselect options (Multi-select behavior)
			optionElements.forEach((option) => {
				option.addEventListener("click", function (e) {
					e.stopPropagation();

					if (option.classList.contains("selected")) {
						option.classList.remove("selected");
						selectedOptions = selectedOptions.filter(
							(item) => item !== option.textContent
						);
					} else {
						option.classList.add("selected");
						selectedOptions.push(option.textContent);
					}
				});
			});

			// Done button to close and display selected values
			doneBtn.addEventListener("click", function () {
				trigger.textContent =
					selectedOptions.length > 0
						? selectedOptions.join(", ")
						: "What are you looking for?";
				optionsBox.style.display = "none";
			});

			// Hide dropdown on outside click
			document.addEventListener("click", function (e) {
				if (!e.target.closest(".custom-select")) {
					optionsBox.style.display = "none";
				}
			});
		}

		// Smooth scrolling for anchor links
		$('a[href^="#"]').on("click", function (event) {
			var target = $(this.getAttribute("href"));
			if (target.length) {
				event.preventDefault();
				$("html, body")
					.stop()
					.animate(
						{
							scrollTop: target.offset().top - 100,
						},
						1000
					);
			}
		});

		// Add active class to navigation links based on scroll position
		$(window).scroll(function () {
			var scrollDistance = $(window).scrollTop();

			// Add active class to nav links based on scroll position
			$(".nav-menu li a").each(function (i) {
				if ($(this).offset().top - 100 <= scrollDistance) {
					$(".nav-menu li a.active").removeClass("active");
					$(this).addClass("active");
				}
			});
		});

		// Animate elements on scroll
		function animateOnScroll() {
			$(".feature-box, .box, .card").each(function () {
				var elementTop = $(this).offset().top;
				var elementBottom = elementTop + $(this).outerHeight();
				var viewportTop = $(window).scrollTop();
				var viewportBottom = viewportTop + $(window).height();

				if (elementBottom > viewportTop && elementTop < viewportBottom) {
					$(this).addClass("animate-in");
				}
			});
		}

		// Call animation function on scroll
		$(window).scroll(animateOnScroll);

		// Initial call
		animateOnScroll();

		// Form submission handling
		$(".contact-section form").on("submit", function (e) {
			e.preventDefault();

			// Get form data
			var formData = {
				name: $(this).find('input[type="text"]').first().val(),
				email: $(this).find('input[type="email"]').val(),
				mobile: $(this).find('input[type="tel"]').val(),
				company: $(this).find('input[type="text"]').last().val(),
				services: $("#placeholder").text(),
			};

			// Here you would typically send the data to your server
			console.log("Form submitted:", formData);

			// Show success message
			alert("Thank you for your message! We will get back to you soon.");

			// Reset form
			$(this)[0].reset();
			$("#placeholder").text("What are you looking for?");
		});

		// Lazy loading for images
		if ("IntersectionObserver" in window) {
			const imageObserver = new IntersectionObserver((entries, observer) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						const img = entry.target;
						img.src = img.dataset.src;
						img.classList.remove("lazy");
						imageObserver.unobserve(img);
					}
				});
			});

			document.querySelectorAll("img[data-src]").forEach((img) => {
				imageObserver.observe(img);
			});
		}

		// Add loading animation
		$(window).on("load", function () {
			$("body").addClass("loaded");
		});

		// Counter animation for case study metrics
		function animateCounters() {
			$(".value").each(function () {
				var $this = $(this);
				var countTo = $this.text();

				if (countTo.includes("%")) {
					var number = parseFloat(countTo);
					$({ countNum: 0 }).animate(
						{
							countNum: number,
						},
						{
							duration: 2000,
							easing: "swing",
							step: function () {
								$this.text(Math.floor(this.countNum) + "%");
							},
							complete: function () {
								$this.text(number + "%");
							},
						}
					);
				} else if (countTo.includes("K")) {
					var number = parseFloat(countTo);
					$({ countNum: 0 }).animate(
						{
							countNum: number,
						},
						{
							duration: 2000,
							easing: "swing",
							step: function () {
								$this.text(Math.floor(this.countNum) + "K");
							},
							complete: function () {
								$this.text(number + "K");
							},
						}
					);
				}
			});
		}

		// Trigger counter animation when case studies section is visible
		var caseStudyObserver = new IntersectionObserver(function (entries) {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					animateCounters();
					caseStudyObserver.unobserve(entry.target);
				}
			});
		});

		document.querySelectorAll(".case-studies").forEach((section) => {
			caseStudyObserver.observe(section);
		});

		// Close offcanvas menu when clicking on a link
		$(".offcanvas .nav-link").on("click", function () {
			$(".offcanvas").offcanvas("hide");
		});

		// Add active class to current page in both desktop and offcanvas menus
		function setActiveMenuItems() {
			var currentPage = window.location.pathname;

			// Desktop menu items
			$(".nav-link-desktop").each(function () {
				var linkHref = $(this).attr("href");
				if (linkHref && currentPage.includes(linkHref.split("/").pop())) {
					$(this).addClass("active");
				}
			});

			// Offcanvas menu items
			$(".offcanvas .nav-link").each(function () {
				var linkHref = $(this).attr("href");
				if (linkHref && currentPage.includes(linkHref.split("/").pop())) {
					$(this).addClass("active");
				}
			});
		}

		// Call the function on page load
		setActiveMenuItems();

		// Responsive functionality

		// Handle window resize
		$(window).on("resize", function () {
			// Recalculate any responsive elements
			handleResponsiveElements();
		});

		// Handle responsive elements
		function handleResponsiveElements() {
			var windowWidth = $(window).width();

			// Adjust feature boxes for mobile
			if (windowWidth <= 576) {
				$(
					"#feature-box1, #feature-box2, #feature-box3, #feature-box4, #feature-box5"
				).css({
					padding: "20px 10px",
					"min-width": "120px",
				});
			} else if (windowWidth <= 768) {
				$(
					"#feature-box1, #feature-box2, #feature-box3, #feature-box4, #feature-box5"
				).css({
					padding: "30px 15px",
					"min-width": "150px",
				});
			}

			// Adjust service boxes for mobile
			if (windowWidth <= 576) {
				$(".box h1").css("font-size", "48px");
				$(".box p").css("font-size", "14px");
			} else if (windowWidth <= 768) {
				$(".box h1").css("font-size", "60px");
				$(".box p").css("font-size", "16px");
			}
		}

		// Initialize responsive elements
		handleResponsiveElements();

		// Add touch support for mobile devices
		if ("ontouchstart" in window) {
			// Add touch-specific styles
			$("body").addClass("touch-device");

			// Improve touch targets
			$(".nav-link, .btn, .option").css("min-height", "44px");
		}

		// Improve mobile navigation
		$(".navbar-toggler").on("click", function () {
			// Add mobile-specific behavior
			$("body").toggleClass("menu-open");
		});

		// Close mobile menu when clicking outside
		$(document).on("click", function (e) {
			if (!$(e.target).closest(".navbar, .offcanvas").length) {
				$(".offcanvas").offcanvas("hide");
				$("body").removeClass("menu-open");
			}
		});

		// Add smooth scrolling for mobile
		if ("ontouchstart" in window) {
			$("html").css("scroll-behavior", "smooth");
		}

		// Optimize images for mobile
		function optimizeImagesForMobile() {
			var windowWidth = $(window).width();

			if (windowWidth <= 768) {
				$("img").each(function () {
					var $img = $(this);
					var src = $img.attr("src");

					// Add loading="lazy" for better performance
					if (!$img.attr("loading")) {
						$img.attr("loading", "lazy");
					}
				});
			}
		}

		// Initialize image optimization
		optimizeImagesForMobile();

		// Add mobile-specific animations
		if (windowWidth <= 768) {
			// Reduce animation duration for better mobile performance
			$(".box, .card, .feature-box").css("transition-duration", "0.2s");
		}

		// Handle orientation change
		$(window).on("orientationchange", function () {
			setTimeout(function () {
				handleResponsiveElements();
				optimizeImagesForMobile();
			}, 100);
		});

		// Add mobile-friendly form validation
		$(".contact-section form input, .contact-section form select").on(
			"blur",
			function () {
				var $field = $(this);
				var value = $field.val().trim();

				if ($field.attr("required") && !value) {
					$field.addClass("is-invalid");
				} else {
					$field.removeClass("is-invalid");
				}
			}
		);

		// Improve mobile scrolling performance
		if ("ontouchstart" in window) {
			$("body").css({
				"-webkit-overflow-scrolling": "touch",
				"overflow-scrolling": "touch",
			});
		}
	});
});
