#  Ext: df_contentslide

<img src="https://www.sgalinski.de/typo3conf/ext/project_theme/Resources/Public/Images/logo.svg" />

License: [GNU GPL, Version 2](https://www.gnu.org/licenses/gpl-2.0.html)

Repository: https://gitlab.sgalinski.de/typo3/df_contentslide

Please report bugs here: https://gitlab.sgalinski.de/typo3/df_contentslide

TYPO3 version: >7.6 

## About
This extension enables you to make content collapsible by adding new configuration options to each content element in the backend.
 
## Installation
1. Install the extension with the extension manager

2. Include the TypoScript from df_contentslide in your root template

## Usage
The new content slide options can now be enabled in your TYPO3 backend by editing a content element:

- enable the checkbox located in the **Appearance** tab in the **Expand/Collapse Content** section
- now you have additional content slide options available:

	###### with AJAX (loads only text)
	
	This option can be useful if the element itself is generates a lot of traffic, i.e. lots of images or if you just want to hide the text from search bots.
	
	---
	###### initially expanded
	
	If checked the content will be initially visible, otherwise it will be collapsed.	
	
	---
	###### Select Layout
	
	By default only one layout is implemented, but this option allows users to make their own custom layouts.
	
	---
	###### Select animation
	Allows users to change the sliding animation (downwards, upwards or fade)
	
	
## Developer Guide

### Create custom animations
The extension provides a small API that you can use inside your own scripts to collapse and expand all or specific elements. 
Therefore the following functions can be called via the JavaScript object named **ContentSlideManager.instance**:

###### addSlides(_slides)
Add slides to the ContentSlideManager.

---

###### collapseAll()
Collapses all managed Slides.

---

###### expandAll()
Expands all managed Slides.

---

###### getAllSlides()
Get all available slide Objects.

---

###### getSlide(_hash)
Get the ContentSlide object associated with _hash. Each collapse link is assigned a unique hash:

	<div class="dfcontentslide-toggle">
			<h2 class="h2">
				<a href="/page/HASH">Expand/Collapse</a>
			</h2>
	</div>


### Create custom layouts and styles
You can add new layouts by adding items to the **tx_df_contentslide_layout** element in the TCA **Configuration/TCA/Overrides/tt_content.php**:

	'items' => array(
		...
		array(
			'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_layout.newLayout',
			'newLayout'
		),
		

Now you can style the new layout inside **Resources/Public/Stylesheets/df_contentslide.css** by creating a new class
**dfcontentslide-newLayout**. The class is applied to the wrapping div element of the content:

	<div class="dfcontentslide-wrap dfcontentslide-newLayout default-content-element" data-dfcontentslide-animation="slideDownwards">
		<div class="dfcontentslide-toggle">
				<h2 class="h2">
					<a href="/page/hash">Expand/Collapse</a>
				</h2>
		</div>
		<div class="dfcontentslide-content dfcontentslide-transition-slide-downwards">
			<div class="dfcontentslide-contentSub">
				<div id="c1517" class="default-content-element">
					<!-- Here is the wrapped content element -->
				</div>
			</div>
		</div>
	</div>