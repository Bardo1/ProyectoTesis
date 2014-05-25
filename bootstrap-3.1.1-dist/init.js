cat js/init.js
var links = document.getElementById('links').getElementsByTagName('a'),
    options = {
        // Start an automatic slideshow with a delay of 5 seconds between slides:
                 interval: 5000,
        // Set to true to initialize the Gallery with carousel specific options:
                  carousel: false
                displayClass: 'blueimp-gallery-display',
                controlsClass: 'blueimp-gallery-controls',
                singleClass: 'blueimp-gallery-single',                  
                leftEdgeClass: 'blueimp-gallery-left',
                rightEdgeClass: 'blueimp-gallery-right',
                enableKeyboardNavigation: true,
                closeOnEscape: true,
                   },
                  gallery = blueimp.Gallery(links, options);