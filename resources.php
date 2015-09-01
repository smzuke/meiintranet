<?php include('header.php'); ?>

<div class="container page">
  <div class="row">
    <div class="white-panel col-sm-8 col-sm-offset-2">
      <h1 class="page-header">Assorted Tools and Resources</h1>
      <p>From photos, to vectors, to desktop publishing, here are a few free, open source software packages you might be interested in downloading and playing around with.</p>
      <ul>
        <li><a href="http://pixlr.com/editor/">Pixlr Online Photo Editor</a><br>
        A free, online clone of Photoshop. Great for quick touch-ups and resizing large photos.</li>
        <li><a href="http://www.gimp.org/">GIMP Image Manipulation Software</a><br>
        Free, open source, and cross-platform photo editing software, for those who prefer a desktop application.</li>
        <li><a href="https://inkscape.org/en/">Inkscape Vector Design Software</a><br>
        Open source vector graphics editing software, for creating icons, freehand drawings, etc.</li>
        <li><a href="https://atom.io/">Atom Text Editor</a><br>
        A great text editor for working with HTML, CSS, and more. This intranet site was written in it!</li>
        <li><a href="http://www.scribus.net/">Scribus Desktop Publishing</a><br>
        A free version of InDesign, which is great since we only have a handful of InDesign licenses.</li>
      </ul>
      <br>
      <h2>Useful<sup>*</sup> Tools <em>(Experimental)</em></h2>
      <ul>
        <li><a href="leaveanote.php">
        Leave a Note!</a><br>
        Post a little note on your screen in case someone visits your computer while you're away.</li>
        <li><a href="cspan.php">
        C-SPAN Questionnaire Wizard</a><br>
        If C-SPAN sends us a list of questions for an event, use this form to generate a reply that you can copy and paste into an e-mail.</li>
        <li><a href="nvbuilder.php">Scholars in the News Wizard</a><br>
        Use this form to generate HTML code for the Scholars in the News section of News & Views. The code can be copied and pasted into Constant Contact.</li>
        <li><a href="wordcount.php">Word Counter</a><br>
        Believe it or not, the name pretty much says it all.</li>
        <li><a class="bookmarklet" href="javascript:var%20docTitle=document.querySelector('h1.node-title').firstChild.textContent;var%20docAuthor=document.querySelector('span.author').firstChild.nextSibling.textContent;var%20docDate=document.querySelector('span.date').textContent;var%20docURL=document.URL;var%20docSummary='<span%20style=&quot;color:%20#323232;font-weight:bold;&quot;>'+docTitle+'</span><br><span%20style=&quot;color:%20#323232;font-style:%20italic;&quot;>'+docAuthor+'</span><br><span><a%20style=&quot;color:%20#cc6633;%20font-weight:%20bold;%20text-decoration:%20none;&quot;%20track=&quot;on&quot;%20shape=&quot;rect&quot;%20href=&quot;'+docURL+'&quot;%20linktype=&quot;1&quot;%20target=&quot;_blank&quot;>Read%20Article</a></span><br><br>';alert(docSummary);void(0);">
        Sidebar Article Link</a><br>
        Drag this into your bookmarks bar. When you go to an article on MEI's website, click the bookmarklet, and a pop-up window will appear with HTML code that you can drop into Constant Contact. Neat!</li>
        <li><a href="javascript:var%20blogPostTitle=document.querySelector('h3.entry-title').textContent;var%20blogPostURL=document.URL;var%20blogPostSummary='<a%20style=&quot;color:%20#cc6633;%20font-weight:%20bold;%20text-decoration:%20none;&quot;%20track=&quot;on&quot;%20shape=&quot;rect&quot;%20href=&quot;'+blogPostURL+'&quot;%20linktype=&quot;1&quot;%20target=&quot;_blank&quot;>'+blogPostTitle+'</a><br><br>';alert(blogPostSummary);void(0);" class="bookmarklet">Editor's Blog Link</a><br>
        Drag this into your bookmarks bar. When you go to a post on the MEI Editor's Blog, click the bookmarklet, and a pop-up window will appear with the HTML code that you can drop into Constant Contact.</li>
      </ul>
      <br>
      <p><sup>*</sup><em>Tools may or may not be at all useful.</em></p>
      <br>      
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
