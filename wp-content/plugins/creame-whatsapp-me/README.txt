=== VVAme chat ===
Contributors: creapuntome, pacotole, davidlillo, monillo
Donate link: https://www.paypal.me/creapuntome/
Tags: whatsapp business, whatsapp, click to chat, button, whatsapp support chat, support, contact, directly message whatsapp, floating whatsapp, whatsapp chat
Requires at least: 3.0.1
Tested up to: 5.4
Requires PHP: 5.3
Stable tag: 3.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Connects a WordPress chat with WhatsApp. The best solution for marketing and support. Stop losing customers and increase your sales.

== Description ==

[wame.chat](https://wame.chat?utm_source=wporg&utm_medium=web&utm_campaign=v3_2) | [Add-Ons](https://wame.chat/en/addons/?utm_source=wporg&utm_medium=web&utm_campaign=v3_2) | [Docs](https://wame.chat/en/docs/?utm_source=wporg&utm_medium=web&utm_campaign=v3_2) | [Support](https://wame.chat/en/support/?utm_source=wporg&utm_medium=web&utm_campaign=v3_2)

### Connect a WordPress chat with WhatsApp. The best solution for marketing and support. Stop losing customers and increase your sales.

### New in WAme 3.2 📍

🌚 **Discover the new Dark Mode.** Great news for all those who prefer white text on a black background.  Now you will find an option to activate it in your settings.

### ⌁ What you can do with WAme ✅

#### 🛎 Insert a WhatsApp button on your website.
Define in which pages or zones it should appear, the delay time, if you want it to the right or to the left, only on mobile phones or also on the desktop.

#### 🔮 Magic WhatsApp button.
Add your logo, profile picture or even an animated gif. You can define a tooltip to capture the user's attention, the limit is set by your creativity.

#### 📱 Add multiple phone numbers.
You can serve users in different terminals, you can insert a different one in each page, product or section.

#### 🔴 Show a notification.
Use a balloon on the button to get the user's attention. In this way, you ensure that you do not miss any important message you want to give them, surprise them in a less intrusive way.

#### 📯 Create call-to-action messages.
For users to click on the button, use custom CTAs on each page, product or section. Welcome them, help them and offer them offers or promotions. [You can read more about this topic here](https://wame.chat/es/whatsapp-me-mucho-mas-que-un-click-to-chat/).

#### 💬 Customize conversation start messages.
So that the user does not waste time in writing. This way you will be able to know from which page it comes or what product is being consulted when you start the first conversation.

#### 🛒 Integration with WooCommerce.
Define CTAs and Custom Messages for product pages, you can use dynamic variables such as {SKU}, {PRICE} or {PRODUCT}.

#### 🏁 Analyze the conversion data in Google Analytics and Facebook Pixel.
Remember, you do not have to do anything, the plugin already creates and computes the events by itself. [You can read more about this topic here](https://wame.chat/es/wame-mide-los-eventos-de-whatsapp-en-google-analytics/).

#### 💱 Customize different languages.
To be able to support all your users, wherever they are. Our plugin is compatible with WPML and Polylang.

### ⌁ What you can´t do with WAme ⛔️

#### 👨‍🎨 Modify the appearance of the button.
Users recognize it instantly because it is in thousands of web pages and they know what it is for, it generates trust. If you modify it, you lose these important values.

#### 😡 Wasting time configuring other similar plugins.
Having many options is not an advantage, the configuration of WAme is so easy that in less than 2 minutes you will be ‘wasapeando’ with your clients.

### ⌁ Translations 🇦🇶
-[English (US)](https://wordpress.org/plugins/creame-whatsapp-me/)
-[Portuguese (Brazil)](https://br.wordpress.org/plugins/creame-whatsapp-me/)
-[Spanish (Spain)](https://es.wordpress.org/plugins/creame-whatsapp-me/)
-[Translate into your language](https://translate.wordpress.org/projects/wp-plugins/creame-whatsapp-me)

### ⌁ If you like WAme 😍
1. Please leave us a [★★★★★](https://wordpress.org/support/plugin/creame-whatsapp-me/reviews/#new-post) rating. We'll thank you.
2. Subscribe to our newsletter and visit our blog at [wame.chat](https://wame.chat/?utm_source=wporg&utm_medium=web&utm_campaign=v3_2).
3. Follow [@wamechat](https://twitter.com/wamechat) on twitter.

*WhatsApp and WhatsApp Logo are brand assets and trademark of Facebook, Inc. WAme is not in partnership, sponsored or endorsed by Facebook, Inc.*

== Installation ==

1. Upload the entire `creame-whatsapp-me` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= I can't see the button or it's over / under another thing =

You can change the position of the button so that nothing covers it by adding this CSS in *Appearance > Customize > Custom CSS*:

`.whatsappme { z-index:9999; }`

Greater values of z-index are left over, the default value is 400.

= What about GDPR? =

WAme don't use cookies.

WAme save two localStorage variables for proper operation:

- `whatsappme_visited` to know if is the first time on site or is a returning user.
- `whatsappme_hashes` if you set a Call To Action (CTA), when user launch WhatsApp or close Chat Window the CTA hashed is saved to prevent show automatically that CTA again.

= Google Analytics integration =

WAme send a custom event when user click to launch WhatsApp.

If Global Site Tag (gtag.js) detected:

`gtag('event', 'click', { 'event_category': 'WhatsAppMe', 'event_label': out_url })`

If Universal Analtics (analytics.js) detected:

`ga('send', 'event', 'WhatsAppMe', 'click', out_url })`

If your tracker doesn't have the standard name 'ga' you can set your custom name with 'ga_tracker' setting:

`add_filter( 'whatsappme_get_settings', function( $settings ){
    $settings['ga_tracker'] = 'my_custom_GA_name';
    return $settings;
} );`

= Google Tag Manager integration =

WAme send an event (if GTM detected) when user click to launch WhatsApp:

`dataLayer.push({ 'event': 'WhatsAppMe', 'eventAction': 'click', 'eventLabel': out_url });`

= Facebook Pixel integration =

WAme send a custom event if Facebook Pixel is detected when user click to launch WhatsApp:

`fbq('trackCustom', 'WhatsAppMe', { eventAction: 'click', eventLabel: out_url });`

= Other integrations =

There is a Javascript event that WAme triggers automatically before launch WhatsApp, which can be used to add your custom tracking code (or other needs).

`jQuery(document).ready(function($){
  $(document).on('whatsappme:open', function (event, args, settings) {
    // Your staff
    // Note: args.link is the link to open, you can change it
    // but only wa.me, whastapp.com or current domain are allowed.
  });
});`

= WPML/Polylang change Telephone by language =

WAme general text settings can be translated with the strings translation of WPML/Polylang. You only need to save WAme settings to register strings and make them ready for translation. But "Telephone" is not translatable by default. If you need different phone numbers for every language add the following php code in your theme functions.php and save WAme settings.

`add_filter( 'whatsappme_settings_i18n', function( $settings ) {
    $settings['telephone'] = 'Telephone';
    return $settings;
} );`

= Emojis are not saved =

To save emojis the site database must use utf8mb4 encoding.
If your database enconding is utf8 you can use emojis converting them to html entities with a tool [like this](https://mothereff.in/html-entities).

== Screenshots ==

1. Button on desktop.
2. Button with tooltip and custom image.
3. Call to action on desktop.
4. Button and call to action on mobile.
5. WAme general settings.
6. WAme advanced visibility settings.
7. WAme WooCommerce settings.
8. WAme on post/page edition.

== Changelog ==

= 3.2.3 =
* FIX svg in safari < 13.

= 3.2.2 =
* **NEW:** Metabox can override global settings and leave it blank with `{}`.
* **NEW:** Can use `wame_open` class on any element to open WAme or launch WhatsApp.
* **NEW:** Added 'whatsappme_delete_all' filter, set true to clear all WAme data on plugin uninstall.
* CHANGED Tested up to WordPress 5.4.
* CHANGED updated FAQs GDPR info to include localStorage vars.

= 3.2.1 =
* FIX svg animations on firefox.
* FIX empty messages on WP < 4.6.
* FIX Google Analytics 'ga' event not sent if gtag for GAds or GTM is present.

= 3.2.0 =
* **NEW:** Dark mode.
* **NEW:** Hide on mobile when keyboard is open.
* **NEW:** Post metabox show main WAme settings as placeholders.
* CHANGED webp support is now on server side.
* CHANGED rewrite of chatbox output, SVGs separated, full chatbox scroll and new filters.
* FIX 'apply_filters_deprecated' fatal error on WP < 4.6

= 3.1.4 =
* FIX php warning with new var {DISCOUNT} when price is zero.

= 3.1.3 =
* Minor improvements and link to Wame CTA Extras.

= 3.1.2 =
* **NEW:** WooCommerce Call to Action for Products on Sale, also added dynamic vars {DISCOUNT} {REGULAR}.
* FIX Fatal error when selected button image is deleted from media library.
* FIX WooCommerce settings not registered for translation.
* For devs: format replacements now also accepts callbacks.
* For devs: new javascript events for chat window 'whatsappme:show' 'whatsappme:hide'.

= 3.1.1 =
* CHANGED Tested up to WordPress 5.3
* FIX Save on the first time can store some settings incorrectly.
* FIX rtl styles for new button text.

= 3.1.0 =
* **NEW:** WhatsApp button image.
* **NEW:** WhatsApp button tooltip.
* **NEW:** Start WhatsApp button text on Chat Window.
* **NEW:** Option to disable automatic open of Chat Window.
* For devs: static functions moved to a WhatsAppMe_Util class.

= 3.0.3 =
* FIX in landscape or with long CTAs the chat window could be higher than view and can't be closed.
* For developers:
* New metabox filters 'whatsappme_metabox_output' and 'whatsappme_metabox_save'.
* Change filter 'whatsappme_message_replacements' to 'whatsappme_format_replacements'.
* Change filter 'whatsappme_message_send_replacements' to 'whatsappme_variable_replacements'.

= 3.0.2 =
* **NEW:** Send Facebook Pixel custom event when user launch WhatsApp.
* FIX empty tabs on settings page due to conflicts with other themes or plugins.

= 3.0.1 =
* FIX sometimes the phone number is lost in WAme settings on save.
* CHANGED Wame button z-index to 1000.

= 3.0.0 =
* **NEW:** Better Integration with WooCommerce: CTA and Custom Message for product pages and new dynamic variables {SKU}, {PRICE} {PRODUCT}.
* **NEW:** Admin help tab with styles and dynamic varibles info.
* **NEW:** For developers: a lot of new hooks to change or extend WAme functions.
* **NEW:** Custom javascript document event 'whatsappme:open' that allow trigger other actions and/or change the link url.
* CHANGED Rebrand "WhatsApp me" to "WAme chat".
* CHANGED Code linted following WordPress standar.
* FIX when post visibility was set as "hidden", it used default global visibility.
* FIX javascript error when "ga" global object is defined but isn't Google Analytics.
* FIX rtl styles for chat.

= 2.3.3 =
* FIX javascript error when "ga" global object is defined but isn't Google Analytics.

= 2.3.2 =
* FIX PHP notice on some archive pages.

= 2.3.1 =
* Readme texts and description.

= 2.3.0 =
* **NEW:** WPML/Polylang integration.
* **NEW:** Added setting to launch WhatsApp Web on desktop.
* **NEW:** Separated button delay and chat delay settings.
* **NEW:** dynamic variables {SITE}, {URL} and {TITLE} now also works on Call To Action.
* CHANGED Better ordered settings panel.
* FIX incorrect post id on loops can return post config instead main config.
* FIX typo error on filter "whatsappme_whastapp_web"

= 2.2.3 =
* **NEW:** Hide in front if editing with Elementor.
* CHANGED improvements in public styles.

= 2.2.2 =
* **NEW:** styles/scripts minified.
* FIX UX issues.

= 2.2.0 =
* **NEW:** Now can change telephone number on every post/page.
* **NEW:** Send Google Tag Manager event on click.
* **NEW:** New filter 'whatsappme_whastapp_web'. Set true if you prefer to open WhatsApp Web on desktop.
* **NEW:** "Send button" change when dialog is opened.
* UPDATED Tested up to Wordpress v.5.1.
* UPDATED International Telephone Input library to v.15.

= 2.1.3 =
* FIX PHP warning on some rare cases.

= 2.1.2 =
* FIX javascript error on iOS Safari private browsing.

= 2.1.1 =
* FIX javascript error on IE11.

= 2.1.0 =
* **NEW:** Button bagde option for a less intrusive mode.
* CHANGED now each different Call to Action is marked as read separately.
* CHANGED now first show Call to Action (if defined) before launch WhatsApp link.

= 2.0.1 =
* FIX removed array_filter function that requires PHP 5.6 min version.

= 2.0.0 =
* **NEW: Advanced visibility settings to define where to show WAme button.**
* **NEW:** WooCommerce integration.
* UPDATED International Telephone Input library to v.13.
* Minor fixes on fields cleanup and other improvements.

= 1.4.3 =
* NEW support for Google Analytics Global Site Tag (gtag.js).
* CHANGE events label now is the destination URL to match general behavior.
* UPDATED International Telephone Input library

= 1.4.2 =
* FIX JavaScript error introduced on v1.4.1.

= 1.4.1 =
* Fix JS frontend sometimes can't load WAme settings.
* Fix better Google Analytics event tracking when leave page.

= 1.4.0 =
* **NEW:** Added the option to define the first message to send. You can include variables such as {SITE}, {URL} or {TITLE}.
* Fix PHP notice when global $post is null (e.g. search results or login page).

= 1.3.2 =
* Only set admin/public hooks when it corresponds to improve performance and fix a notice on admin.

= 1.3.1 =
* Fix fatal error when the PHP mbstring extension is not active

= 1.3.0 =
* Added option to change position of button to left
* Added formatting styles for Call to action text like in WhatsApp: *italic* **bold** strikethrough

= 1.2.0 =
* Added International Telephone Input for enhanced phone input
* Phone number is cleared to generate correct WhatsApp links

= 1.1.0 =
* Added posts/pages option to override CTA or hide button
* Don't enqueue assets if not show button
* Added filters for developers

= 1.0.3 =
* Readme texts

= 1.0.2 =
* Fix plugin version

= 1.0.1 =
* Fix text domain

= 1.0.0 =
* First version

== Upgrade Notice ==

= 2.3.0 =
WPML and Polylang integration.
Added new settings to control delay and launch WhatsApp Web on desktop.
Dynamic variables {SITE}, {URL} and {TITLE} now also works on Call To Action.
Fixed incorrect WAme post settings on loops.
