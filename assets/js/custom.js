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
