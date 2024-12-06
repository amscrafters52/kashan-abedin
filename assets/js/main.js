// home page main slider start
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});
// home page main slider end

// youtube video modal start
// Function to show a modal
const toggleModal = (modalId, display) => {
    document.getElementById(modalId).style.display = display;
};

// Add event listeners to project titles to open modals
document.querySelectorAll('.project-link-title').forEach(titleElement => {
    titleElement.addEventListener('click', () => {
        toggleModal(titleElement.getAttribute('data-modal-id'), 'block');
    });
});

// Add event listeners to close buttons to close modals
document.querySelectorAll('.close').forEach(closeButton => {
    closeButton.addEventListener('click', () => {
        toggleModal(closeButton.closest('.modal').id, 'none');
    });
});

// Close modals when clicking outside of modal-content
window.addEventListener('click', (event) => {
    if (event.target.classList.contains('modal')) {
        toggleModal(event.target.id, 'none');
    }
});
// youtube video modal end

// go top start
window.onscroll = function () {
    const button = document.querySelector('.gotop_click');
    if (document.documentElement.scrollTop > 100) {
        button.style.display = "block";
    } else {
        button.style.display = "none";
    }
};

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
// go top end