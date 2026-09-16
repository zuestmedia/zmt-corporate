=== Corporate ===
Contributors: zuestmedia
Requires at least: 4.7
Tested up to: 7.1
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Corporate is a lightweight and customizable WordPress theme by ZuestMedia for business, portfolio and content websites.

== Description ==

[Corporate](https://zuestmedia.com/corporate/) is a lightweight, fast and customizable WordPress theme by ZuestMedia.

The theme combines the flexibility of the WordPress block editor with a proven classic theme architecture. It provides flexible layouts, block-based content, Customizer integration and a modular structure for building business, portfolio and content-driven websites.

Corporate works as a standalone WordPress theme. For additional theme-specific settings, block templates, starter designs and integrations, it can be extended with the free [ZMPlugin](https://wordpress.org/plugins/zmplugin/) companion plugin.

= ZMPlugin Theme Companion =

[ZMPlugin](https://wordpress.org/plugins/zmplugin/) is the official companion plugin for ZuestMedia WordPress themes.

When used with Corporate, ZMPlugin adds additional theme settings and Customizer options as well as access to block templates, the Design Explorer and other theme-specific functionality.

ZMPlugin is recommended but not required. Corporate can also be used standalone and customized programmatically through a child theme.

= Block Templates =

Corporate supports block-based templates for reusable static and dynamic content.

Templates can be edited using the native WordPress block editor and provide a flexible way to create content sections that integrate with the theme.

= Design Explorer =

When using ZMPlugin, the Design Explorer provides access to preconfigured starter designs that can be imported as a starting point for a new website.

= Customizer =

Corporate integrates with the WordPress Customizer for configuring the appearance of your website.

Additional theme-specific settings and Customizer options are available when using the ZMPlugin companion plugin.

= Modular Structure =

Corporate uses a modular theme structure that provides flexibility when building different layouts.

Theme elements such as the title, content, featured image, categories and other components can be positioned and styled according to the selected layout and theme configuration.

Developers can further customize Corporate using a child theme.

== Resources ==

Learn more about [Corporate](https://zuestmedia.com/corporate/) and other [ZuestMedia WordPress themes](https://zuestmedia.com/themes/).

For documentation and help, visit the [ZuestMedia documentation](https://zuestmedia.com/docs/).

You can also find ZuestMedia on [GitHub](https://github.com/zuestmedia/).

== Frequently Asked Questions ==

= Is Corporate free? =

Yes. Corporate is free and distributed under the GPLv2 or later license.

= Is there a companion plugin? =

Yes. [ZMPlugin](https://wordpress.org/plugins/zmplugin/) is the free official companion plugin for Corporate and other supported ZuestMedia themes.

It adds additional theme settings, Customizer options, block templates, starter designs and other theme-specific functionality.

ZMPlugin is recommended but not required to use Corporate.

= Can I use Corporate without ZMPlugin? =

Yes. Corporate can be used as a standalone WordPress theme.

ZMPlugin adds additional configuration options and theme-specific functionality, but the theme itself does not require the plugin to operate.

= How do I install Corporate from WordPress? =

Go to Appearance > Themes > Add New in your WordPress Dashboard.

Search for "Corporate", click "Install" and then activate the theme.

= How do I install Corporate from a ZIP file? =

Go to Appearance > Themes > Add New > Upload Theme in your WordPress Dashboard.

Select the theme ZIP file, click "Install Now" and then activate the theme.

== Changelog ==

= 2.1.3 =
* Update: tested up to WP 7.1
* Update: Translation files

= 2.1.2 =
* Fix: ZMTheme was not up to date

= 2.1.1 =
* Update: tested up to WP 6.9

= 2.1.0 =
* New: Delete options and theme_mod on action delete_theme
* Update: ThemeImport moved from ZMPlugin to ZMTheme to auto-import styles in child themes
* Update: Child Themes use now separate com_ settings in wp_options
* Fix: Themes & Child Themes Display Name uses always style.css Name

= 2.0.4 =
* Fix: Add widgets_init im zmthemes modSidebar again and use action 'init' with prio 0 in zmplugin to start earlier

= 2.0.3 =
* Fix: Move do_action 'after_setup_ZMTheme' after Theme Init Function is proceeded -> at end of initTheme()

= 2.0.2 =
* Update: Textstrings
* Fix: Load Theme via default action 'after_setup_theme', if ZMPlugin is not installed. 1. Check if ZMPlugin is installed! 2. Check version of ZMPlugin! 3. Use the correct action 'zmplugin_last_action' -> theme needs different action to initialise, because zmplugin actions are not available if no zmplugin!
* Fix: add_theme_support functions called directly with 'after_setup_theme' from Init.php

= 2.0.1 =
* Fix: Action loading order

= 2.0.0 =
* Update: tested up to 6.8
* Update: CSS & JS Framework UIKIT 3.23.12 
* Fix: _load_textdomain_just_in_time; now initialising at after_setup_theme

= 1.1.9 =
* Update: tested up to 6.7

= 1.1.8 =
* Fix: Child-Theme CSS file loading logic

= 1.1.7 =
* Update: 404 Error Page Show/Hide Header & Footer Sections
* Update: 404 Error Page add Sections Classes & Background Image Options
* Fix: 404 Error Page Show/Hide Modules

= 1.1.6 =
* Fix: NavMenu Dropdown_Navbar_Nav_* inverted color behavior
* Fix: Naming

= 1.1.5 =
* Fix: Navbar Search inverted color behavior
* Fix: NavContainer & NavSidebar in navbar

= 1.1.4 =
* Fix: Switch to WP-Update-API

= 1.1.3 =
* New: Margin Horizontal Settings in nav
* New: CSSVars navbar gap (padding)
* Update: Nav Modules optimized
* Update: UIKIT to 3.21.11
* Removed: Padding in menu 0 and use gap instead

= 1.1.2 =
* Update: UIKIT to 3.21.9
* Fix: view condition option "all single posttypes" added
* Fix: remove margin from first block in editor

= 1.1.1 =
* Fix: Powered by section label added
* Update: .pot file & translations

= 1.1.0 =
* Update: Version to 1.1
* Update: screenshot.png
* Update: Default container width is now 1200px like in blockeditor
* Update: style.css & style-editor.css
* Remove: AjaxPostsLoader2 and zmtheme2.js
* Remove: rotating class & js
* Remove: js social buttons script
* Fix: in navsearch autofocus off is by default = 2 
* Fix: Only default Menu is overflow auto

= 1.0.29 =
* Update: theme.json to v3
* Update: link hover effect in block-container 
* Update: .pot file added
* Update: translations
* Update: remove uk-navbar-center in NavMenu main menu
* Fix: add zmnavitems in NavMenu mobile dropdown menu
* Fix: Add uk-overflow-auto to NavMenu navbar, so no overlap on large menu
* Fix: Gradient Background in Editor
* Remove: index2 example version

= 1.0.28 =
* Update: Tested up to WP 6.6

= 1.0.27 =
* Removed: Accesibility Tag
* Update: UIKIT Default Button style
* Fix: automatically load child themes version for child style.css and child js scripts comming with child theme in config/theme/theme.php
* Fix: PHP 8.1 strpos & str_replace fixed "Passing null to parameter"

= 1.0.26 =
* Update: UIKIT CSS & JS to 3.21.5
* Update: UIKIT Js & Icons not dependent of jQuery anymore
* Update: zmtheme.js with strategy defer
* New: Child Theme Css and Js/Icons options added to use via theme config file
* Update: uikit 3.1.25 update of uk-nav-search classes
* Fix: #[\AllowDynamicProperties] where necessary
* Test: added zmtheme2.js and AjaxPostsLoader2.php test file to start tests without jquery

= 1.0.25 =
* Update: UIKIT CSS & JS to 3.20.5
* New: Theme setting added to asign template modules by page_ids (view.php)

= 1.0.24 =
* Fix: UIKIT update need new classes uk-navbar-container uk-navbar-transparent in navbar container to calculate new drop position
* Fix: UIKIT Dark & Light CSS

= 1.0.23 =
* Update: UIKIT CSS & JS to 3.18.3
* Update: readme description

= 1.0.22 =
* Update: Tested up to WordPress 6.4
* Update: UIKIT CSS & JS to 3.17.10

= 1.0.21 =
* New: data privacy checkbox to comments form, if a page is set in settings/privacy
* New: Comments privacy checkbox textstrings & translations
* Update UIKIT CSS & JS to  3.16.26
* Fix: In navbar use uk-button-link not text

= 1.0.20 =
* Update: Accesibility fix configSectionNewHTML - update date() and add external link note
* Update: Translations
* Update: Accesibility fix Render.php - added aria-hidden to ajax loading button icon 
* Update: Accesibility fix modMenu - add "Open menu" to dropdown navbar_dropdown_nav
* Update: Accessiblity fix zmtheme.js - adds aria-hidden to uk-close svg icon
* Update: Accesibility fixes in configNavMenu, configNavSearch, configNavToggle & configOffcanvasContainer
* Update: use pagination by default, ajax posts loading is an option

= 1.0.19 =
* Update UIKIT CSS & JS to  3.16.19
* Update: added accesibility-ready tag
* Update: translations de_CH & de_AT added
* Update: View / display settings updated -> loggedin: as single condition valid for all pages / if has other conditions than loggedin, loggedin valid only together with other conditions 
* Remove: section_offcanvas is not anymore set by default

= 1.0.18 =
* Update: View / display settings updated -> "hide if" display conditions added

= 1.0.17 =
* Fix: small fixes on AJAX Posts Loading Script and fallback nav only shown in archives
* Remove: pagination module for archives is now optionally available but not by default activated (replaced by ajax posts loading)

= 1.0.16 =
* New: AJAX Posts Loading in default WP Query and Custom Queries in section and module
* Update: zmtheme.js moved to app folder and new localize functionality for js_array scripts in main and child theme
* Update: textstrings for ajax loading button

= 1.0.15 =
* New: NavbarDropdownNav as default mobile menu
* Fix: uk-nav- / uk-navbar- / uk-drop-  -parent-icon
* Fix: ArticleContainer singular (div) and posts (article)
* Update: default_templates _offcanvas (remove modules due to new mobile menu), _singular (articlecontainer), _posts (articlecontainer)
* Update: config -> modules NavMenu, NavSearch
* Update: config template nav

= 1.0.14 =
* Update: UIKIT CSS & JS to 3.16.17
* Fix: default_config nav and navbar components updated due to uikit update to 3.16.17 (uk-navbar-item & dropdown)
* Fix: View status check conditions added
* Fix: Navbar parent icon
* Fix: Config check is_object added

= 1.0.13 =
* Fix: load child textdomain if is child theme 

= 1.0.12 =
* Fix: Order of modules

= 1.0.11 =
* Update: prepared for PHP 9; defined all dynamic properties in classes

= 1.0.10 =
* Update: Removed accesibility-ready tag
* Update: Footer Credentials
* Update: readme.txt link to zuestmedia.com
* Update UIKIT CSS & JS to 3.15.24
* Update: CI/CD Routines
* Fix: Minor Bug fixes

= 1.0.9 =
* Removed: style.css Custom Column Break for Blocks on small screen
* Fix: ThemeJSON Gradient Color mix-up fixed
* Fix: Escaping modErrorpage -> $text_html corrected

= 1.0.8 =
* Fix: Escaping LATEST possible before output in app/modules (getModule())

= 1.0.7 =
* Fix: escape functions added/updated CommentWalker, ThemeJSON, modCommentsCounter, modCommentsList
* Removed: Skewy

= 1.0.6 =
* New: ArticleContainer imageoverlay -wrap and -size args added and new module function to display overlays
* New: Assets/img/placeholder.png
* Update: UIKIT overlay.less and transition.less
* Fix: Element -> wraps with hr or img need close:false, so no closing tag is added (ContainerArticleList, Commentspagination)

= 1.0.5 =
* New: ThemeJSON update theme.json programmatically with pallette and gradient colors
* Update: style.css removed some styles
* Update: UIKIT Version 3.15.14 (console errors and less/css var updates)
* Update: Translations / only one textdomain
* Update: CommentWalker
* Remove: BlockPatterns.php
* Update: Helpers.php - move functions to ZMPlugin
* Update: TranslationStrings for submodule zmtheme-app
* Update: MenuWalker Accessibility, added Subtitle (Menu Description)
* Update: Only one Textdomain
* Update: Accessibility & Textstrings (Translations) updated mod and config of Authorbox, Autorlink, CommentsCounter, CommentsForms, ...
* Update: Accessibility CSSVars Colors
* Update: Templates - offcanvas below menu, taxonomy cat moved to top

= 1.0.4 =
* Update: Tested up to: 6.1

= 1.0.3 =
* Update: readme and style css
* Update: theme.json updated (v2 additional features)
* Update: added copyright and powered by
* Update: add icons via class with MenuWalker (nav-menus)
* Update: Language Files de_DE
* Fix: Text-Domain Strings
* Removed: Moved Custom Post Type for Block Templates to zmplugin

= 1.0.2 =
* Fix: Change Author URI to submit without error to WordPress Directory

= 1.0.1 =
* Fix: configContainer & configContainerArticleList remove module_inner_attrs hr, but added option in presets

= 1.0.0 =
* Update: readme.txt
* Update: screenshot.png
* Update: CSS wp-block-button no underline
* Update: Language Files
* Update: Comments mod, walker & config
* Update: configImage - remove posts caption
* Update: Authorbox/Commentslist -> Avatarsize & Class Options added & style update (border-circle)
* Remove: Starter Content
* Update: Errormenu text & link to zmplugin download
* Update: accesibility - skip to content link, html5 tags (header, main, footer), aria-label search, screen-reader-text to read-more, underline all content-links

= 0.9.11 =
* Update: Default Blog Style updated (config files)
* Update: style.css "tablet-landscape" class
* Update: UIKIT Version 3.15.10
* Update: modPostMeta not showing empty values anymore (needs update for showing serialized data if necessary in future)

= 0.9.10 =
* New: Background Image - Options for posts featured image and external url added
* New: Add a "MY Block Patterns" folder to your child-theme
* Fix: Block Separator alignment options added in style.css
* Fix: default_config optimizations
* Fix: section_content choices

= 0.9.9 =
* Update: Less/CSS Navbar item padding is 0

= 0.9.8 =
* Update: CSS Buttons / button_dark into folder

= 0.9.7 =
* Update: UIKIT Version 3.15.6
* Update: CSSVars config, presets, style.css and theme.json
* Removed: colors & gradients (kept in theme.json)
* New: CSS Type Selection

= 0.9.6 =
* Fix: Com-Type and Module labels fixed
* Update: Block Templates added assignment column

= 0.9.5
* New: Block Templates (CPT)
* Update: Startercontent simpler
* Update: UIKIT Version 3.15.3
* Update: some configFiles
* Update: Translation Files DE
* Fix: add alignfull / wide JS (to genereate CSS Var --scrollbar-width & --zm-wp-block-width) to head instead of zmtheme.js, to load faster and avoid window jumping
* Fix: update alignfull / wide css in blockeditor to fit always screen
* Fix: getQueryLoop json_decode true; wp_query needs output as array
* Removed: block-template test folders and files

= 0.9.4 =
* Update: ci/cd update
* Update: modQueryTerm added filter group control
* Update: modQueryTerm added filter-controll for portfolio js-filter-menu
* Update: UIKIT CSS overlay.less opacity to overlay-default and -primary
* Update: added var js_array_child_theme to add custom js in child themes (via config/theme.php)

= 0.9.3 =
* Update: Tested up to: 6.0.1
* Fix: post-id and -classes to most outer container
* Update: new cssvars - navbar-dropdown-background
* Removed: ie11 Support
* Update: UIKIT Version 3.15.1 and changed to secondary css type "theme"
* Update: configNavMenu; uk-drop removed
* Update: MenuWalker; uk-nav-parent-icon options added
* Fix: Block Templates folder renamed
* Update: Internationalization - added ZM Theme framework textdomain
* Update: Internationalization - Moved most translations to framework

= 0.9.2 =
* Update: BBPress compatibilty added

= 0.9.1 =
* Connected with ZM Update API

= 0.9.0 =
* Initial release of ZMT Corporate

== The theme uses the following third-party resources ==
* uikit CSS, JS, Icons Framework
License: MIT
Source: https://getuikit.com/

* screenshot.png and placeholder.png
License: GPLv2 or later
Source: own creation of ZuestMedia GmbH, contains Google Font Icon

* Google Font Icons
License: Apache License Version 2.0
Source: https://fonts.google.com/icons

== Copyright ==
ZMT Corporate WordPress Theme, Copyright 2023 zuestmedia.com
ZMT Corporate is distributed under the terms of the GNU GPL
