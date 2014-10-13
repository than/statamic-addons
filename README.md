Statamic Addons
===============

A collection of Statamic addons and utilities.


## [Multidate for Statamic](http://lodge.statamic.com/public-house/346-multidate-for-statamic)

If you've ever wanted to store multiple dates on a single entry, this is the add-on for you.

![Multidate's inline datepicker](http://dirigible.us/add-ons/multidate/images/multidate-inline.png)

[Find out more &raquo;](http://lodge.statamic.com/public-house/346-multidate-for-statamic)

[Download and donate &raquo;](https://gumroad.com/l/multidate-for-statamic)


## Substr

**Substr** is a variable modifier that exposes PHP's `substr` function in your templates.

#### Usage

Substr accepts one or two integers and returns the resulting substring.

If `{{ variable }}` is set to output the string "This is text", this variable tag `{{ variable|substr:2:-1 }}` will output "his is tex".

#### In Practice

A great way to use **Substr** is as a way to order entries loops by a select field. For example, imagine a select field which contains the days of the week. `{{ entries:listing sort_by="day_of_week" }}` will sort the resulting list alphabetically.

By adding a number to the beginning of each select item, you can sort by the day of the week.

```
day_of_week:
  type: select
  display: Day of the Week
  options:
    - 1 - Monday
    - 2 - Tuesday
    - 3 - Wednesday
    - 4 - Thursday
    - 5 - Friday
    - 6 - Saturday
    - 7 - Sunday
```

Using `{{ day_of_week|substr:3 }}` inside the entries loop will keep the output neat as "Monday, Tuesday" etc. instead of "1 - Monday, 2 - Tuesday" etc.

Note: This is the equivalent of `{{ day_of_week|reverse|backspace:3|reverse }}` which is a bit verbose.


## Current Datemath

This plugin allows you to run date addution and subtraction operations on today's date.

The `{{ current_datemath }}` tag accepts integers in `add` and `subtract` parameters. As you might expect, `add` increases the date by the provided number of days while `subtract` decreases the date.

The tag also accepts the standard `format` parameter found in the `{{ current_date }}` tag.

#### Usage

If today is *2014-03-10*, `{{ current_datemath add="10" }}` will return *2014-03-20*.

If today is *2014-03-10*, `{{ current_datemath minus="10" format="F jS"}}` will return *February 28th*.


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

Turn those boring old ampersands into the stunning conjunctions of your dreams.

![](http://than.to/1en0L.png)

#### Usage

Pipe Fancy Amps into your variable like any other modifier: `{{ content|fancyamps }}`

Fancy Amps takes any space-padded ampersand in your output and replaces it with ` <span class="fancyamp">&amp;</span> '. (The padding spaces remain intact.)

Add the following CSS into your site's theme and you so fancy.

`.fancyamp { color: inherit; font-size: inherit; font-family: Baskerville, Palatino, "Palatino Linotype", "Book Antiqua", "Constantia", serif; font-style:italic; }`

Don't like the look of Baskerville's &amp;? See [Use the Best Available Ampersand](http://simplebits.com/notebook/2008/08/14/ampersands-2/) for more suggestions.