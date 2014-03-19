Statamic Addons
===============

A collection of Statamic addons and utilities.


## Substr

**Substr** is a variable modifier that exposes PHP's `substr` function in your templates.

### Usage

Substr accepts one or two integers and returns the resulting substring.

If `{{ variable }}` is set to output the string "This is text", this variable tag `{{ variable|substr:2:-1 }}` will output "his is tex".

### In Practice

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

The `{{ current_datemath }}` tag accepts integers in `add`, `plus`, `subtract` and `minus` parameters. As you might expect, `add` and `plus` increases the date by the provided number of days and `subtract` and `minus` decreases the date.

The tag also accepts the standard `format` parameter found in the `{{ current_date }}` tag. 

### Usage

If today is *2014-03-10*, `{{ current_datemath add="10" }}` will return *2014-03-20*.

If today is *2014-03-10*, `{{ current_datemath minus="10" format="F jS"}}` will return *February 28th*.


## nbsp

**Nbsp** is a variable modifier that replaces spaces with non-breaking spaces &mdash; *&amp;nbsp;*.

A tag set to output *'The quick brown fox'* will now return *'The&amp;nbsp;quick&amp;nbsp;brown&amp;nbsp;fox'*.

### Usage

Simply add the `nbsp` modifer to your variable tag and you're all set: `{{ variable|nbsp }}`.

This came in handy as I was building a responsive navigation bar and needed each nav item to remain intact as the viewport became smaller.


## Next Date
