# personalwebsiteproject

## Milestone 1 Feedback
There are many corrections that need to be made to this project before it can pass. There are technical problems and changes that need to be made to purpose/audience/goal/persona as well.

**I want to give you until Monday 10/23 (8:00 am) to get everything fixed. Any later than that and you run the risk of falling behind.**

First things first - Completely read the [Milestone 1 Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/). If you have any questions on the instructions please send me a Slack message. **It's important that all the instructions are followed precisely.**

The following need to be corrected:
- Directory structure and file names need to be fixed. Follow the instructions in the documentation.
- Purpose/Audience/Goal need to be improved - see below.
- Persona needs to be redone - see below.

Remember that I created some [Sample PWP Milestones](https://bootcamp-coders.cnm.edu/projects/personal/example/). These should give you a good idea of the kind of work we are looking for. We are looking for professional-level work - something that you would consider professional enough to hand to a technical lead or to a client. **Do not copy from the sample milestones**. Use it as a guide only.

#### Purpose
Add more detail to your purpose. What is the purpose for your PWP in detail? Are you looking for clients for freelance work? Will you be looking for an internship or an entry-level web developer job? Or something else entirely?

#### Audience
This should have more detail, and be more professional. Be more specific. What kinds of clients are you looking for?

#### Goal
Just like the above - it could be more specific and more professional.

#### Persona
This section needs the most work. This should not be written like a dialogue, but should be similar to the persona in the [Sample Milestones](https://bootcamp-coders.cnm.edu/projects/personal/example/). The Persona should contain a name (hypothetical), demographic information, the persona's needs and goals, technology used, etc. For more information on creating personas, read: 
- [Milestone 1 Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/)
- [Sample Milestones](https://bootcamp-coders.cnm.edu/projects/personal/example/)
- https://www.webcredible.com/blog/personas-definitive-guide/.

#### Code Corrections
- HTML is indented incorrectly - really be careful about this.
- line 29 - **always** use the `alt` attribute on images.
- In your .gitignore, line 1 should be `.DS_Store`, line 2 should be `/.idea` and add `/vendor` to line 3
- Nice work on adding some CSS - we'll begin to cover this next week!

 Unfortunately I can't pass your Milestone 1 until everything is fixed. **Please have the changes done by Monday, October 23rd**, and Slack me if you have any questions or concerns.
 
 ### Milestone 1 Updated Feedback
 Nice job updating and adding necessary detail to your purpose/audience/goal and Persona. You have enough here to begin a design strategy. Your focus is broad - targeting both potential employers and prospective clients. While this is certainly very do-able, I would advise you that if you're leaning more towards seeking out freelance clients then maybe focus your  design and content around that. There's a big difference between designing a web presence that is intended to drive sales and attract potential clients vs. a web developer portfolio that is part of an IT job search and is designed to be viewed by IT pros specifically.

 The line in the Persona that really stood out to me is: _"Issues: long pages, small lettering, to many colors or distracting buttons, slow loading, inaccurate search results, not being able to easily share a post with friends, and sloppy content placement."_ This tells me that a _refined and modern_ design approach may be what you're looking to achieve here. Something minimal, practical, yet attractive and ultimately very user friendly.

 (_Note: Posts and internal/programmatic search are out-of-scope for PWP - this would require a back-end. Integrating a site search for a one-page site (with a short page scroll) is likely unnecessary._)

 Since you want to take a more general approach and target both potential employers and clients, think of design and content  ideas that are informative enough for IT professionals while being "friendly" enough for potential clients. An elegant yet simple design will give your project a professional "polish" that will highlight your front end skills. Elegant design can be as simple as using one or _maybe_ two colors, a nice font for headings, good quality text content, and a few high quality images. Balance and consistency will make all the difference. It doesn't have to be complicated.

You might like to have a look at [https://www.siteinspire.com/](https://www.siteinspire.com/), and [http://www.htmlinspiration.com/](http://www.htmlinspiration.com/) to get some design inspiration for Milestone 2a. [Pixabay](https://pixabay.com/) is a resource for quality royalty-free stock images that might be useful. Just remember to keep things simple and straightforward due to the narrow scope of the project.

Nice work on making the major fixes and updates to your content and directory structure. There are a few small things that still need to be fixed, see Edits &amp; Suggestions below. 

Unfortunately because the updates were submitted late, I can only pass your Milestone 1 at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin work on [Milestone 2a](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/)

#### Edits &amp; corrections
- *milestone1.php* should be named `milestone-1.php` - small detail I know, but precise file naming is so important. Especially for capstone where they need to be exact otherwise everything can break.
- create a `css` directory inside of `/documentation`, and move your CSS file there. This is the correct way to organize these files. You'll need to update the path in the `<link>` tag in your HTML to match.
- Same thing for the image file... create a directory named `images` inside `/documentation`, and move your image there. Update the `url` path in the CSS stylesheet to match.

## Milestone 2&alpha; Feedback
This is a start - but I don't think that what I'm seeing is accurate enough to base your development on. The wireframes don't line up with the content strategy very well. It's clear that they were not planned or created together. You mention a lot of content you want to feature, but I don't see it anywhere in the wireframe plans. 

**I also don't see a contact form**. Where/how do you plan to feature that? The "Audience" and "Goal" sections I see in the wireframes don't belong there. That is not content you would put on your site.

The scale on mobile is much too small - it's practically unreadable on that phone screen. You'll need to make sure your content is bigger than that on an actual phone.

Other than these things, your layout is fairly simple and should be pretty easy to create using Bootstrap.

Keep in mind that a proper wireframe should have no graphic design elements on it. It's just a blueprint. I do see you included a background texture. I'm not sure if this is what you're planning on using, but if so, you'll likely need to find or create a small image tile and repeat it across your background as a `background-image` in CSS.

I also see your top navigation is on the bottom on mobile and on the top on desktop. This is easy to do using the [fixed-bottom](https://getbootstrap.com/docs/4.0/utilities/position/#fixed-bottom) class. You'll need some custom CSS to disable it using a `@media` query on large screens though.

Overall I suggest you do a little more planning on your layout and practice Bootstrap a little more before you begin developing your PWP. See if you can complete the Bootstrap Challenge from beginning to end successfully before you start coding PWP. Take no more than a few days at most, otherwise you risk falling behind schedule.

Your Milestone 2a passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Circle back with me if you have any questions of concerns. You will need Tier III work from here on to pass this project. Please inform your tutor of this.

## Milestone 2b Feedback
Nice work! Your Milestone 2b passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Here are some  notes from our meeting:
- Fix bottom scrollbar issue by putting the other card deck in a container, row and column. 
- Consider opening all external links in a new tab. You can do this by putting the `target="_blank"` attribute on the <a> tags.
- Build your contact form by the morning of 11/30. We'll demo how to wire it up on that date.
- You can remove `position: absolute;` from the body in your CSS file - it's not necessary.
