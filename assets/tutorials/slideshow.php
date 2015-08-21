<div id="slides" data-tutorial-title="How to Make a New Tutorial Slideshow" data-toc="yes">

          <section>
            <h3>So You Think These Tutorials Are Pretty Slick, Eh?</h3>
            <p>It's pretty easy to create one if you know some basic HTML. In this short tutorial (how appropriate!) you'll get a quick reference for creating new slideshows. For those interested in how these work, a few slides at the end will explain the CSS, JavaScript, and PHP that make it all work.</p>
          </section>
          <section>
            <h3>Create the Tutorial File</h3>
            <p>Open the text editor of your choice: Notepad, Atom, Notepad++, etc. (Not Word!). Decide on a descriptive name for the tutorial and save it with the "php" file extension. For example, the file for this tutorial is called 'slideshow.php'. When you are done, you'll send this file to the intranet administrator to upload to the site.</p>
          </section>
          <section>
            <h3>Add Some DIV tags</h3>
            <p>The DIV tag identifies the text inside it as part of a slideshow. It'll contain two attributes: an ID, which must be "slides", and a data-tutorial-title attribute, which will contain the title of your tutorial. Here's what the DIV tags for this tutorial look like:</p>
            <blockquote class="code">
              <p>&lt;div id="slides" data-tutorial-title="How to Make a New Tutorial Slideshow"&gt;</p>
              <p>&lt;/div&gt;</p>
            </blockquote>
          </section>
          <section>
            <h3>Add a Slide</h3>
            <p>Inside the DIV tag, add a SECTION opening and closing tag. Each SECTION represents a slide. Whatever HTML you write inside a section will be the content of the slide. To keep things consisten, write the title of each slide between H3 tags, and body text within paragraph tags.  Here's what the code for the first slide looks like:</p>
            <blockquote class="code">
              <p>&lt;section&gt;<br>
              &lt;h3&gt;So You Think These Tutorials Are Pretty Slick, Eh?&lt;/h3&gt;<br>
              &lt;p&gt;It's pretty easy to create one if you know some basic HTML. In this short tutorial (how appropriate!) you'll get a quick reference for creating new slideshows. For those interested in how these work, a few slides at the end will explain the CSS, JavaScript, and PHP that make it all work.&lt;/p&gt;<br>
              &lt;/section&gt;</p>
            </blockquote>
          </section>
          <section>
            <h3>Advanced Styling</h3>
            <p>That's basically it! Create as many sections as you need slides. All the functionality for the Next and Previous buttons, the progress bar, etc. will be handled in the background.</p>
            <p>But what if you want to add more than just plain text paragraphs?  For the most part, plain HTML is all you need, but there are a couple extra CSS classes you have at your disposal.</p>
            <h4>Adding Code Blocks</h4>
            <p>If you want to include code in your slide, add the 'code' class to a BLOCKQUOTE tag. You'll have to use HTML escape characters to display HTML tags as plain text. For example, '&lt;p&gt;' must be typed in as '&amp;lt;p&amp;gt;' Here's what the previous slide looks like in HTML:</p>
            <blockquote class="code">
              &lt;section&gt;<br>
                &lt;h3>Add a Slide&lt;/h3&gt;<br>
                &lt;p>Inside the DIV tag, add a SECTION opening and closing tag. Each SECTION represents a slide. Whatever HTML you write inside a section will be the content of the slide. To keep things consisten, write the title of each slide between H3 tags, and body text within paragraph tags.  Here's what the code for the first slide looks like:&lt;/p&gt;<br>
                &lt;blockquote class="code"&gt;<br>
                  &lt;p&gt;&amp;lt;section&amp;gt;&lt;br&gt;<br>
                  &amp;lt;h3&amp;gt;So You Think These Tutorials Are Pretty Slick, Eh?&amp;lt;/h3&amp;gt;&lt;br&gt;<br>
                  &amp;lt;p&amp;gt;It's pretty easy to create one if you know some basic HTML. In this short tutorial (how appropriate!) you'll get a quick reference for creating new slideshows. For those interested in how these work, a few slides at the end will explain the CSS, JavaScript, and PHP that make it all work.&amp;lt;/p&amp;gt;&lt;br&gt;<br>
                  &amp;lt;/section&amp;gt;&lt;/p&gt;<br>
                &lt;/blockquote&gt;<br>
              &lt;/section&gt;<br>
            </blockquote>
            <p>Some of the most common escape charaters are &amp;lt; for <, &amp;gt; for >, &amp;amp; for an &, and &amp;nbsp; for a space.</p>
          </section>
          <!--<section>
            <h3>Jumping to a Specific Slide</h3>
            <p>To add a link to another slide, make sure that the SECTION tag of the target slide has a 'data-id' attribute, ex. &lt;section data-id="introduction"&gt;. Then create a hyperlink with the following format: &lt;a href="#" class="linkToSlide" data-target="introduction"&gt;Go to Introduction&lt;/a&gt;</p>
            <p>For example, I have added a data-id attribute to one of the earlier slides in this tutorial, like so: &lt;section data-id="add-slide"&gt;</p>
            <p>And you can jump there by clicking <a href="#" data-target="add-slide" class="linkToSlide">this link</a>, the code for which is:</p>
            <blockquote class="code">
              &lt;a href="#" data-target="add-slide" class="linkToSlide"&gt;this link&lt;/a&gt;
            </blockquote>
            <p>Just remember to come back!</p>
          </section>-->
          </div>
