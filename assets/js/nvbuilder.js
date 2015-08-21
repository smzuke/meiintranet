$(document).ready(function(){
  var populated = false;
  $('#addQuoteBtn').on('click', function(){
    var node = document.createElement("LI");
    var textnode = document.createTextNode('<div style="clear: both; margin: 22px 0;font-family:arial;"><span style="font-size: 10pt; padding-bottom: 4px; padding-right: 20px; border-bottom: 1px solid #d0ba96;"> <span style="font-weight: bold; color: #333;">'
      + document.getElementById('speaker').value
      + '</span> - <a style="text-decoration: none; color: #cc6633; font-weight: bold;" shape="rect" href="'
      + document.getElementById('url').value
      + '">'
      + document.getElementById('source').value
      + '</a></span>'
      + '<p style="font-family: georgia; font-size: 12pt; font-weight: normal; color: #555; line-height: 1.3em; margin-top: 8px; margin-bottom: 0; padding: 0 14px 0 26px;background-image: url(\'https://mlsvc01-prod.s3.amazonaws.com/2cbc12bc001/05e6a7ad-fc35-45b4-bcb7-a7d930ea4268.png?ver=1432909700000\');background-repeat:no-repeat;">'
      + document.getElementById('quote').value
      + '&rdquo;</p></div>');
    node.appendChild(textnode);
    document.getElementById("list").appendChild(node);
    addFrame();
    return false;
  });
  $('#addPublicationBtn').on('click', function(){
    var node = document.createElement("LI");
    var textnode = document.createTextNode('<div style="clear: both; margin: 22px 0;font-family:arial;color:#333;font-size:10pt;">'
      + '<span style="color:#b63500;font-weight:bold;">op-ed</span><br>'
      + '<span style="font-size:14pt;"><a style="text-decoration: underline; color: #092c57; font-weight: normal;font-family:georgia;" shape="rect" href="'
      + document.getElementById('pubUrl').value
    + '">'
    + document.getElementById('title').value
      + '</a></span><br>'
    + '<span style="font-weight:bold;">By '
    + document.getElementById('author').value
    + '</span> - <span style="font-style:italic;">'
    + document.getElementById('outlet').value
      + '</span></div>');
    node.appendChild(textnode);
    document.getElementById("list").appendChild(node);
    addFrame();
    return false;
  });
  $('#addFeatureBoxBtn').on('click', function(){
    var node = document.createElement("LI");
    var textnode = document.createTextNode('<div style="clear: both; margin: 22px 0;font-family:arial;color:#333;font-size:10pt;border:1px solid #d0ba96;border-top:4px solid #d0ba96;padding:10px;background-color:#f1eae0;">'
      + '<p style="color:#092c57;font-weight:normal;font-family:georgia;font-size:18pt;margin:0 0 8px 0;">'
      + document.getElementById('featureTitle').value
      + '</p><image src="https://imgssl.constantcontact.com/letters/images/v8_your_image_100x100.gif" style="float:right;width:120px;margin:0 0 8px 12px;" />'
      + '<p style="margin:0;line-height:1.3em;width:240px;">'
      + document.getElementById('featureText').value
      + '</p><p style="clear:both;line-height:0px; visibility:hidden;">&nbsp;</p></div>');
    node.appendChild(textnode);
    document.getElementById("list").appendChild(node);
    addFrame();
    return false;
});
  //Creates the HTML prefix and suffix so that the user can copy and paste over the entire HTML source of the block in Constant Contact.
  //It only runs the first time an item is added. Subsequent additions are appended within the frame.
  function addFrame() {
      if (!populated) {
        var prefixTextNode = document.createTextNode('<table styleclass=" style_BlockMargin" style="border: 1px none #fbfaf8; margin-bottom: 5px;" id="textEdit" border="0" cellpadding="10" cellspacing="1" width="100%"><tbody><tr><td style="color: #000000;"><div>');
        document.getElementById('prefix').appendChild(prefixTextNode);
        var suffixTextNode = document.createTextNode('</div></td></tr></tbody></table>');
        document.getElementById('suffix').appendChild(suffixTextNode);
        //document.getElementById('input').setAttribute('class', 'dividerLine');
        document.getElementById('explainer').setAttribute('class', 'removed');
        populated = 1;
      }
  };
});
