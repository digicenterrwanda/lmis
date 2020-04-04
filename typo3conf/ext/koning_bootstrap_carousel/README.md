# koning_bootstrap_carousel

This extension offers a carousel content element that renders Bootstrap 3.* compliant HTML.

It uses a background image rather than an img tag, so background-size and background-position can be managed (per slide).

# Setup

- Install the extension
- Add the ``Koning Bootstrap Carousel`` static template
- Add the plugin ``Bootstrap Carousel`` to your page

# Default styles

The default height is 600px. Override this by adding the following CSS:

    .koning-bootstrap-carousel .item {
        height: 1000px;
    }

# Override template

Add the following to your TypoScript setup:

    plugin.tx_koningbootstrapcarousel {
        view {
            templateRootPaths {
                20 = EXT:my_ext/Resources/Private/Templates
            }
            partialRootPaths {
                20 = EXT:my_ext/Resources/Private/Partials
            }
            layoutRootPaths {
                20 = EXT:my_ext/Resources/Private/Layouts
            }
        }
    }
