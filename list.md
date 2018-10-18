- set up build process

- refactor css 
(inc text-transform to standardise tour venue and date formatting overriding jozef’s inconsistencies)

- review and cleanup templating structure: global perch_layout templates (clean separation of html/php; consolidate php/strip unecessary tags)

- bio content template with blocks

- news content template: perch content for album artwork; toggle outnow outsoon headline

- *nice to*: refactor tour date template with `<time datetime="">`[(time mdn)](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/time) 


************************************************************************************************************************************************ MARKDOWN ********************************************
[markdown guide — basic syntax](https://www.markdownguide.org/basic-syntax/)
# The largest heading
## The second largest heading
###### The smallest heading

**This is bold text**
*This text is italicized*
~~This was mistaken text~~
**This text is _extremely_ important**

In the words of Abraham Lincoln:

> Pardon my French

Use `git status` to list all new or modified files that haven't yet been committed.

Some basic Git commands are:
```
git status
git add
git commit
```

This site was built using [GitHub Pages](https://pages.github.com/).

You can make an unordered list by preceding one or more lines of text with - or *.

- George Washington
- John Adams
- Thomas Jefferson

To order your list, precede each line with a number.

To create a task list, preface list items with a regular space character followed by [ ]. To mark a task as complete, use [x].

- [x] Finish my changes
- [ ] Push my commits to GitHub
- [ ] Open a pull request

If a task list item description begins with a parenthesis, you'll need to escape it with \:

- [ ] \(Optional) Open a followup issue

[mastering markdownhttps](https://guides.github.com/features/mastering-markdown/)

[sublime editing](http://docs.sublimetext.info/en/latest/editing/editing.html)