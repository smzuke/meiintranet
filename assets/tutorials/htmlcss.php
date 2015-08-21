<div id="slides" data-tutorial-title="Introduction to HTML and CSS!" data-toc="yes">

          <section>
            <h3>Our Objective</h3>
            <p>Welcome to the HTML and CSS tutorial! In this session, you'll get a quick introduction to the two of the fundamental languages needed to make modern webpages.</p>
            <p>Why is this worth your time? First of all, it's actually fun--these languages are very easy to learn and produce immediate, visible results. But these are also great skills to have on your resume. Unlike Microsoft Office, surprisingly few people in your generation have ever learned them.</p>
            <p>We will start with some plain text and transform it, piece by piece, into a (somewhat) more attractive article summary box.  We will cover basic HTML for adding structure to the text content, and CSS for adding styling.</p>
          </section>

          <section>
            <h3>HTML = Hypertext Markup Language</h3>
            <p>A <strong>markup language</strong> is a set of tags that can be embedded in digital text to provide additional information about the text in order to facilitate automated processing and displaying of it.</p>
            <p>In short, if you begin with plain text, HTML tells the browser the <strong>structure</strong> of that text.</p>
            <p>Structural elements include: headings, paragraphs, sections, headers/footers, lists, tables, etc.</p>
            <p><strong>Try It!:</strong> You can peek at the HTML code for any webpage to see how it's built. In Firefox, all you have to do is right-click and select "View Page Source." Try it for this Intranet page!</p>
          </section>

          <section>
            <h3>What You Can Do With HTML Tags</h3>
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
            <hr>
            <h3>Paragraphs</h3>
            <p>These can contain hyperlinks and inline styles like <strong>&lt;strong&gt;</strong> and <em>&lt;em&gt;</em>:</p>
            <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore <em>magna aliqua</em>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href='#'>consequat</a>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <hr>
            <h3>Ordered List</h3>
            	<ol>
            		<li>First item</li>
            		<li>Second item</li>
            		<li>Third item</li>
            		<li>Fourth item</li>
            	</ol>

            <h3>Unordered List</h3>
            	<ul>
            		<li>An item</li>
            		<li>Another item</li>
            		<li>A bunch of items</li>
            			<ul>
            				<li>Itemception</li>
            			</ul>
            		<li>Almost too many items</li>
            	</ul>

            <hr>

            <h3>Tables</h3>

            <table>
            	<tr>
            		<th></th>
            		<th scope="col">Saturday</th>
            		<th scope="col">Sunday</th>
            	</tr>
            	<tr>
            		<th scope="row">Tickets sold:</th>
            		<td>120</td>
            		<td>135</td>
            	</tr>
            	<tr>
            		<th scope="row">Total Sales:</th>
            		<td>$600</td>
            		<td>$675</td>
            	</tr>
            </table>

            <hr>

            <h3>Forms</h3>
            <form>
            	<p>Username:
            		<input type="text" name="username" size="15" maxlength="30" />
            	</p>
            	<p>Password:
            		<input type="password" name="password" size="15" maxlength="30"/>
            	</p>
            	<p>Select your favorite coding language: <br/>
            		<input type="radio" name="language" value="HTML" checked="checked" /> HTML
            		<input type="radio" name="language" value="CSS" /> CSS
            		<input type="radio" name="language" value="Javascript" /> Javascript
            	</p>
            	<p>Which is your favorite web app?</p>
            		<select name="app">
            			<option>Trello</option>
            			<option>Constant Contact</option>
            			<option>Donor Perfect</option>
            			<option>Newscred</option>
            			<option>Gmail</option>
            		</select>
            		<button>SUBMIT</button>
              </form>
              <br><br>
          </section>

          <section>
            <h3>Starting With Plain Text</h3>
            <p>Look at the text below.  You'll recognize a label, title, byline, and a couple paragraphs, but not so for a browser...</p>
            <p>Copy and paste the text into a text editor (like Notepad) and save it as index.html (the conventional name for the homepage of a website).  Open that file in a browser and see what you get.</p>
            <blockquote>
              <p>Op-Ed | October 8, 2014</p>
              <p>End Game Against ISIS will Require Departure of Assad</p>
              <p>By Paul Salem<br>
              Vice President for Policy and Research, The Middle East Institute</p>
              <p>The policies of Syrian President Assad and his regime created the conditions of civil war and state failure on which ISIS has thrived. In the long run, there will be no final defeat of ISIS or other violent extremist groups that prey on extreme popular discontent until he is removed, and a new inclusive order is put in place in Damascus. Ironically, the rise of the Islamic State and entry into the war of the United States and its allies is creating new conditions and calculations on the ground and could create the political conditions for a final settlement of the Syrian crisis.</p>
              <p>War is the continuation of politics by other means. Regrettably, attempts at transition and power sharing deals for Syria failed in the Geneva meetings of June 2012 and January 2014, and the war raged on with horrific consequences for the Syrian people. The simple reality that no political resolution was possible without the removal of a divisive leader was recognized in Iraq; the U.S. demanded that Prime Minister Nouri al Maliki be replaced and a power-sharing government be put in place prior to fuller U.S. and allied engagement.</p>
              <p>Image Location: http://www.mei.edu/sites/default/files/styles/medium/public/publications/AssadAndSoldiers.jpg</p>
            </blockquote>
          </section>

          <section>
            <h3>What You See is Not What You Get</h3>
            <p>You will have gotten a page that looks like this:</p>
            <blockquote>
              Op-Ed | October 8, 2014

              End Game Against ISIS will Require Departure of Assad

              By Paul Salem
              Vice President for Policy and Research, The Middle East Institute

              The policies of Syrian President Assad and his regime created the conditions of civil war and state failure on which ISIS has thrived. In the long run, there will be no final defeat of ISIS or other violent extremist groups that prey on extreme popular discontent until he is removed, and a new inclusive order is put in place in Damascus. Ironically, the rise of the Islamic State and entry into the war of the United States and its allies is creating new conditions and calculations on the ground and could create the political conditions for a final settlement of the Syrian crisis.

              War is the continuation of politics by other means. Regrettably, attempts at transition and power sharing deals for Syria failed in the Geneva meetings of June 2012 and January 2014, and the war raged on with horrific consequences for the Syrian people. The simple reality that no political resolution was possible without the removal of a divisive leader was recognized in Iraq; the U.S. demanded that Prime Minister Nouri al Maliki be replaced and a power-sharing government be put in place prior to fuller U.S. and allied engagement.
              Image Location: http://www.mei.edu/sites/default/files/styles/medium/public/publications/AssadAndSoldiers.jpg
            </blockquote>
            <p>Without HTML, a browser doesn't know what to do with all of your text content, so it just condenses it into one block of unformatted text.</p>
            <p>Let's help the browser out by adding some HTML tags...</p>
          </section>

          <section>
            <h3>Getting Started With Tags</h3>
            <p>Let's start with the title.  HTML has six levels of headings, starting from H1 and going down to H6 (H4-H6 are rarely used).</p>
            <p>The heading tags look like this (they are not case sensitive):</p>
            <blockquote class="code">&lt;h1&gt;End Game Against ISIS will Require Departure of Assad&lt;/h1&gt;</blockquote>
            <p>Most HTML tags have an opening tag and a closing tag with a forward slash.</p>
            <p>Save this in your text editor and reload index.html in your browser.</p>
          </section>

          <section>
            <h3>Now the Browser's Starting to Get It</h3>
            <p>Without having to tell it any specific details, your browser saw the Heading 1 tag and knew to make the text larger and bold, and to add some extra space underneath it.</p>
            <p>Browsers have built-in styles for all of the basic HTML tags.  Paragraphs, for example, will remain a default font size, but the browser will add some extra margin around them to make them easier to differentiate.</p>
            <p>Try adding paragraph tags (&lt;p&gt;...&lt;/p&gt;) around the two paragraphs in index.html.</p>
          </section>

          <section>
            <h3>Semantic HTML</h3>
            <p>Already the organization of the text is becoming easier to recognize.</p>
            <p>Good HTML code is said to be semantic, that is, the tags accurately describe the structure of the content.</p>
            <p>Some of the text on our page is neither a heading nor a paragraph, but we do want to describe it somehow.  For a stray line of text like the label or the byline, we use a &lt;div&gt; tag.  Complex HTML pages will use a lot of &lt;div&gt; tags.</p>
            <blockquote class="code">
              <p>&lt;div&gt;Op-Ed | October 8, 2014&lt;/div&gt;</p>
              <p>&lt;div&gt;By Paul Salem Vice President for Policy and Research, The Middle East Institute&lt;/div&gt;</p>
            </blockquote>
          </section>

          <section>
            <h3>Adding IDs</h3>
            <p>We can make the &lt;div&gt; tags more descriptive by adding an ID attribute, like this:</p>
            <blockquote class="code">
              <p>&lt;div id="label"&gt;Op-Ed | October 8, 2014&lt;/div&gt;</p>
              <p>&lt;div id="byline"&gt;By Paul Salem Vice President for Policy and Research, The Middle East Institute&lt;/div&gt;</p>
            </blockquote>
            <p>Notice that you don't have to include the attribute in the closing tag.</p>
            <p>The &lt;div&gt; tags won't make any immediately noticeable change to the page, but we'll come back to them shortly.</p>
          </section>

          <section>
            <h3>Adding Line Breaks</h3>
            <p>To split the author's name and title onto two lines, we use the &lt;br&gt; tag.  This is the first one we'll see that doesn't need a closing tag.</p>
            <blockquote class="code">
              &lt;div id="byline"&gt;By Paul Salem&lt;br&gt;<br>
              Vice President for Policy and Research, The Middle East Institute&lt;/div&gt;</p>
          </section>

          <section>
            <h3>Adding Hyperlinks</h3>
            <p>Finally! This is what the internet is all about--linking one text document to another at the click of a mouse. To do this we'll use an &lt;a&gt; (short for 'anchor') tag, with an href, or "hypertext reference," attribute stating where the link should go.</p>
            <p>Let's say we want the text, "Syrian President Assad," in the first paragraph to link to Assad's Wikipedia page.  Here's what that first sentence would look like:</p>
            <blockquote class="code">
              &lt;p&gt;The policies of &lt;a href="https://en.wikipedia.org/wiki/Bashar_al-Assad"&gt;Syrian President Assad&lt;/a&gt; and his regime created the conditions of civil war and state failure on which ISIS has thrived.&lt;/p&gt;
            </blockquote>
            <p>Save that in your index.html file and when you refresh the page, you'll find that the text has been hyperlinked (and your credibility as a researcher undermined. Sorry, find a better source next time!).</p>
          </section>

          <section>
            <h3>Adding Images</h3>
            <p>The line at the bottom is the URL for an image that we want to add.  This is another element that doesn't have a closing tag, and it also has an extra attribute for the source (url) of the image file. (You can grab the url for images online by right-clicking on them and selecting 'Copy Image Location')</p>
            <blockquote class="code">
              &lt;img src="IMAGE LOCATION"&gt;
            </blockquote>
            <p>Copy the url and paste it into an image tag placed between the byline and the first paragraph in index.html. The new line should look like this:</p>
            <blockquote class="code">
              &lt;img src="http://www.mei.edu/sites/default/files/styles/medium/public/publications/AssadAndSoldiers.jpg"&gt;
            </blockquote>
          </section>

          <section>
            <h3>Binding Multiple Elements Together</h3>
            <p>Finally, let's tell the browser that all of these elements we've been working on so far are related to each other by wrapping them all between &lt;article&gt; tags.</p>
            <p>Again, this won't have any immediate impact on the appearance, but you'll see how this comes in handy when we move onto the next section...</p>
          </section>

          <section>
            <h3>CSS = Cascading Stylesheet</h3>
            <p>CSS tells the browser what all the elements on the page should look like (hopefully prettier than the default!). Think of these as rules for setting fonts, colors, spacing, etc.</p>
            <p>In olden days, HTML contained styling information.  It would look like this:</p>
            <blockquote class="code">
              &lt;div style="display:block;width:280px;padding:30px;margin:30px auto;font-size:24px;font-family:georgia;color:navy;font-weight:normal;font-style:italic;background:#f4f4f4;border:1px dotted #ccc;line-height:1.6em;"&gt;How can I be so pretty, with such messy HTML?&lt;/div&gt;
            </blockquote>
            <p>Adding style attributes like this still works--you can paste the code above into your index.html if you want to see what it spits out. This technique is called "inline CSS," but it's now frowned upon. Today instead we use <strong>external stylesheets</strong>, saved as .css files, to keep all of our styling rules separate from the HTML.</p>
            <p><strong>Try It!:</strong> A great way to see what CSS does is to go to a webpage and simply turn it off. In Firefox you can do so by going to View > Page Style > No Style.  Try it on this page.</p>
          </section>

          <section>
            <h3>Making CSS Rules</h3>
            <p>A CSS rule looks like this: element { attribute: value; attribute: value; }<p>
            <p>As a convention, they're normally formatted like this in order to be more readable:</p>
            <blockquote class="code">
              body {<br>
              &nbsp;&nbsp;background-color: #cccccc;<br>
              &nbsp;&nbsp;color: #333333;<br>
              }
            </blockquote>
            <p>This would tell the browser to give the page a light gray background and a dark gray color for text.</p>
          </section>

          <section>
            <h3>Create Your CSS</h3>
            <p>Alright, let's make a stylesheet! Open a new plain text file in your text editor and save it as 'style.css' in the same directory as your index.html.</p>
            <p>Next you need to link the stylesheet to your HTML page. Go back to index.html and, at the very top, add this tag:</p>
            <blockquote class="code">
              &lt;link rel="stylesheet" href="style.css" type="text/css"&gt;
            </blockquote>
            <p>This tells your browser to go grab style.css, with the understanding that its relationship to index.html is as a stylesheet.</p>
            <p>Now let's add some rules to style.css and see what happens...</p>
          </section>

          <section>
            <h3>The Basic Rules</h3>
            <p>The fun part of CSS is that it's quite readable. You can probably understand a lot of it without any experience at all. Here are some rules to add to your style.css file. Can you guess what they'll do before you save it and reload index.html?</p>
            <blockquote class="code">
              body {<br>
              &nbsp;&nbsp;background:lightgray;<br>
              &nbsp;&nbsp;font-family:arial, sans-serif;<br>
              &nbsp;&nbsp;padding:30px;<br>
              &nbsp;&nbsp;font-size:14px;<br>
              }
            </blockquote>
            <p>If you guessed that it'd change the page's background color to a light gray, change the default font to Arial, add some padding (spacing) between the content and edges of the page, and set the font size to 14px, you were right!</p>
          </section>

          <section>
            <h3>Fixing the Image Placement</h3>
            <p>Let's move that image into the right position by creating a new rule in style.css for &lt;img&gt; elements.</p>
            <blockquote class="code">
              img {<br>
              &nbsp;&nbsp;float:right;<br>
              &nbsp;&nbsp;margin:14px 0 14px 28px;<br>
              }
            </blockquote>
            <p>The float attribute tells the browser to push the image to the right side of the window and let text flow around it on its left side.</p>
            <p>Margins tell the browser how much space to leave between the target element and others around it. You can set margins specific to each side (eg. margin-left:, margin-bottom:, etc.), or you can use the shorthand, which lets you set it for each side starting at the top and moving around clockwise.  So in this case we've set a top and bottom margin of 14px, a right margin of 0 pixels, and a left margin of 28px.</p>
            <p>To see how this works, it may be helpful to make your resize your browser window so that you can see how the text wraps around the image at different widths. As you can see, the margins ensure that the image always has some breathing room around it so it doesn't feel crowded by the text.</p>
          </section>

          <section>
            <h3>Styling the Article Container</h3>
            <p>To make this article pop out as a unified object, we'll add some styling to the &lt;article&gt; tag.</p>
            <blockquote class="code">
              article {<br>
              &nbsp;&nbsp;border: 1px solid #666;<br>
              &nbsp;&nbsp;border-top: 6px solid #666;<br>
              &nbsp;&nbsp;background-color:#eee;<br>
              &nbsp;&nbsp;padding:20px;<br>
              }
            </blockquote>
            <p>This will add a box around the article with a dark gray border, and a light gray background color. It'll also make the top border thicker than the others, and add some padding--breathing room--between the content and the article border.</p>
          </section>

          <section>
            <h3>Targeted Styles</h3>
            <p>Add these rules to your style.css and see what happens:</p>
            <blockquote class="code">
              a {<br>
              &nbsp;&nbsp;color: maroon;<br>
              &nbsp;&nbsp;font-weight: bold;<br>
              }<br>
              <br>
              #label {<br>
              &nbsp;&nbsp;color: maroon;<br>
              &nbsp;&nbsp;font-weight:bold;<br>
              }<br>
              <br>
              #byline {<br>
              &nbsp;&nbsp;font-weight:bold;<br>
              }
            </blockquote>
            <p>The &lt;a&gt; tag rule will change the hyperlink color to maroon. We've also targeted the text lines with the label and byline IDs using the hashtag symbol.</p>
          </section>

          <section>
            <h3>Hover Effects</h3>
            <p>CSS lets you create some special effects when the mouse hovers over elements. The most common way this is used is to add some interactivity to hyperlinks.  Try this in you style.css file:</p>
            <blockquote class="code">
              a, a:visited {<br>
              &nbsp;&nbsp;color: maroon;<br>
              &nbsp;&nbsp;font-weight: bold;<br>
              &nbsp;&nbsp;text-decoration: none;<br>
              }<br>
              <br>
              a:hover {<br>
              &nbsp;&nbsp;text-decoration: underline;<br>
              }
            </blockquote>
            <p>First you'll see that we've added "a:visited" to our hyperlink rule, separated by a comma. This means the rules inside the brackets will apply both to new hyperlinks and to ones that have previously been clicked (by default those turn that ugly purple color).</p>
            <p>The "a:hover" rule applies just to when the mouse is over a hyperlink. You'll see in the output that hyperlinks are now not underlined by default, but an underline will appear when you hover over the link.</p>
          </section>

          <section>
            <h3>Adding Multiple Articles</h3>
            <p>We're almost done! If you want to see the power of all this code in action, go to your index.html and copy everything between and including the &lt;article&gt; tags and paste it at the bottom to instantly create a second article.</p>
            <p>If you refresh the page you'll find that you have two nicely formatted articles, but that they kind of run together.  We need to add some space between them.  So go to your style.css and add this rule to the &lt;article&gt; tag:</p>
            <blockquote class="code">
              margin-bottom: 40px;
            </blockquote>
            <p>No matter how many times you duplicate the article, you'll find that they are nicely spaced apart from each other.</p>
          </section>

          <section>
            <h3>The Final Code!</h3>
            <p>Here's what your index.html and style.css files should look like if you've been following along!</p>
            <p><strong>index.html</strong></p>
            <blockquote class="code">
              &lt;link rel="stylesheet" href="style.css" type="text/css"&gt;<br>
              &lt;article&gt;<br>
              &lt;div id="label"&gt;Op-Ed | October 8, 2014&lt;/div&gt;<br>
              &lt;h1&gt;End Game Against ISIS will Require Departure of Assad&lt;/h1&gt;<br>
              &lt;div id="byline"&gt;By Paul Salem&lt;br&gt;<br>
              Vice President for Policy and Research, The Middle East Institute&lt;/div&gt;<br>
              &lt;img src="http://www.mei.edu/sites/default/files/styles/medium/public/publications/AssadAndSoldiers.jpg"&gt;<br>
              &lt;p&gt;The policies of &lt;a href="https://en.wikipedia.org/wiki/Bashar_al-Assad"&gt;Syrian President Assad&lt;/a&gt; and his regime created the conditions of civil war and state failure on which ISIS has thrived. In the long run, there will be no final defeat of ISIS or other violent extremist groups that prey on extreme popular discontent until he is removed, and a new inclusive order is put in place in Damascus. Ironically, the rise of the Islamic State and entry into the war of the United States and its allies is creating new conditions and calculations on the ground and could create the political conditions for a final settlement of the Syrian crisis.&lt;/p&gt;<br>
              &lt;p&gt;War is the continuation of politics by other means. Regrettably, attempts at transition and power sharing deals for Syria failed in the Geneva meetings of June 2012 and January 2014, and the war raged on with horrific consequences for the Syrian people. The simple reality that no political resolution was possible without the removal of a divisive leader was recognized in Iraq; the U.S. demanded that Prime Minister Nouri al Maliki be replaced and a power-sharing government be put in place prior to fuller U.S. and allied engagement.&lt;/p&gt;<br>
              &lt;/article&gt;<br>
              &lt;article&gt;<br>
              &lt;div id="label"&gt;Op-Ed | October 8, 2014&lt;/div&gt;<br>
              &lt;h1&gt;End Game Against ISIS will Require Departure of Assad&lt;/h1&gt;<br>
              &lt;div id="byline"&gt;By Paul Salem&lt;br&gt;<br>
              Vice President for Policy and Research, The Middle East Institute&lt;/div&gt;<br>
              &lt;img src="http://www.mei.edu/sites/default/files/styles/medium/public/publications/AssadAndSoldiers.jpg"&gt;<br>
              &lt;p&gt;The policies of &lt;a href="https://en.wikipedia.org/wiki/Bashar_al-Assad"&gt;Syrian President Assad&lt;/a&gt; and his regime created the conditions of civil war and state failure on which ISIS has thrived. In the long run, there will be no final defeat of ISIS or other violent extremist groups that prey on extreme popular discontent until he is removed, and a new inclusive order is put in place in Damascus. Ironically, the rise of the Islamic State and entry into the war of the United States and its allies is creating new conditions and calculations on the ground and could create the political conditions for a final settlement of the Syrian crisis.&lt;/p&gt;<br>
              &lt;p&gt;War is the continuation of politics by other means. Regrettably, attempts at transition and power sharing deals for Syria failed in the Geneva meetings of June 2012 and January 2014, and the war raged on with horrific consequences for the Syrian people. The simple reality that no political resolution was possible without the removal of a divisive leader was recognized in Iraq; the U.S. demanded that Prime Minister Nouri al Maliki be replaced and a power-sharing government be put in place prior to fuller U.S. and allied engagement.&lt;/p&gt;<br>
              &lt;/article&gt;<br>
            </blockquote>
            <p><strong>style.css</strong></p>
            <blockquote class="code">
              body {<br>
              &nbsp;&nbsp;background:lightgray;<br>
              &nbsp;&nbsp;font-family:arial, sans-serif;<br>
              &nbsp;&nbsp;padding:30px;<br>
              &nbsp;&nbsp;font-size:14px;<br>
              }<br>
              <br>
              img {<br>
              &nbsp;&nbsp;float:right;<br>
              &nbsp;&nbsp;margin:14px 0 14px 28px;<br>
              }<br>
              <br>
              article {<br>
              &nbsp;&nbsp;border: 1px solid #666;<br>
              &nbsp;&nbsp;border-top: 6px solid #666;<br>
              &nbsp;&nbsp;background-color:#eee;<br>
              &nbsp;&nbsp;padding:20px;<br>
              &nbsp;&nbsp;margin-bottom: 40px;<br>
              }<br>
              <br>
              a, a:visited {<br>
              &nbsp;&nbsp;color: maroon;<br>
              &nbsp;&nbsp;font-weight: bold;<br>
              &nbsp;&nbsp;text-decoration: none;<br>
              }<br>
              <br>
              a:hover {<br>
              &nbsp;&nbsp;text-decoration: underline;<br>
              }<br>
              <br>
              #label {<br>
              &nbsp;&nbsp;color: maroon;<br>
              &nbsp;&nbsp;font-weight:bold;<br>
              }<br>
              <br>
              #byline {<br>
              &nbsp;&nbsp;font-weight:bold;<br>
              }
            </blockquote>
          </section>

          <section>
            <h3>The End!</h3>
            <p>Here are some resources for further learning and enjoyment:</p>
            <ul>
              <li><a href="http://cssdeck.com/labs">CSS Deck</a> - A way to work with HTML and CSS and see a live preview of the output.</li>
              <li><a href="http://bluefish.openoffice.nl/index.html">Bluefish</a> - A free, open source text editor that has some nice tools when writing HTML and CSS, particularly syntax highlighting.  (But remember, you can do all of this stuff in any text editor, even Notepad)</li>
              <li><a href="http://www.w3schools.com/">w3schools</a> - A free site with tutorials as well as reference pages for HTML, CSS, JavaScript...everything.</li>
              <li><a href="http://www.codecademy.com/">Codecademy</a> - Free, very well made online tutorials in web development and various languages.</li>
              <li><a href="http://www.amazon.com/Web-Design-HTML-JavaScript-jQuery/dp/1118907442/ref=sr_1_1?s=books&ie=UTF8&qid=1434730773&sr=1-1&keywords=jon+duckett">Web Design with HTML, CSS, JavaScript and jQuery</a> - If you're into offline resources, these are pretty and very accessible books by Jon Duckett. You only need to first book to do all the stuff I cover in the tutorial; the JavaScript book is for if you're feeling adventurous. I have a copy of each on my desk if you want to check them out.</li>
            </ul>
          </section>

          </div>
