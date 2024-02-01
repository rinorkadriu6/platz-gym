const images = ['assets/Bloodshot-Roarin-Grape-HP.webp', 'assets/sam-sulek.webp']; 
        const slider = document.querySelector('.slider');
        let currentSlide = 0;

        function updateSlider() {
            slider.style.transition = 'transform 0.5s ease-in-out';
            slider.style.transform = `translateX(${-currentSlide * 100}%)`;
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + images.length) % images.length;
            updateSlider();
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % images.length;
            updateSlider();
        }

        images.forEach(image => {
            const slide = document.createElement('div');
            slide.className = 'slide';
            slide.innerHTML = `<img src="${image}" alt="Slide">`;
            slider.appendChild(slide);
        });

        updateSlider();