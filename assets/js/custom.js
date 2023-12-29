AOS.init();

// Function to open a specific section/tab within a widget
function openSection(evt, sectionName, widgetIdentifier) {
    // Find the specific tab content for this widget instance
    const tabContent = document.getElementById(widgetIdentifier).querySelector('#' + sectionName);

    if (tabContent) {
        // Hide all tab content within this widget
        const tabContents = document.getElementById(widgetIdentifier).getElementsByClassName('tabcontent');
        for (let i = 0; i < tabContents.length; i++) {
            tabContents[i].style.display = 'none';
        }

        // Deactivate all tab links within this widget
        const tabLinks = document.getElementById(widgetIdentifier).getElementsByClassName('tablink');
        for (let i = 0; i < tabLinks.length; i++) {
            tabLinks[i].classList.remove('active');
        }

        // Show the specific tab content for this widget
        tabContent.style.display = 'block';

        // Activate the button that was clicked
        evt.target.classList.add('active');
    } else {
        console.error('Tab content not found');
    }
}

// Attach event listener to handle tab clicks for each widget instance
document.addEventListener('click', function (event) {
    if (event.target && event.target.classList.contains('tablink')) {
        const widgetIdentifier = event.target.closest('.customer-club').id;
        openSection(event, event.target.getAttribute('data-section'), widgetIdentifier);
    }
});


$('.modal').on('hide.bs.modal', function () {
    var video = $(this).find('video')
    var iframe = $(this).find('iframe')

    if (iframe.length) {
        iframe.attr('src', iframe.attr('src'));
    }

    if (video.length) {
        video[0].pause();
    }
})


jQuery(document).ready(function ($) {

    $(document).on('change', '.input-text.qty', function () {
        $('.button[name="update_cart"]').removeAttr('disabled');
        $('button[name="update_cart"]').click()
    })

    $(document).on('click', '.input-quantity-product .plus', function () {
        var quantityInput = $(this).parent().find('input[type="number"]');
        var currentValue = parseFloat(quantityInput.val());

        if (!isNaN(currentValue)) {
            quantityInput.val(currentValue + 1);
            $('.button[name="update_cart"]').removeAttr('disabled');
            $('button[name="update_cart"]').click()
        }
    });

    $(document).on('click', '.input-quantity-product .minus', function () {
        var quantityInput = $(this).parent().find('input[type="number"]');
        var currentValue = parseFloat(quantityInput.val());

        if (!isNaN(currentValue)) {
            quantityInput.val(currentValue - 1);
            $('.button[name="update_cart"]').removeAttr('disabled');
            $('button[name="update_cart"]').click()
        }
    });


    $('.post-like').on('click', function () {
        var post_id = $(this).data('post-id');
        var ajax_url = ajax_object.ajax_url;


        var $this = $(this);

        $.ajax({
            type: 'post',
            url: ajax_url,
            data: {
                action: 'handle_post_like',
                post_id: post_id,
            },
            success: function (response) {
                // Update the UI to reflect the like status
                if (response.status === 'liked') {
                    $this.removeClass('text-black-200').addClass('text-danger-500');
                } else if (response.status === 'unliked') {
                    $this.removeClass('text-danger-500').addClass('text-black-200');
                }

                // Update the like count display
                $this.siblings('.like-count').text(response.like_count);

                console.log(response.status);
            },
            error: function (xhr, status, error) {
                console.error(status + ": " + error);
            }
        });
    });

    var navbar = $('.navbar');
    var sticky = navbar.offset().top;

    $(window).scroll(function () {
        if ($(window).scrollTop() >= sticky) {
            navbar.addClass('sticky navbar-sticky');
        } else {
            navbar.removeClass('sticky navbar-sticky');
        }

        // Remove navbar-sticky class when scrolling back to the top
        if ($(window).scrollTop() <= 0) {
            navbar.removeClass('sticky navbar-sticky');
        }
    });

});