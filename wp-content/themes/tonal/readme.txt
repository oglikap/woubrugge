=== Tonal ===
Contributors: automattic
Donate link:
Tags: blog, design, journal, photoblogging, white, black, one-column, responsive-layout, custom-background, custom-colors, custom-header, custom-menu, featured-images, flexible-header, infinite-scroll, post-formats, rtl-language-support, sticky-post, translation-ready, clean, minimal
Tested up to: 3.8
Stable tag: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Tonal takes its cue from your content, with a minimal style that changes based on your background color. This theme has large featured images, full-width videos, and post formats that look great on any device.

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Where is my custom menu? =

Tonals's primary menu is tucked behind an icon in the header. Click the open menu icon (three horizontal lines) to see it.

= Does Tonal use featured images? =

Yes, they will display above the post.

= Why does the text color changes when I change the background color? =

Tonal changes the color and contrast of the typography based on the background color you set.

= Quick Specs (all measurements in pixels) =

1. The main column width is 680.
2. The widget areas are 30% of the site width.

== Changelog ==

= 20 July 2016 =
* Fix incorrect textdomain references.
* Add `title-tag` support.

= 17 June 2016 =
* Add a class of .widgets-hidden to the body tag when the sidebar is active; allows the widgets to be targeted by Direct Manipulation.

= 9 June 2016 =
* Add Headstart annotations;

= 20 August 2015 =
* Add text domain and/or remove domain path. (T-Z)

= 31 July 2015 =
* Remove `.screen-reader-text:hover` and `.screen-reader-text:active` style rules.

= 15 July 2015 =
* Always use https when loading Google Fonts.

= 8 April 2015 =
* Move top border a bit lower when wpadminbar is being disbaled on a mobile device.

= 3 March 2015 =
* Ensure sharing by email box has a high enough z-index to be usable;

= 28 November 2014 =
* Add support for upcoming Eventbrite services.

= 24 July 2014 =
* change theme/author URIs and footer links to `wordpress.com/themes`.

= 15 July 2014 =
* Trigger a resize event when toggling the menu to make sure the Gallery Widget is being displayed properly.

= 30 June 2014 =
* Increase z-index to follow form when users are logged out. Was behing the frame.

= 1 June 2014 =
* add/update pot files.

= 29 May 2014 =
* Update version number to reflect change in footer

= 28 May 2014 =
* Update footer as per #1854 trac ticket.

= 10 May 2014 =
* ensure a base hex color is set before theme generates its text and border colors

= 17 April 2014 =
* Changing the z-index on the reblog box to prevent it from appearing behind the content area due to a z-index conflict.

= 16 April 2014 =
* Fixed issue where categories were not displaying properly on the single view.

= 14 April 2014 =
* Update Responsive video support

= 31 March 2014 =
* Language file
* Add readme

= 15 March 2014 =
* Comments icon was showing even if comments disabled

= 11 March 2014 =
* Change description to be the same as theme showcase
* Add status post format to make sure support all
* Fix tags in theme

= 10 March 2014 =
* Better border contrast
* Increase contrast
* Better background contrasts

= 9 March 2014 =
* Change page-links to margin rather than padding to look cleaner
* Make more-link class bold
* Fix margin on images and remove border on gallery images
* Remove margins on images
* Image captions needed padding on left and right
* Better styling for miletone widget
* Page link styling
* Custom header needs to have opacity and line height in admin the same as front
* Better widget formatting for recent comments
* Widget headers weren't the same color as h1
* Better Flickr widget
* On search don't show post format icon for pages
* Make links more obvious with text-decoration on widgets and entry links

= 8 March 2014 =
* Reduce archive header padding on bottom
* Remove padding on wp.com comment form to make it line up with rest of post
* Increase margin on wp.com between respond form and page navigation
* Remove page background to allow for custom background
* Decrease padding to 2.5 on image and video headers
* Align images and videos with entry format block
* Archives need more padding on header before posts as not in hentry
* better screenshot.png to show more of page
* Screenshot
* Adds in chat format
* Adds in chat format icon
* Add footer border to no entry content
* Remove limit on image width to let user decide everything responsive image and video wise
* On smaller devices make gap even more for site header padding
* Add padding also to inner site header on smaller device
* Adds in padding for site title when on smaller devices. This avoids menu block overlap.
* Reflect video changes in js for images
* Js loading now switches class to ensure images and videos only show when in right position
* Use post format check on feature thumbnails
* Increase entry content image padding at bottom to balance better with p tags
* Reduce padding on bottom of head images
* Remove margin top on caption images and center align them
* Featured images and videos clean up
* Fixed margin on caption images
* Better js calling for tonal functions
* Better video padding
* Forces videos even if not responsive to be center aligned
* Remove duplicate genericon class
* Add larger left and right margins on alignments depending on device size
* Make margins on entry-content img top and bottom
* Better image margin padding
* Remove spelling mistake in 404.php
* Add in .entry-title to page headers to keep same styling as posts
* Add .entry-content to 404 content to ensure styling
* Fix header not being padded or centered on 404 page
* Flip position of video post format
* Limit post format video width
* Split out the video in post formats to get it responsive.

= 7 March 2014 =
* Fix full width video post formats
* Reduce navigation width to give a margin against widgets
* Reduce image p padding
* Fix padding on entry header
* On post format aside don't have padding on entry header.
* On larger devices where use wide image in entry content, allow more spacing with text
* Add top and bottom margin to entry content images
* Only add padding on sharedaddy div to allow for empty wrapper div
* Spelling, space and tidying
* Fix misspelling in 404 page
* change description on stylesheet
* Rtl
* Increase bottom margin on widgets
* Better widgets and menus
* Double up entry image spacing on bottom
* Remove p specific image and make a device changing margin on images
* Better spacing on image and embeds in p tags
* Double showing of post format for audio and image
* Admin custom header layout wasn't reflecting the front as it should
* Better custom header h1 and h2 placing
* Better font sizes for mobile headers
* Alignment and line height
* Change fonts to be based on % for smaller devices rather than a font scale
* Remove fixed border when on mobile
* Tonal - Better color annotations mixes

= 6 March 2014 =
* Require class.color to avoid clash when using tones and custom colors
* Custom color
* Tidying and clean up
* Fix up comments and function formats
* Adds audio to post format list
* remove border on input field if no tone

= 5 March 2014 =
* Better comment styles for smaller devices
* Wp.com styling
* wpcom colors
* Update tags and stylesheet description
* Remove unused navigation js

= 4 March 2014 =
* Better form elements
* Html element
* Custom header

= 3 March 2014 =
* Refine infinite scroll styles
* Adds infinite scroll
* Makes video post formats wider
* Remove widget panel js
* Package name captialisation and string tidy
* Initial commit of new theme
