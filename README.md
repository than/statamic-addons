Statamic Addons
===============

A collection of Statamic addons and utilities.


## [Multidate for Statamic](http://lodge.statamic.com/public-house/346-multidate-for-statamic)

If you've ever wanted to store multiple dates on a single entry, this is the add-on for you.

![Multidate's inline datepicker](http://dirigible.us/add-ons/multidate/images/multidate-inline.png)

[Find out more &raquo;](http://lodge.statamic.com/public-house/346-multidate-for-statamic)

[Download and donate &raquo;](https://gumroad.com/l/multidate-for-statamic)


## Substr

Substr is a variable modifier that exposes PHP's substr function in your templates.  [Repository](https://github.com/Dirigible/Statamic-Substr)

## Current Datemath

This plugin allows you to run date addution and subtraction operations on today's date. [Repository](https://github.com/Dirigible/Statamic-Current-Datemath)

## nbsp

**Nbsp** is a variable modifier that replaces spaces with non-breaking spaces &mdash; *&amp;nbsp;*.

A tag set to output *'The quick brown fox'* will now return *'The&amp;nbsp;quick&amp;nbsp;brown&amp;nbsp;fox'*.

#### Usage

Simply add the `nbsp` modifer to your variable tag and you're all set: `{{ variable|nbsp }}`.

This came in handy as I was building a responsive navigation bar and needed each nav item to remain intact as the viewport became smaller.


## Next Date

Given a day of the week, this plugin gives you the date of next occurance of that day.

#### Usage

The `{{ next_date }}` tag requires a `day` parameter &mdash; 'Monday', 'Tuesday', etc. &mdash; and accepts the standard `format` parameter for specifying the date format.

In practice, I use this tag to manage a set of recurring weekly events. With this tag, I can get the next *date* of an event that occurs every Monday. In effect: *next Monday*.

For example, if today is March 20th, 2014, `{{ next_date day="{day}" format="F jS, Y" }}` and `{day}` returns *Monday*, the tag will output *March 24th, 2014*.


## Previous Date

Given a day of the week, this plugin gives you the date of previous occurance of that day.

#### Usage

The `{{ prev_date }}` tag requires a `day` parameter &mdash; 'Monday', 'Tuesday', etc. &mdash; and accepts the standard `format` parameter for specifying the date format.

In practice, I use this tag to manage a set of recurring weekly events. With this tag, I can get the next *date* of an event that occurs every Monday. In effect: *next Monday*.

For example, if today is October 2nd, 2014, `{{ prev_date day="{day}" format="F jS, Y" }}` and `{day}` returns *Thursday*, the tag will output *September 25th, 2014*.


## Fancy Amps

Turn those boring old ampersands into the stunning conjunctions of your dreams.  [Repository](https://github.com/Dirigible/Statamic-Fancy-Ampersands)

## Hide Order

Does what it says on the tin. This add-on hides the *Order Number* field in the entry editor.

#### Usage

Drop the `hide_order` folder into your `_add-ons` directory.


## Hide Publish Date

Also what it says on the tin. This add-on hides the *Publish Date* field in the entry editor.

#### Usage

Drop the `hide_publish_date` folder into your `_add-ons` directory.


## Publish Date on Bottom

Surprise! It does what it says on the tin. This add-on puts the *Publish Date* field at the bottom of all other fields in the entry editor.

#### Usage

Drop the `publish_date_on_bottom` folder into your `_add-ons` directory.


## Homescreen Icon

Give your control panel the homescreen icon it deserves. This small addon generates the link tag for the icon.

I've included a transparent png which makes it easy to add your site's logo or image with a Statamic bug in the corner.

#### Usage

Drop the `homescreen_icon` folder into your `_add-ons` directory.

Touch 'Add to Homescreen' in your mobile device to create the bookmark.

![](http://than.to/1hdsU.png)

