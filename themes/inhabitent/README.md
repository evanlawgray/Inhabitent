# Inhabitent Wordpress Them

A WordPress starter theme for a fictitious camping supplies company, with hipster.

## Installation

### Install the dev dependencies

You'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### Update the proxy in `gulpfile.js`

Be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `inhabitent.dev` to the appropriate localhost URL).

## Stretch goals implemented

* 1) Add custom screenshot.png to directory for use as them preview image.

* 2) Add dashicon to customize the CPT menu

* 3) Use jQuery to alter the style of the header to be absolutely positioned with a reverse colour scheme on pages with hero images at the top, and transition to the standard site header once the user has scrolled past the hero image to the rest of the page content

## Learning Outcomes

* 1) I gained a new appreciation for the modularity of SASS, particularly through the use of mixins and variables to simplify repetitive styling on large projects.

* 2) As an introduction to Wordpress, this project covered a fair bit of ground as far as familiarizing us with the basic functionality and structure of wordpress sites. There is still much to learn, obviously, but I feel a lot more confident with the template hierarchy and have a better sense of the benefits and drawbacks of wordpress as a development environment.

* 3) The stretch goal involving the reversal of header styles when scrolling past the hero image banner helped solidify some basic jquery stuff that we had gone over previously, as well as providing me with a bit more experience targeting animations to scroll events.

* 4) The scale and complexity of the project (particularly its file organization) made me appreciate the need for planning and forethough at each stage of the development process. With a website of this size, a strategic approach is needed, both for improving workflow and rationalizing the construction/styling of the theme.
