
$('.banner').slick({
    dots: true,
    arrows: false
});


$('.urls__items').slick({
    arrows: false,
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 525,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});


$('.newsMore__mainSlide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.newsMore__paginationSlide'
});
$('.newsMore__paginationSlide').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.newsMore__mainSlide',
    dots: true,
    arrows: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 835,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 3
            }
        }
    ]
});


$('.razdelyMore__mainSlide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.razdelyMore__paginationSlide'
});
$('.razdelyMore__paginationSlide').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.razdelyMore__mainSlide',
    arrows: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5
            }
        },
        {
            breakpoint: 835,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3
            }
        }
    ]
});


function displayFileName() {
    const fileInput = document.getElementById('contacts__fileInput');
    const fileNameDisplay = document.getElementById('contacts__fileName');
    if (fileInput.files.length > 0) {
        const fileName = fileInput.files[0].name;
        fileNameDisplay.textContent = fileName;
    } else {
        fileNameDisplay.textContent = '';
    }
}


$('.faq__item-tema').click(function () {
    const $faqMore = $(this).closest('.faq__item').find('.faq__item-more');
    if ($faqMore.is(':hidden')) {
        $faqMore.slideDown();
        $(this).addClass('show');
    } else {
        $faqMore.slideUp();
        $(this).removeClass('show');
    }
});


const copyLinks = document.querySelectorAll('.documentsMore__btn[href]');
copyLinks.forEach(link => {
    link.addEventListener('click', event => {
        event.preventDefault();
        const copyElement = link.querySelector('.documentsMore__copy');
        copyElement.classList.add('active');

        setTimeout(() => {
            copyElement.classList.remove('active');
        }, 1000);
        const href = link.getAttribute('href');
        copyToClipboard(href);
    });
});


function copyToClipboard(text) {
    const textarea = document.createElement('textarea');
    textarea.value = text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);
}


const dropdownTitles = document.querySelectorAll('.dropdown-title');
dropdownTitles.forEach(title => {
    title.addEventListener('click', () => {
        const ul = title.nextElementSibling;
        if (ul.classList.contains('show')) {
            ul.classList.remove('show');
        } else {
            ul.classList.add('show');
        }
    });
});


document.addEventListener('click', event => {
    const dropdownTitles = document.querySelectorAll('.dropdown');
    const isClickInsideDropdownTitle = Array.from(dropdownTitles).some(title => title.contains(event.target));
    if (!isClickInsideDropdownTitle) {
        const dropdownMenus = document.querySelectorAll('.dropdown ul');
        dropdownMenus.forEach(menu => {
            menu.classList.remove('show');
        });
    }
});