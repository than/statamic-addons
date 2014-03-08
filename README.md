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

Using `{{ day_of_week|substr:3 }}` inside with entries loop will keep the output neat as "Monday, Tuesday" etc. instead of "1 - Monday, 2 - Tuesday" etc. 
